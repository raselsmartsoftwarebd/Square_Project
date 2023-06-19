@extends('Frontend.Layouts.app')

@section('content')


<!....Our Community Section....>


<div class="">
    <div class="col-md-12 mt-5">

        <div class="community-section">
            @foreach ($communitytitle as $title)

             <div class="about-background-image" style="background-image: url('{{ asset('/asset/communityimage/'.$title->image) }}');">



            <div class="community-content">
              <div class="community-rectangle-box">
                <h2 class="community-title">{{ $title->title }}</h2>
                <p class="community-paragraph">{{ $title->description }}</p>
              </div>
            </div>

            @endforeach
        </div>


    </div>

</div>



<!....Towards Sustainable Environment(1st sec)....>

<div class="container mt-5">
    <div class="col-md-12">

        <div class="row">
            <div class="col-md-8">
                <div>
                    @foreach ($communitydetails as $details)
                    <h2 style="color:green">{{ $details->title }}</h2>
                     <p>
                        {{ $details->description }}
                     </p>

                     @endforeach
                </div>
            </div>

            <div class="col-md-4">
                @foreach ($communitydetails as $details)
                <img class="safety-sliding-image" src="{{ asset('/asset/communityimage/'.$details->image) }}" style="width:100%;height:300px;">
                @endforeach
            </div>
        </div>


    </div>
 </div>







@endsection
