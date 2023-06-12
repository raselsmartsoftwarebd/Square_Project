@extends('Backend.Layouts.app')

@section('content')

<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i>Manage Excellence</h1>

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
                <a href="{{ URL::to('companyexcellence/create') }}"class="btn btn-info" style="float: right;margin-bottom:5px;margin-left:-5px;">Add New</a>
                <table class="table table-bordered">
                     <tr>
                        <th>SL</th>

                        <th>Title</th>

                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>

                     </tr>
                     @foreach ($companyexcellence as $excellence)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>

                            <td>{{ $excellence->title }}</td>

                            <td>{{ $excellence->description }}</td>


                            <td>
                                <img src="{{ asset('/asset/excellenceimage/'.$excellence->image) }}" height="80" width="80"/>
                            </td>

                            <td>

                                <label>
                                    <input name="switch-field-1"
                                        data-id="{{$excellence->id}}" onclick="statusChange(this)"
                                        class="ace ace-switch ace-switch-6" type="checkbox"
                                        {{ status($excellence->status) }} />
                                    <span class="lbl"></span>
                                </label>

                             </td>

                            <td>

                                <div class="edit-delete-container">
                                    <div class="edit-delete-left-section">
                                        <a href="{{ URL::to('companyexcellence/'.$excellence->id.'/edit') }}" class="btn btn-sm btn-info edit-button"><i class="ace-icon fa fa-pencil bigger-120"></i></a>
                                    </div>
                                    <div class="edit-delete-right-section">
                                        <form action="{{ url('companyexcellence/'.$excellence->id) }}" method="post">
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

<script>
    function statusChange(element) {
        let slider_id = $(element).attr("data-id");
        let post_url = "/change_excellence_status";
        let allData = new FormData();
        allData.append("ID", slider_id);
        let configuration = {headers:{"content-type" : "multipart/form-data"},
            onUploadProgress: function (progressEvent) {
                let uploadProgressPercent = Math.round((progressEvent.loaded*100)/progressEvent.total)
                document.getElementById("uploadPercent").innerHTML = uploadProgressPercent+'%';
            }
        };
        axios.post(post_url, allData, configuration).then(
            function (response) {
            }
        ).catch(
            function (error) {
            }
        )

    }


</script>

@endsection