
@extends('components.layout')

@push("links")

<!--=====CSS=======-->
<link rel="stylesheet" href="assets/lawyer/css/bootstrap.min.css"/>
<link rel="stylesheet" href="assets/lawyer/css/fontawesome.min.css"/>
<link rel="stylesheet" href="assets/lawyer/css/fontawesome.css"/>
<link rel="stylesheet" href="assets/lawyer/css/magnific-popup.css"/>
<link rel="stylesheet" href="assets/lawyer/css/owl.carousel.min.css"/>
<link rel="stylesheet" href="assets/lawyer/css/slick-slider.css"/>
<link rel="stylesheet" href="assets/lawyer/css/meanmenu.css"/>
<link rel="stylesheet" href="assets/lawyer/css/mobile-menu.css"/>
<link rel="stylesheet" href="assets/lawyer/css/aos.css"/>
<link rel="stylesheet" href="assets/lawyer/css/metisMenu.css"/>
<link rel="stylesheet" href="assets/lawyer/css/header.css"/>
<link rel="stylesheet" href="assets/lawyer/css/modal-video.min.css"/>
<link rel="stylesheet" href="assets/lawyer/css/nice-select.css"/>
<link rel="stylesheet" href="assets/lawyer/css/visafast-unit.css"/>
<link rel="stylesheet" href="assets/lawyer/css/master.css"/>
<!-- Bootstrap CSS -->
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

   <!--=====JQUERY=======-->
   <script src="assets/lawyer/js/jquery-3-6-0.min.js"></script>


 <!--=====CSS=======-->
 <link rel="stylesheet" href="assets/lawyer/css/magnific-popup.css"/>
 <link rel="stylesheet" href="assets/lawyer/css/aos.css"/>
 <link rel="stylesheet" href="assets/lawyer/css/metisMenu.css"/>
 <link rel="stylesheet" href="assets/lawyer/css/header.css"/>
 <link rel="stylesheet" href="assets/lawyer/css/nice-select.css"/>
 <link rel="stylesheet" href="assets/lawyer/css/visafast-unit.css"/>
  
@endpush

@section('content')
          <!--===== HERO AREA START=======-->

          <div class="common-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto text-center">
                        <div class="headding">
                            <h1>Contact Us</h1>
                            
                            <div class="list-area">
                                <a href="index.html">Home</a>
                                <p class="icon"><i class="fa-regular fa-angle-right"></i></p>
                                <p class="page-text">Contact Us</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <!--=====HERO AREA END=======-->


         <!--=====CONTACT START=======-->

          <div class="contact-page-sec sp3">
            <div class="container">

              <div class="row">
                <div class="col-lg-12">
                  <div class="contact6-box">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="contact6-form">
                          <h3>Send Us A Message</h3>
                          <p>Our response time is within 30 minutes during business hours</p>
                          <div class="space10"></div>
                          @auth
                          <form action="{{ route("contact") }}" method="post">
                            @csrf
                          @else
                          <form action="#">
                          @endauth
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="single-input">
                                    <input class="mb-3" type="text" placeholder="Full Name" name="name">
                                    @error("name")
                                    <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                                    @enderror
                                  </div>
                                </div>
        
                                <div class="col-md-6">
                                  <div class="single-input">
                                    <input class="mb-3" type="number" placeholder="Phone Number" name="contact">
                                    @error("contact")
                                    <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                                    @enderror
                                  </div>
                                </div>
        
                                <div class="col-md-12">
                                  <div class="single-input">
                                    <input class="mb-3" type="email" name="email" placeholder="Email Address">
                                    @error("email")
                                    <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="single-input">
                                    <select class="wide" name="service">
                                      <option value="">Service Type</option>
                                      @foreach ($allFirms as $values)
                                      <option value="{{ $values->law_firm }}">{{ $values->law_firm }}</option>
                                      @endforeach
                                    </select>
                                    @error("service")
                                    <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="single-input">
                                    <textarea class="mb-3" cols="30" rows="4" placeholder="Message" name="message"></textarea>
                                    @error("message")
                                    <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                                    @enderror
                                  </div>
                                </div>
        
                                <div class="space24"></div>
                                <div class="button">
                                  @if (Auth::check() && Auth::user()->role == 'user')
                                  <button type="submit" class="theme-btn7"><span class="span-btn">Book an Appointment</span> <span class="arrow"><i class="fa-regular fa-arrow-right"></i></span></button>
                                  @else
                                  <button type="button" class="theme-btn7" data-bs-toggle="popover" title="Alert! <a class='cl1 popoverTitel' href='{{ route('SignIn') }}'>LogIn</a>" data-bs-html="true" data-bs-content="First Login to your Account."><span class="span-btn">Book an Appointment</span> <span class="arrow"><i class="fa-regular fa-arrow-right"></i></span></button>
                                  @endif
                                </div>
        
                              </div>
                          </form>
                        </div>
                      </div>

                      <div class="col-lg-6">
                        <div class="contact6-icon-box">
                          <div class="icon">
                            <img src="assets/img/icons/contact6-icon1.png" alt="">
                          </div>
                          <div class="headding">
                            <h5>Contact us</h5>
                            <a href="#">8708 Technology Forest Pl Suite 125 -G, The Woodlands, TX 77381</a>
                          </div>
                        </div>

                        <div class="contact6-icon-box">
                          <div class="icon">
                            <img src="assets/img/icons/contact6-icon2.png" alt="">
                          </div>
                          <div class="headding">
                            <h5>Call or text</h5>
                            <a href="tel:123-456-7890">123-456-7890</a>
                          </div>
                        </div>

                        <div class="contact6-icon-box">
                          <div class="icon">
                            <img src="assets/img/icons/contact6-icon3.png" alt="">
                          </div>
                          <div class="headding">
                            <h5>Email us today</h5>
                            <a href="mailto:info@taxvice.com">info@taxvice.com</a>
                          </div>
                        </div>


                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--=====CONTACT END=======-->

          <div class="google-map-contact-page">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29138.664374836688!2d88.95829818212746!3d24.089780609595913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1705386136712!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

@push("scripts")

<!--=====JS=======-->
<script>
  var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
      return new bootstrap.Popover(popoverTriggerEl)
    })

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
</script>
<script src="assets/lawyer/js/bootstrap.min.js"></script>
<script src="assets/lawyer/js/fontawesome.js"></script>
<script src="assets/lawyer/js/fontawesome.min.js"></script>
<script src="assets/lawyer/js/owl.carousel.min.js"></script>
<script src="assets/lawyer/js/aos.js"></script>
<script src="assets/lawyer/js/jquery.magnific-popup.min.js"></script>
<script src="assets/lawyer/js/jquery.waypoints.min.js"></script>
<script src="assets/lawyer/js/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="assets/lawyer/js/slick-slider.js"></script>
<script src="assets/lawyer/js/mobile-menu.js"></script>
<script src="assets/lawyer/js/tilt.jquery.js"></script>
<script src="assets/lawyer/js/jquery.countup.js"></script>
<script src="assets/lawyer/js/metisMenu.min.js"></script>
<script src="assets/lawyer/js/jquery.nice-select.js"></script>
<script src="assets/lawyer/js/jquery.lineProgressbar.js"></script>
<script src="assets/lawyer/js/mobile-meanmenu.js"></script>
<script src="assets/lawyer/js/jquery.magnific-popup.min.js"></script>
<script src="assets/lawyer/js/main.js"></script>

@endpush

@endsection