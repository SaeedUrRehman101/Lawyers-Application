@extends('components.layout')

@push("links")

<!--=====CSS=======-->
<link rel="stylesheet" href="/assets/lawyer/css/bootstrap.min.css"/>
<link rel="stylesheet" href="/assets/lawyer/css/fontawesome.min.css"/>
<link rel="stylesheet" href="/assets/lawyer/css/fontawesome.css"/>
<link rel="stylesheet" href="/assets/lawyer/css/magnific-popup.css"/>
<link rel="stylesheet" href="/assets/lawyer/css/owl.carousel.min.css"/>
<link rel="stylesheet" href="/assets/lawyer/css/slick-slider.css"/>
<link rel="stylesheet" href="/assets/lawyer/css/meanmenu.css"/>
<link rel="stylesheet" href="/assets/lawyer/css/mobile-menu.css"/>
<link rel="stylesheet" href="/assets/lawyer/css/aos.css"/>
<link rel="stylesheet" href="/assets/lawyer/css/metisMenu.css"/>
<link rel="stylesheet" href="/assets/lawyer/css/header.css"/>
<link rel="stylesheet" href="/assets/lawyer/css/modal-video.min.css"/>
<link rel="stylesheet" href="/assets/lawyer/css/nice-select.css"/>
<link rel="stylesheet" href="/assets/lawyer/css/visafast-unit.css"/>
<link rel="stylesheet" href="/assets/lawyer/css/master.css"/>

   <!--=====JQUERY=======-->
   <script src="/assets/lawyer/js/jquery-3-6-0.min.js"></script>


 <!--=====CSS=======-->
 <link rel="stylesheet" href="/assets/lawyer/css/magnific-popup.css"/>
 <link rel="stylesheet" href="/assets/lawyer/css/aos.css"/>
 <link rel="stylesheet" href="/assets/lawyer/css/metisMenu.css"/>
 <link rel="stylesheet" href="/assets/lawyer/css/header.css"/>
 <link rel="stylesheet" href="/assets/lawyer/css/nice-select.css"/>
 <link rel="stylesheet" href="/assets/lawyer/css/visafast-unit.css"/>
  
@endpush

@section('content')

          <!--===== HERO AREA START=======-->

          <div class="common-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto text-center">
                        <div class="headding">
                            <h1>{{ $lawFirm->law_firm }}</h1>
                            
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
                    <div class="col-lg-8 m-auto">
                        <div class="single-service-post-area padding-right">
                            <article>
                                <div class="service-single-post">
                                    <div class="image-area">
                                        <img src="/assets/lawyer/img/service/service-details-img1.png" alt="">

                                        <div class="shapes aniamtion-key-1">
                                            <img src="/assets/lawyer/img/shapes/about4-shape.png" alt="">
                                        </div>
                                    </div>

                                    <div class="space24"></div>
                                    <div class="headding4">
                                        <h3>{{ $servicePg->serviceHeading }}</h3>
                                        <div class="space16"></div>
                                        <p>{{ $servicePg->aboutService }}</p>
                                        <div class="space16"></div>
                                        <p>With a deep understanding of the legal system and a track record of successful defenses, we stand by your side, safeguarding your rights, and crafting a robust defense strategy law.</p>
                                    </div>
                                </div>
                            </article>

                            <div class="details-border"></div>

                            <article>
                                <div class="service-single-post">
                                    <div class="headding4">
                                        <h3>Why Choose Us?</h3>
                                        <div class="space16"></div>
                                        <p>Beyond our legal expertise, we foster a culture of compassion and support. We recognize that facing criminal charges can be one of life's most challenging experiences, and we are lawyer:</p>
                                    </div>

                                    <div class="space10"></div>
                                    <div class="choose-list">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <ul>
                                                    <li><span><i class="fa-regular fa-check"></i></span> Legal Expertise</li>
                                                    <li><span><i class="fa-regular fa-check"></i></span> Focus on Recovery</li>
                                                </ul>
                                            </div>

                                            <div class="col-lg-4">
                                                <ul>
                                                    <li><span><i class="fa-regular fa-check"></i></span> Personalized Approach</li>
                                                    <li><span><i class="fa-regular fa-check"></i></span> Track Record of Success</li>
                                                </ul>
                                            </div>

                                            <div class="col-lg-5">
                                                <ul>
                                                    <li><span><i class="fa-regular fa-check"></i></span> Emotional Support & Guidance</li>
                                                    <li><span><i class="fa-regular fa-check"></i></span> Advocacy and Representation</li>
                                                </ul>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="space40"></div>
                                                <div class="image">
                                                    <img src="/assets/lawyer/img/service/service-details-img2.png" alt="">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="space40"></div>
                                                <div class="image">
                                                    <img src="/assets/lawyer/img/service/service-details-img3.png" alt="">
                                                </div>
                                            </div>

                                        </div>
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


@push("scripts")

<!--=====JS=======-->
<script src="/assets/lawyer/js/bootstrap.min.js"></script>
<script src="/assets/lawyer/js/fontawesome.js"></script>
<script src="/assets/lawyer/js/fontawesome.min.js"></script>
<script src="/assets/lawyer/js/owl.carousel.min.js"></script>
<script src="/assets/lawyer/js/aos.js"></script>
<script src="/assets/lawyer/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/lawyer/js/jquery.waypoints.min.js"></script>
<script src="/assets/lawyer/js/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="/assets/lawyer/js/slick-slider.js"></script>
<script src="/assets/lawyer/js/mobile-menu.js"></script>
<script src="/assets/lawyer/js/tilt.jquery.js"></script>
<script src="/assets/lawyer/js/jquery.countup.js"></script>
<script src="/assets/lawyer/js/metisMenu.min.js"></script>
<script src="/assets/lawyer/js/jquery.nice-select.js"></script>
<script src="/assets/lawyer/js/jquery.lineProgressbar.js"></script>
<script src="/assets/lawyer/js/mobile-meanmenu.js"></script>
<script src="/assets/lawyer/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/lawyer/js/main.js"></script>

@endpush

@endsection