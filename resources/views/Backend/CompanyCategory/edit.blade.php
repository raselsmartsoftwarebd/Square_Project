@extends('Backend.Layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title">Company Category Edit</h4>
                <span class="widget-toolbar"></span>
            </div>

            <div class="widget-body">
                <div class="widget-main no-padding">
                    <div style="margin: 20px;"></div>

                    @if (session()->has('success'))
                    <div class="alert alert-success">{{ session()->get('success') }}</div>
                    @endif

                    <form class="form-horizontal" id="companyForm" action="{{ route('companycategory.update', $companycategory->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-sm-12">
                                <a href="{{ URL::to('companycategory') }}" class="btn btn-info" style="float:right;margin-right:5px;">Company Category List</a>
                                <hr>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-field-1-1">Company Name</label>
                                    <div class="col-xs-12 col-sm-8">
                                        <select class="form-control" name="company_list_id">
                                            <option selected disabled>Select A Company</option>
                                            @foreach ($companies as $company)
                                            <option value="{{ $company->id }}" @if ($companycategory->company_list_id == $company->id) selected @endif>{{ $company->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-field-1-1">Company Category</label>
                                    <div class="col-xs-12 col-sm-8">
                                        <input type="text" class="form-control" name="name" value="{{ $companycategory->name }}" placeholder="Company Category">
                                        <span class="text-danger"></span>
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
