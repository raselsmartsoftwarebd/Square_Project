@extends('Backend.Layouts.app')

@section('content')

    <div class="row">

        <div class="col-sm-12">
            <div class="widget-box">
                <div class="widget-header">
                    <h4 class="widget-title"> Company Edit</h4>
                    <span class="widget-toolbar">
                    </span>
                </div>

                <div class="widget-body">
                    <div class="widget-main no-padding">

                        <div style="margin: 20px;">

                        </div>

                        <form class="form-horizontal" id="companyForm" action="{{ URL::to('company') }}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="row">
                                <div class="col-sm-6">

                                    <h4 class="text-center">Company Info</h4>
                                    <hr>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" for="form-field-1-1"> Favicon </label>

                                        <div class="col-xs-12 col-sm-5">
                                            <input type="file" name="favicon" class="id-input-file-3" />
                                        </div>
                                        <div class="col-xs-12 col-sm-2">

                                         </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Name </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                            <input type="text" class="form-control" name="name"
                                                   value="" placeholder="Company Name">


                                            <span class="text-danger">

                                                </span>

                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Title </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                            <input type="text" class="form-control" name="title"
                                                   value="" placeholder="Company Title">


                                            <span class="text-danger">

                                                </span>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Primary Phone </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                            <input type="number" class="form-control" name="primary_phone"
                                                   value="" placeholder="Phone Number">


                                            <span class="text-danger">

                                                </span>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Secondary Phone </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                            <input type="number" class="form-control" name="secondary_phone"
                                                   value="" placeholder="Phone Number">


                                            <span class="text-danger">

                                                </span>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Hot Line </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                            <input type="number" class="form-control" name="hot_line"
                                                   value="" placeholder="Phone Number">


                                            <span class="text-danger">

                                                </span>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Primary Email </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                            <input type="email" class="form-control" name="primary_email"
                                                   value="" placeholder="Email">


                                            <span class="text-danger">

                                                </span>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Secodary Email </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                            <input type="email" class="form-control" name="secondary_email"
                                                   value="" placeholder="Enter Email">


                                            <span class="text-danger">

                                                </span>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Primary Address(Bd) </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                        <textarea class="form-control" name="primary_address" rows="3"
                                                  placeholder="Top text"></textarea>


                                            <span class="text-danger">

                                                </span>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Secondary Address(Bd) </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                        <textarea class="form-control" name="secondary_address" rows="3"
                                                  placeholder="Top text"></textarea>


                                            <span class="text-danger">

                                                </span>

                                        </div>
                                    </div>

                                </div>

                                <div class="col-sm-6">
                                    <h4 class="text-center">Company Details Info</h4>
                                    <hr>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label" for="form-field-1-1"> Company Logo </label>

                                        <div class="col-xs-12 col-sm-5">
                                            <input type="file" name="logo" class="id-input-file-3" />
                                        </div>
                                        <div class="col-xs-12 col-sm-2">

                                                <img src="" style="width: 100px" alt="">

                                                <img src="" style="width: 100px" alt="">

                                         </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Website </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                            <input type="text" class="form-control" name="website"
                                                   value="" placeholder="Company Website">


                                            <span class="text-danger">

                                                </span>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Bin No </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                            <input type="text" class="form-control" name="bin_no"
                                                   value="" placeholder="Company Bin">

                                            <span class="text-danger">

                                                </span>

                                        </div>
                                    </div>







                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Meta Keyword </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                            <textarea class="form-control" name="meta_keyword" rows="3"
                                                  placeholder="Meta Keyword "></textarea>


                                            <span class="text-danger">

                                                </span>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-field-1-1"> Meta Decription </label>

                                        <div class="col-xs-12 col-sm-8 ">
                                            <textarea class="form-control" name="meta_description" rows="3"
                                                  placeholder="Meta Decription"></textarea>

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
