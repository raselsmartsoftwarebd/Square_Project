@extends('Backend.Layouts.app')

@section('content')


<div class="row">

    <div class="col-sm-12">
        <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title"> Slider Create</h4>
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
                @if (session()->has('error'))
                    <div class="alert alert-danger">{{session()->get('error') }}</div>
                @endif



                    <form class="form-horizontal" id="companyForm" action="{{ url('journey/'.$journey->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <div class="row">
                            <div class="col-sm-12">

                                <h4 class="text-center">Journey Update</h4>
                                <hr>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="form-field-1-1">Image</label>

                                    <div class="col-xs-12 col-sm-5">
                                        <input type="file" name="image" class="id-input-file-3" />
                                    </div>
                                    <div class="col-xs-12 col-sm-2">
                                        <div class="favicon-upload-box">
                                            <img src="{{ asset('/asset/journeyimage/'.$journey->image)  }}"  height="100" width="100" />
                                        </div>
                                     </div>

                                </div>

                                <br>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-field-1-1">Title </label>

                                    <div class="col-xs-12 col-sm-8 ">
                                        <input type="text" class="form-control" name="maintitle"
                                               value="{{ $journey->maintitle }}" placeholder="">




                                    </div>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-field-1-1"> Sub-title 1 </label>

                                    <div class="col-xs-12 col-sm-8 ">
                                        <input type="text" class="form-control" name="firstsubtitle"
                                               value="{{ $journey->firstsubtitle }}" placeholder="Sub-title 1">




                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-field-1-1"> Description 1 </label>

                                    <div class="col-xs-12 col-sm-8 ">
                                        <input type="text" class="form-control" name="firstdescription"
                                               value="{{ $journey->firstdescription }}" placeholder="Description 1" />




                                    </div>
                                </div>

                            <br>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-field-1-1"> Sub-title 2 </label>

                                    <div class="col-xs-12 col-sm-8 ">
                                        <input type="text" class="form-control" name="secondsubtitle"
                                               value="{{ $journey->secondsubtitle }}" placeholder="Sub-title 2">




                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-field-1-1"> Description 2 </label>

                                    <div class="col-xs-12 col-sm-8 ">
                                        <input type="text" class="form-control" name="seconddescription"
                                               value="{{ $journey->seconddescription }}" placeholder="Description 2">




                                    </div>
                                </div>

                                <br>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-field-1-1"> Sub-title 3 </label>

                                    <div class="col-xs-12 col-sm-8 ">
                                        <input type="text" class="form-control" name="thirdsubtitle"
                                               value="{{ $journey->thirdsubtitle }}" placeholder="Sub-title 3">




                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-field-1-1"> Description 3 </label>

                                    <div class="col-xs-12 col-sm-8 ">
                                        <input type="text" class="form-control" name="thirddescription"
                                               value="{{ $journey->thirddescription }}" placeholder="Description 3">



                                    </div>
                                </div>
















                            </div>



                        </div>
                        <br>


                        <div class="form-actions center" style="text-align: right !important;">
                            <button type="submit" class="btn btn-sm btn-success">
                                <i class="ace-icon fa fa-pencil-square-o icon-on-right bigger-110"></i>
                                Update
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
