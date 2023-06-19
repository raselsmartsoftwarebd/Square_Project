<div class="container">

    <div class="row">

      <div class="col-md-12 mt-5">
        @foreach ($companyglobal as $comglobal)
        <div class="cover-image" style="background-image: url('{{ asset('/asset/globalimage/'.$comglobal->image) }}');">
        @endforeach

        <div>
            @foreach ($companyglobal as $comglobal)
            <h1 class="global-heading" >{{ $comglobal->title }}</h1>
            @endforeach
         </div>
        <div class="row">
          <div class="col-md-6 mt-5">
            @foreach ($companyglobal as $comglobal)
            <p class="export-heading" >{{ $comglobal->leftDescription }}</p>
            @endforeach
          </div>
          <div class="col-md-6 mt-5">
            @foreach ($companyglobal as $comglobal)
            <p class="employee-heading">{{ $comglobal->rightDescription }}</p>
            @endforeach
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
