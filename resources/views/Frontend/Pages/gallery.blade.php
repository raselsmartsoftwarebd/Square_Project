@extends('Frontend.Layouts.app')

@section('content')

<!....Gallery...>

<div class="">
    <div class="col-md-12 mt-5">
        @foreach ($gallerytitle as $title)
        <div class="about-background-image" style="background-image: url('{{ asset('/asset/galleryimage/'.$title->image) }}');">
            <div class="gallery-section">
                <div class="gallery-background-image"></div>
                <div class="gallery-content">
                    <div class="gallery-rectangle-box">
                        <h2 class="gallery-title">{{ $title->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!....Gallery 1st section....>

<div class="container">
    <div class="col-md-12 mt-5">
        <div class="row">
            @foreach ($gallerydetails as $details)
            <div class="col-md-4">
                <div class="gallery-sectionn">
                    <img src="{{ asset('/asset/galleryimage/'.$details->image) }}" alt="Your Image">
                    <p>{{ $details->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
