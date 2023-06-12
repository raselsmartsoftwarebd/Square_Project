<div class="container total-nav">
    <div class="col-md-12 total-nav">
        <div class="row ">
            <div class="col-md-2 ">
                <img class="logo-design" src="{{ asset('/frontend/asset/') }}/images/logo.jpg" alt="logo"/>
            </div>
            <div class="col-md-10 total-nav !important">

                <nav class="navbar navbar-expand-lg  total-nav!important">
                    <div class="container-fluid">

                      <div class="nav-design total-nav">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                              <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="{{ url('/') }}">HOME</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="{{ url('/about') }}">ABOUT</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{ url('/business') }}">BUSINESS</a>
                              </li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  RESPONSIBILITY
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="{{ url('/safety') }}">SAFETY</a></li>
                                  <li><a class="dropdown-item" href="{{ url('/environment') }}">ENVIRONMENT</a></li>
                                  <li><a class="dropdown-item" href="{{ url('/employee') }}">EMPLOYEE WELLBEING</a></li>
                                  <li><a class="dropdown-item" href="{{ url('/community') }}">COMMUNITY</a></li>
                                </ul>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{ url('/investor') }}">INVESTOR</a>
                              </li>


                              <li class="nav-item">
                                <a class="nav-link" href="{{ url('/news/media') }}">NEWS & MEDIA</a>
                              </li>

                              <li class="nav-item">
                                <a class="nav-link" href="{{ url('/gallery') }}">GALLERY</a>
                              </li>

                              <li class="nav-item">
                                <a class="nav-link" href="{{ url('/contact') }}">CONTACT</a>
                              </li>
                            </ul>
                          </div>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
    </div>

</div>