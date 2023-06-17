<div class="col-md-12 mt-5" style="height:520px;">

    <div class="total-third-sec">

        <div class="row">

            <div class="col-md-6">

                <div class="row">

                    <div class="col-md-4">
                       <div class="green-line">
                        <div class="parsuit-border-line"></div>
                       </div>
                       <div class="windows-img"><img src="{{ asset('/frontend/asset/') }}/images/windows.jpg" style="height:270px;width:270px;" alt="windows"></div>

                    </div>
                    <div class="col-md-8">
                      @foreach($companyexcellence as $excellence)
                      <div class="total-parsuit-heading">
                        <h2 class="parsuit-heading">{{ $excellence->title }}</h2>
                        </div>

                     <div  class="windows-text"><p>{{ $excellence->description }}</p></div>

                      @endforeach

                    </div>
                </div>

            </div>

            <div class="col-md-6">
                @foreach($companyexcellence as $excellence)
                <div class="parsuit-image"><img src="{{ asset('/asset/excellenceimage/'.$excellence->image) }}" style="height:420px;width:600px;margin-top: -40px;" alt="green line"></div>
                @endforeach
            </div>

        </div>
    </div>


</div>
