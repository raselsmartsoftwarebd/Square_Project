@extends('Frontend.Layouts.app')

@section('content')


<!....News & Media....>




<div class="container">
    <div class="row">
      <div class="col-md-12 mt-5">
        <div class="row">
          @foreach ($newsevents as $events)
          <div class="col-md-3">
            <div class="image">
              <img src="{{ asset('/asset/eventsimage/'.$events->image) }}" alt="Image 1" width="100%">
              <div class="button"><i class="fa-duotone fa-plus icon-bold"></i></div>
            </div>
            <div class="title">{{ $events->updated_at }}</div>
            <div class="paragraph">{{ $events->description }}</div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>



@endsection
