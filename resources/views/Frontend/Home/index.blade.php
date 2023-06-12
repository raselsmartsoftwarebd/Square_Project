@extends('Frontend.Layouts.app')

@section('content')

    <!....Slider.....>
    @include('Frontend.Home.Layouts.slider')

  <!....Title & Pic (parsuit Excellence) Second sec....>
  @include('Frontend.Home.Layouts.title&pic')

  <!....Started Journey Mission Vision....>
  @include('Frontend.Home.Layouts.mission')

  <!....Single Image....>
   @include('Frontend.Home.Layouts.singlepic')

  <!....count....>
  @include('Frontend.Home.Layouts.count');

  <!...Our Team....>
  @include('Frontend.Home.Layouts.team')

  <!....News & Events....>
  @include('Frontend.Home.Layouts.newsevents')

@endsection
