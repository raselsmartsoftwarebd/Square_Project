@extends('Frontend.Layouts.app')

@section('content')

<!....Our Business Section....>

<div class="">
    <div class="col-md-12 mt-5">
        @foreach ($businesstitle as $title)
        <div class="business-section">
            <div class="about-background-image" style="background-image: url('{{ asset('/asset/businessimage/'.$title->image) }}');">
            <div class="business-content">
              <div class="business-rectangle-box">
                <h2 class="business-title">{{ $title->title }}</h2>
                <p class="business-paragraph">{{ $title->description }}</p>
              </div>
            </div>
          </div>
          @endforeach
    </div>
</div>


<!....Business Details Section....>

<div class="container-fluid">
    <div class="col-md-12 mt-5">
        <div class="row">
            @foreach ($businessdetails as $details)
            <div class="col-md-4">
                <div class="business-sectionnn">
                    <div class="business-image-wrapper">
                      <img src="{{ asset('/asset/businessimage/'.$details->image) }}" alt="Image 2">
                      <div class="business-overlay">
                        <div class="business-contenttt">
                          <div class="business-line"></div>
                          <h2 class="business-headinggg">{{ $details->title }}</h2>
                          <p class="business-paragraphhh">{{ $details->description }}</p>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
