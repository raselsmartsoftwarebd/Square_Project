@extends('Frontend.Layouts.app')

@section('content')

<!....Our InvestorSection....>


<div class="">
    <div class="col-md-12 mt-5">

        <div class="investor-section">
            @foreach ($investortitle as $investor)
                <div class="about-background-image" style="background-image: url('{{ asset('/asset/investorimage/'.$investor->image) }}');">
                @endforeach
            <div class="investor-content">
              <div class="investor-rectangle-box">
                @foreach ($investortitle as $investor)
                <h2 class="investor-title">{{ $investor->title }}</h2>
                @endforeach
              </div>
            </div>
          </div>


    </div>

</div>



<!....investor details 1st section....>

<div class="container mt-5" >
    <div class="row">
        @foreach ($investordetails as $details)
        <div class="col-md-6">
            <div class="investor-box">
                <div class="investor-main-container">
                    <div class="investor-left-part">
                        <img src="{{ asset('/asset/investorimage/'.$details->image) }}" alt="Image">
                    </div>
                    <div class="investor-right-part">
                        <h2 class="investor-title">{{ $details->title }}</h2>
                        <p class="investor-paragraph">{{ $details->description }}</p>
                        <div class="investor-button"><i class="fa-duotone fa-plus icon-bold"></i></div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
