@extends('Backend.Layouts.app')

@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> Manage Company</h1>
                <p>Manage Company Form</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Companies</li>
                <li class="breadcrumb-item"><a href="#">Show user</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">


                <div class="tile table-responsive">
                    <h3 class="tile-title">Bordered Table</h3>
                    <table class="table table-bordered">
                         <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Pri Phone</th>
                            <th>Sec Phone</th>
                            <th>Hotline</th>
                            <th>Pri mail</th>
                            <th>Sec mail</th>
                            <th>Pri add</th>
                            <th>Sec add</th>
                            <th>Website</th>
                            <th>Bin</th>
                            <th>MetaKey</th>
                            <th>MetaDes</th>
                            <th>Fav</th>
                            <th>Logo</th>

                         </tr>
                         @foreach ($companies as $company)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->title }}</td>
                                <td>{{ $company->primary_phone }}</td>
                                <td>{{ $company->secondary_phone }}</td>
                                <td>{{ $company->hot_line }}</td>
                                <td>{{ $company->primary_email }}</td>
                                <td>{{ $company->secondary_email }}</td>
                                <td>{{ $company->primary_address }}</td>
                                <td>{{ $company->secondary_address }}</td>
                                <td>{{ $company->website }}</td>
                                <td>{{ $company->bin_no }}</td>
                                <td>{{ $company->meta_keyword }}</td>
                                <td>{{ $company->meta_description }}</td>


                                <td>
                                    <img src="{{ asset('/favicon/'.$company->favicon) }}" height="80" width="80"/>
                                </td>

                                <td>
                                    <img src="{{ asset('/avatar/'.$company->logo) }}" height="80" width="80"/>
                                </td>

                                <td>
                                    <a href="{{ URL::to('company/'.$company->id.'/edit') }}" class="btn btn-sm btn-info">Edit</a>
                                    <a href="{{ url('/company/delete/'.$company->id) }}" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                         @endforeach
                    </table>
                </div>
            </div>

        </div>
    </main>



@endsection
