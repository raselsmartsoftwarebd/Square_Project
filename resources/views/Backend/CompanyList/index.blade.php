@extends('Backend.Layouts.app')

@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i>Manage Company List</h1>

        </div>
        <ul class="app-breadcrumb breadcrumb">


        </ul>
    </div>

    <div class="row">
        <div class="col-md-12">

            @if (session()->has('success'))
            <div class="alert alert-success">{{session()->get('success') }}</div>
           @endif


            <div class="tile table-responsive">
                <a href="{{ URL::to('companylist/create') }}"class="btn btn-info" style="float: right;margin-bottom:5px;margin-left:-5px;">Add New Company</a>
                <table class="table table-bordered">
                     <tr>
                        <th>SL</th>

                        <th>Name</th>

                        <th>Action</th>

                     </tr>
                     @foreach ($companylist as $list)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>

                            <td>{{ $list->name }}</td>



                            <td>

                                <div class="edit-delete-container">
                                    <div class="edit-delete-left-section">
                                        <a href="{{ URL::to('companylist/'.$list->id.'/edit') }}" class="btn btn-sm btn-info edit-button"><i class="ace-icon fa fa-pencil bigger-120"></i></a>
                                    </div>
                                    <div class="edit-delete-right-section">
                                        <form action="{{ url('companylist/'.$list->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger edit-button"><i class="ace-icon fa fa-trash-o bigger-120"></i></button>
                                           </form>
                                    </div>
                                  </div>

                            </td>
                        </tr>
                     @endforeach
                </table>
            </div>
        </div>

    </div>
</main>


@endsection
