@extends('Backend.Layouts.app')

@section('content')

    <div class="row">

        <div class="col-sm-12">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title">Company Create</h4>
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



                        <form class="form-horizontal" id="companyForm" action="{{ URL::to('companylist') }}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="row">
                                <div class="col-sm-12">

                                   <a href="{{ URL::to('companylist') }}" class="btn btn-info" style="float:right;margin-right:5px;">Company List</a>
                                    <hr>



                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1">Company Name </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                            <input type="text" class="form-control" name="name"
                                                   value="" placeholder="Company Name">


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
