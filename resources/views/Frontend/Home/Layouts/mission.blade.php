<div class="container" style="background-color: #dbd8d8;">
    <div class="col-md-12" style="height:580px;">
     <div class="row">

       <div class="col-md-6 mt-5">

          <div class="row">
           <div class="col-md-2">
             <div class="green-line">
               <div class="mission-vision-green-line"></div>
              </div>
             </div>
             <div class="col-md-10 mt-5">

                @foreach ($journeys as $journey)
                <div style="padding-bottom:20px;"><h2 class="start-journey-heading">{{ $journey->maintitle }}</h2></div>
                <div><h2 class="vision-heading">{{ $journey->firstsubtitle }}</h2></div>
                <div style="padding-bottom:20px;"><p class="vision-paragraph">{{ $journey->firstdescription }}</p></div>
                <div ><h2 class="mission-heading">{{ $journey->secondsubtitle }}</h2></div>
                <div><p class="mission-paragraph">{{ $journey->seconddescription }}</p></div>
                @endforeach

             </div>

          </div>
       </div>
       <div class="col-md-6 mt-5">
         <div style="padding-top:70px">
            @foreach ($journeys as $journey)
           <div><h2 class="values-heading">{{ $journey->thirdsubtitle }}</h2></div>
           <p class="values-paragraph">{{ $journey->thirddescription }} </p>

           @endforeach
         </div>
       </div>
      </div>


    </div>
 </div>

 <div class="container">
    <div class="row">
      <div class="col-md-12">
        @foreach ($journeys as $journey)
        <div><img src="{{ asset('/asset/journeyimage/'.$journey->image) }}" style="width:1140px;height:500px;margin-left:-12px;" alt="green line"></div>
        @endforeach
      </div>
    </div>
  </div>



