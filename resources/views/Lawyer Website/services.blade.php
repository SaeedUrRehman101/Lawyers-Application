@extends("components.layout")

@push("links")
  
<!--=====CSS=======-->
<link rel="stylesheet" href="{{ asset('assets/lawyer/css/bootstrap.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/lawyer/css/fontawesome.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/lawyer/css/fontawesome.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/lawyer/css/magnific-popup.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/lawyer/css/owl.carousel.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/lawyer/css/slick-slider.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/lawyer/css/meanmenu.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/lawyer/css/mobile-menu.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/lawyer/css/aos.css') }}"/>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" href="{{ asset('assets/lawyer/css/metisMenu.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/lawyer/css/header.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/lawyer/css/modal-video.min.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/lawyer/css/nice-select.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/lawyer/css/visafast-unit.css') }}"/>
<link rel="stylesheet" href="{{ asset('assets/lawyer/css/master.css') }}"/>

   <!--=====JQUERY=======-->
   <script src="{{ asset('assets/lawyer/js/jquery-3-6-0.min.js') }}"></script>

@endpush

@section("content")

  <!--===== HERO AREA START=======-->

  <div class="common-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto text-center">
                <div class="headding">
                    <h1>{{ $lawServices->law_firm }}</h1>
                    
                    <div class="list-area">
                        <a href="index.html">Home</a>
                        <p class="icon"><i class="fa-regular fa-angle-right"></i></p>
                        <p class="page-text">Criminal Defense</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!--=====HERO AREA END=======-->

  <div class="service-details-left sp3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-service-post-area padding-right">
                    <article>
                        <div class="service-single-post">
                            <div class="image-area">
                                <img src="{{ asset('assets/Dashboard/Lawyer_Image/'.$lawyer->image) }}" alt="">
                                {{-- <img src="/assets/lawyer/img/service/service-details-img1.png" alt=""> --}}

                                <div class="shapes aniamtion-key-1">
                                    <img src="/assets/lawyer/img/shapes/about4-shape.png" alt="">
                                </div>
                            </div>

                            <div class="space24"></div>
                            <div class="headding4">
                                <h3>{{ $lawyer->lawyerName }}</h3>
                                <div class="space16"></div>
                                <p>{{ $lawyer->about }}</p>
                                <div class="space16"></div>
                            </div>
                        </div>
                    </article>

                    <div class="details-border"></div>

                    <article>
                        <div class="service-single-post">
                            <div class="headding4">
                                <h3>Practice Area</h3>
                                <div class="space16"></div>
                            </div>

                            <div class="space10"></div>
                            <div class="choose-list">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <ul>
                                            <li><span><i class="fa-regular fa-check"></i></span>{{ $lawServices->law_firm }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </article>


                    <div class="details-border"></div>

                    <article>
                      <div class="service-single-post">
                          <div class="headding4">
                              <h3>Work Places</h3>
                              <div class="space30"></div>
                              <p>{{ $lawyer->working_Place }}</p>
                          </div>
                      </div>
                  </article>

                  <div class="details-border"></div>

                  <article>
                    <div class="service-single-post">
                        <div class="headding4">
                            <h3>Professional background</h3>
                            <div class="space30"></div>
                            <h5 class="">Education</h5>
                            <div class="choose-list">
                              <div class="row">
                                <div class="col-lg-12">
                                    <ul>
                                        <li><span><i class="fa-regular fa-check"></i></span>{{ $lawyer->education }}</li>
                                    </ul>
                                </div>
                            </div>
                          </div>
                          <div class="space30"></div>
                            <h5 class="">Experience</h5>
                            <div class="choose-list">
                              <div class="row">
                                <div class="col-lg-12">
                                    <ul>
                                        <li><span><i class="fa-regular fa-check"></i></span>{{ $lawyer->experience }}</li>
                                    </ul>
                                </div>
                            </div>
                          </div>
                          <div class="space30"></div>
                            <h5 class="">Designation</h5>
                            <div class="choose-list">
                              <div class="row">
                                <div class="col-lg-12">
                                    <ul>
                                        <li><span><i class="fa-regular fa-check"></i></span>{{ $lawyer->designation }}</li>
                                    </ul>
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </article>

                  <div class="details-border"></div>

                    <article>
                      <div class="service-single-post">
                          <div class="headding4">
                              <h3>Availiable Slots</h3>
                              <div class="space30"></div>
                              @php
                                $slotsArray = explode(",",$lawyer->Lawyer_Slots);
                                $lawyerSlots =[];
                                for ($i=0; $i < count($slotsArray); $i +=3) { 
                                  if (isset($slotsArray[$i+1]) && isset($slotsArray[$i+2])) {
                                      $lawyerSlots[] = $slotsArray[$i] . ' ' . $slotsArray[$i+1] . ', ' . $slotsArray[$i+2];
                                  }
                                }
                              @endphp
                              @foreach ($lawyerSlots as $slots)
                                <div class="choose-list">
                                  <div class="row">
                                    <div class="col-lg-12">
                                        <ul>
                                            <li><span><i class="fa-regular fa-check"></i></span>{{ $slots }}</li>
                                        </ul>
                                    </div>
                                </div>
                              </div>
                              @endforeach
                          </div>
                      </div>
                  </article>

                  <div class="details-border"></div>


                    <div class="service-details-faq">
                        <div class="headding4">
                            <h3>Analysing Business Law</h3>
                            <div class="space30"></div>
                            <p>Our goal is not only to secure favorable outcomes but also provide unwavering support an guidance, alleviating the stress and anxiety associated with criminal proceedings.</p>
                        </div>

                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Do you have examples of past case results?
                                </button>
                              </h2>
                              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Focused on achieving the best possible outcome for clients, whether through negotiations, an settlements, or trials. Peace of Mind: Providing clients with the peace mind the comes.</div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Do you offer consulting for international cases?
                                </button>
                              </h2>
                              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Focused on achieving the best possible outcome for clients, whether through negotiations, an settlements, or trials. Peace of Mind: Providing clients with the peace mind the comes.</div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    What brands does your agency work with?
                                </button>
                              </h2>
                              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Focused on achieving the best possible outcome for clients, whether through negotiations, an settlements, or trials. Peace of Mind: Providing clients with the peace mind the comes.</div>
                              </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFour">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    Can I get a free case consultation?
                                  </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">Focused on achieving the best possible outcome for clients, whether through negotiations, an settlements, or trials. Peace of Mind: Providing clients with the peace mind the comes.</div>
                                </div>
                              </div>

                              <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingFive">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    How long has this law firm been active for?
                                  </button>
                                </h2>
                                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">Focused on achieving the best possible outcome for clients, whether through negotiations, an settlements, or trials. Peace of Mind: Providing clients with the peace mind the comes.</div>
                                </div>
                              </div>

                          </div>

                    </div>

                </div>
            </div>





        </div>
    </div>
  </div>


                <!--=====CONTACT START=======-->

  <div class="contact-page-sec sp3">
    <div class="container">

      <div class="row">
        <div class="col-lg-12">
          <div class="contact6-box">
            <div class="row">
              <div class="col-lg-6">
                <div class="contact6-form">
                  <h3>Book an Appointment</h3>
                  <p>Our response time is within 30 minutes during business hours</p>
                  <div class="space10"></div>
                  @auth
                  <form action="{{ route("book_Appointment") }}" method="post">
                    @csrf
                    <input type="hidden" name="lawId" value="{{ $lawyer->id }}">
                    <input type="hidden" name="lawMail" value="{{ $lawyer->email }}">
                    <input type="hidden" name="lawName" value="{{ $lawyer->lawyerName }}">
                    <input type="hidden" name="uId" value="{{ Auth::check() && Auth::user()->id }}">
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

                        <div class="col-md-6">
                          <div class="single-input">
                            <input class="mb-3" type="email" name="email" placeholder="Email Address">
                            @error("email")
                            <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="single-input">
                            <select class="wide" name="slots">
                              @foreach ($lawyerSlots as $slots)
                              <option value="">Appointment Days</option>
                              <option value="{{ $slots }}">{{ $slots }}</option>
                              @endforeach
                            </select>
                            @error("slots")
                            <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="single-input">
                            <select class="wide" name="service">
                              <option value="">Service Type</option>
                              <option value="{{ $lawServices->law_firm }}">{{ $lawServices->law_firm }}</option>
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
                    <img src="/assets/lawyer/img/icons/contact6-icon1.png" alt="">
                  </div>
                  <div class="headding">
                    <h5>Address</h5>
                    <p>{{ $lawyer->address }}</p>
                  </div>
                </div>

                <div class="contact6-icon-box">
                  <div class="icon">
                    <img src="/assets/lawyer/img/icons/contact6-icon2.png" alt="">
                  </div>
                  <div class="headding">
                    <h5>Contact Me</h5>
                    <p href="tel:123-456-7890">{{ $lawyer->contact }}</p>
                  </div>
                </div>

                <div class="contact6-icon-box">
                  <div class="icon">
                    <img src="/assets/lawyer/img/icons/contact6-icon3.png" alt="">
                  </div>
                  <div class="headding">
                    <h5>Email us today</h5>
                    <p>{{ $lawyer->email }}</p>
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

    @push("scripts")

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
    <!--=====JS=======-->
    <script src="{{ asset('assets/lawyer/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/lawyer/js/fontawesome.js') }}"></script>
    <script src="{{ asset('assets/lawyer/js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('assets/lawyer/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lawyer/js/aos.js') }}"></script>
    <script src="{{ asset('assets/lawyer/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/lawyer/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lawyer/js/popper.min.js') }}" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/lawyer/js/slick-slider.js') }}"></script>
    <script src="{{ asset('assets/lawyer/js/mobile-menu.js') }}"></script>
    <script src="{{ asset('assets/lawyer/js/tilt.jquery.js') }}"></script>
    <script src="{{ asset('assets/lawyer/js/jquery.countup.js') }}"></script>
    <script src="{{ asset('assets/lawyer/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/lawyer/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/lawyer/js/jquery.lineProgressbar.js') }}"></script>
    <script src="{{ asset('assets/lawyer/js/mobile-meanmenu.js') }}"></script>
    <script src="{{ asset('assets/lawyer/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/lawyer/js/main.js') }}"></script>
      
    @endpush
  
@endsection
  

