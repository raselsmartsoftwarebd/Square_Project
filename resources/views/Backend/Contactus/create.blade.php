@extends('Backend.Layouts.app')

@section('content')

    <div class="row">

        <div class="col-sm-12">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title"> Contact Info Create</h4>
                    <span class="widget-toolbar">
                    </span>
                </div>

                <div class="widget-body">
                    <div class="widget-main no-padding">

                        <div style="margin: 20px;">

                        </div>

                        @if (session()->has('success'))
                         <div class="alert alert-success">{{session()->get('success') }}</div>
                        @endif



                        <form class="form-horizontal" id="companyForm" action="{{ URL::to('contactus') }}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="row">
                                <div class="col-sm-12">

                                   <a href="" class="btn btn-info" style="float:right;margin-right:5px;"></a>
                                    <hr>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" for="form-field-1-1">Image</label>

                                        <div class="col-xs-12 col-sm-5">
                                            <input type="file" name="image" class="id-input-file-3" />
                                        </div>
                                        <div class="col-xs-12 col-sm-2">

                                         </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1">Heading Title </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                            <input type="text" class="form-control" name="title"
                                                   value="" placeholder="Title">


                                            <span class="text-danger">

                                                </span>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1">Sub-Title </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                            <input type="text" class="form-control" name="subtitle"
                                                   value="" placeholder="Sub-Title">


                                            <span class="text-danger">

                                                </span>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1">Details Information </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                            <input type="text" class="form-control" name="description"
                                                   value="" placeholder="Details Information">


                                            <span class="text-danger">

                                                </span>

                                        </div>
                                    </div>








                                </div>



                            </div>
                            <br>


                            <div class="form-actions center" style="text-align: right !important;">
                                <button type="submit" class="btn btn-sm btn-success">
                                    <i class="ace-icon fa fa-pencil-square-o icon-on-right bigger-110"></i>
                                    Create
                                </button>
                                {{-- <a href="{{ route('company.index') }}" class="btn btn-sm btn-info">
                                    <i class="fa fa-backward"></i> Back List
                                </a> --}}
                            </div>
                        </form>

                    </div>
                </div>
            </div>


        </div>
    </div>




@endsection
