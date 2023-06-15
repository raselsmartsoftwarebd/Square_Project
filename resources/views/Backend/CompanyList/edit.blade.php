@extends('Backend.Layouts.app')

@section('content')


<div class="row">

    <div class="col-sm-12">
        <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title"> Company Update</h4>
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



                    <form class="form-horizontal" id="companyForm" action="{{ url('companylist/'.$companylist->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')


                        <div class="row">
                            <div class="col-sm-12">

                                <h4 class="text-center">Company Name Update</h4>
                                <hr>




                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-field-1-1">Company Name </label>

                                    <div class="col-xs-12 col-sm-8 ">
                                        <input type="text" class="form-control" name="name"
                                               value="{{ $companylist->name }}" placeholder="">


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
