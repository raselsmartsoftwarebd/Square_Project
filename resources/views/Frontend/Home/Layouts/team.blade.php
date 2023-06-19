<div class="container">

    <div class="row">

      <div class="col-md-12 team-cover-image mt-5">

        @foreach ($companyteam as $team)
        <div class="team-cover-image" style="background-image: url('{{ asset('/asset/teamimage/'.$team->image) }}');">
        @endforeach

        <div class="row">
          <div class="col-md-6 mt-5">


            <div class="box-movement">
              <div class="box">
                <div class="contain">
                  <div class="border-line"></div>
                  <div class="content">
                    @foreach ($companyteam as $team)
                    <h1 class="headline">{{ $team->title }} </h1>
                    <p class="subtext">{{ $team->description }}

                    </p>
                    @endforeach
                  </div>
                </div>




            </div>

            </div>
          </div>
          <div class="col-md-6">

          </div>
        </div>
      </div>
    </div>

  </div>
</div>
