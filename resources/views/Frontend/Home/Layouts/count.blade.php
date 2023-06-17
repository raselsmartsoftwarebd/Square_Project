<div class="container">

    <div class="row">

      <div class="col-md-12 mt-5">
        @foreach ($companyglobal as $comglobal)
        <div class="cover-image" style="background-image: url('{{ asset('/asset/globalimage/'.$comglobal->image) }}');">
        @endforeach

        <div>
          <h1 class="global-heading" >Global Reach</h1>
         </div>
        <div class="row">
          <div class="col-md-6 mt-5">
            <h1 class="sixty-number">60+</h1>
            <p class="export-heading" >Export Countries</p>
          </div>
          <div class="col-md-6 mt-5">
            <h1 class="sixty-thousand-heading">60,000+</h1>
            <p class="employee-heading">Total Employee</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
