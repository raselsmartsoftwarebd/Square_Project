@extends('Backend.Layouts.app')


@section('content')
<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->

        <div class="row">
            <div class="col-xs-12">


            <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->

            <br>

            <div class="col-sm-3">
                <a href="{{ url('companylist') }}" style="text-decoration: none;">
                    <div class="well well-lg">
                        <h2><i class="fa fa-list-alt green"></i> &nbsp;</h2>
                        <strong class="text-center">{{ $countcompany }} Company</strong>
                    </div>
                </a>

            </div>

            <div class="col-sm-3">
                <a href="{{ url('businessdetails') }}" style="text-decoration: none;">
                    <div class="well well-lg">
                        <h2><i class="fa fa-list-alt green"></i> &nbsp;</h2>
                        <strong class="text-center">{{ $countbusiness }} Brands</strong>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="{{ url('newsevents') }}" style="text-decoration: none;">
                    <div class="well well-lg">
                        <h2><i class="fa fa-list-alt green"></i> &nbsp;</h2>
                        <strong class="text-center">{{ $countnews }} News</strong>
                    </div>
                </a>
            </div>

            <div class="col-sm-3">
                <a href="{{ url('newsevents') }}" style="text-decoration: none;">
                    <div class="well well-lg">
                        <h2><i class="fa fa-list-alt green"></i> &nbsp;</h2>
                        <strong class="text-center">{{ $countnews }} Events</strong>
                    </div>
                </a>
            </div>




            <br>

        </div>


    </div><!-- /.col -->
 </div><!-- /.row -->

@endsection
