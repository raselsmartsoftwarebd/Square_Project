@extends('Frontend.Layouts.app')

@section('content')



<!....Contact Us....>


<div class="">
    <div class="col-md-12 mt-5">

        <div class="contact-section">
            <div class="contact-background-image"></div>
            <div class="contact-content">
              <div class="contact-rectangle-box">
                <h2 class="contact-title">Contact Us</h2>

              </div>
            </div>
          </div>


    </div>

</div>



<!....Contact us form....>
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <div>
                  <div class="container py-5">
                    <div class="row ">
                      <div class="">

                        @if (session()->has('success'))
                    <div class="alert alert-success">{{session()->get('success') }}</div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">{{session()->get('error') }}</div>
                @endif

                        <form action="{{ url('/contact/mail') }}" method="post">
                        @csrf
                          <div class="mb-3">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
                          </div>
                          <div class="mb-3">
                            <div class="input-group">
                              <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" required>

                            </div>
                          </div>



                          <div class="mb-3">
                            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
                          </div>
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
            </div>


            <script src="{{ asset('/frontend/asset/') }}/script.js">

            </script>


            <div class="col-md-4">
              <div>
                <div class="container mt-5">
                  <div class="contact-sectionnn">
                    <h1 class="contact-big-title">CONTACT INFORMATION</h1>
                    <div style="height: 20px;"></div>
                    <h2 class="contact-sub-title">Contact Us</h2>
                    <p class="contact-texttt">SQUARE Centre, 48 Bir Uttam AK Khandakar Road, Mohakhali C/A Dhaka 1212, Bangladesh</p>
                  </div>
                </div>

              </div>
            </div>
        </div>
    </div>
</div>






@endsection
