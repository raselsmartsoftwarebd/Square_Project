@extends('Frontend.Layouts.app')

@section('content')


<!....About Section....>


<div class="">
    <div class="col-md-12 mt-5">

        <div class="about-section">

                @foreach ($abouttitle as $about)
                <div class="about-background-image" style="background-image: url('{{ asset('/asset/aboutimage/'.$about->image) }}');">
                @endforeach

            <div class="about-content">
              <div class="about-rectangle-box">
                @foreach ($abouttitle as $about)

                <h2 class="about-title">{{ $about->title }}</h2>
                <p class="about-paragraph">{{ $about->description }}</p>
                 @endforeach
              </div>
            </div>
          </div>


    </div>

</div>s



<!....About Us details 1st section....>

<div class="container">
    <div class="row">
        @foreach ($aboutdetails as $details)
        <div class="col-md-6">
            <div class="about-box">
                <div class="about-main-container">
                    <div class="about-left-part">
                        <img src="{{ asset('/asset/aboutimage/'.$details->image) }}" alt="Image">
                    </div>
                    <div class="about-right-part">
                        <h2 class="about-title">{{ $details->title }}</h2>
                        <p class="about-paragraph">{{ $details->description }}</p>
                        <div class="about-button"><i class="fa-duotone fa-plus icon-bold"></i></div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>





@endsection
