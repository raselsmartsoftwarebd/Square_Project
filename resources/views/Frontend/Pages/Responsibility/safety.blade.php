@extends('Frontend.Layouts.app')

@section('content')


<!...Safety Section....>


<div class="">
    <div class="col-md-12 mt-5">

        <div class="safety-section">

            @foreach ($safetytitle as $title)


            <div class="about-background-image" style="background-image: url('{{ asset('/asset/safetyimage/'.$title->image) }}');">
            <div class="safety-content">
              <div class="safety-rectangle-box">
                <h2 class="safety-title">{{ $title->title }}</h2>
                <p class="safety-paragraph">{{ $title->description }}</p>
              </div>
            </div>

            @endforeach
          </div>


    </div>

</div>



<!....Safety first details content(1st sec)....>

<div class="container mt-5">
    <div class="col-md-12">

        <div class="row">
            <div class="col-md-8">
                <div>
                    @foreach ($safetydetails as $details)
                    <h2 style="color:green">{{ $details->title }}</h2>
                     <p>
                        {{ $details->description }}
                     </p>

                     @endforeach
                </div>
            </div>

            <div class="col-md-4">
                @foreach ($safetydetails as $details)
                <img class="safety-sliding-image" src="{{ asset('/asset/safetyimage/'.$details->image) }}" style="width:100%;height:300px;">
                @endforeach
            </div>
        </div>


    </div>
 </div>







<!.........single pic section......>


<div class="col-md-12 mt-5" >


    <div class="safety-section">
        @foreach ($safetyimage as $single)
        <div class="safety-single-pic">
            <div class="about-background-image" style="background-image: url('{{ asset('/asset/safetyimage/'.$single->image) }}');">
        </div>

        @endforeach
        </div>
      </div>


</div>

@endsection
