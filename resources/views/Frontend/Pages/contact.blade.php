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
<div class="">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <div>
                  <div class="container py-5">
                    <div class="row justify-content-center">
                      <div class="col-lg-6">
                        <form>
                          <div class="mb-3">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
                          </div>
                          <div class="mb-3">
                            <div class="input-group">
                              <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" required>
                              <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone Number" required>
                            </div>
                          </div>

                          <div class="mb-3">
                            <div class="input-group">
                              <div class="form-group">

                                <select id="first-dropdown" name="first-dropdown" onchange="updateSecondDropdown()">
                                  <option value="">Select Company</option>
                                  <option value="option1">Square Hospitals</option>
                                  <option value="option2">Square Textiles</option>
                                  <option value="option3">Square Food</option>
                                </select>
                              </div>
                              <div class="form-group">

                                <select id="second-dropdown" name="second-dropdown">
                                  <option value="">Select Category</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="mb-3">
                            <textarea id="message" name="message" class="form-control" rows="5" placeholder="Your Message"></textarea>
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
