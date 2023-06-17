<div class="">
    <div class="row">
      <div class="col-md-12" style="margin-top:10px;">

        <div class="slideshow-container">

          @foreach ($sliders as $sli)
          <div class="mySlides fade">

            <img class="sliding-image" src="{{ asset('/slidesimage/'.$sli->slidingimage) }}" style="width:100%;height:500px;">
            <div class="text">{{ $sli->imagetitle }}</div>
          </div>
          @endforeach



          </div>
          <br>

          <div class="dot-move" style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
          </div>


      </div>
    </div>
  </div>


   <script src="{{ asset('/frontend/asset/') }}/script.js">

   </script>

