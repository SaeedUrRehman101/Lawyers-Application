@extends("components.layout")

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
  
@endpush

@section("content")

          <!--===== HERO AREA START=======-->

          <div class="common-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto text-center">
                        <div class="headding">
                          @if (!empty($Lawyers))
                          <h1>{{ $Lawyers->law_firm }}</h1>
                          @else
                          <h1>Lawyers Profiles</h1>
                          @endif
                            
                            <div class="list-area">
                                <a href="index.html">Home</a>
                                <p class="icon"><i class="fa-regular fa-angle-right"></i></p>
                                <p class="page-text">Case Studies</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <!--=====HERO AREA END=======-->

           <!--=====CASE AREA START=======-->
           <div class="case3 case-study-page sp3">
            <div class="container">
              <div class="row">
                @if (!empty($serviceLawyers))

                @foreach ($serviceLawyers as $values)

                  <div class="col-lg-4 col-md-6">
                    <div class="case3-box">
                      <div class="img img100">
                        <img src="{{ asset('/assets/Dashboard/Lawyer_Image/'.$values->image) }}" alt="">
                      </div>
                      <div class="space16"></div>
                      <div class="case-hadding-box">
                        <div class="headding3">
                          <a href="#" class="tag">#Law Concretizing</a>
                          <h2><a href="{{ route("profiles.detail",['law_firm'=>$values->areasId,'lawyerId' => $values->id ]) }}">{{ $values->lawyerName }}</a></h2>
                        </div>
                        <div class="icon">
                          <a href="#"><i class="fa-regular fa-arrow-up"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                @endforeach
                @else

                @foreach ($allLawyers as $values)

                  <div class="col-lg-4 col-md-6">
                    <div class="case3-box">
                      <div class="img img100">
                        <img src="{{ asset('/assets/Dashboard/Lawyer_Image/'.$values->image) }}" alt="">
                      </div>
                      <div class="space16"></div>
                      <div class="case-hadding-box">
                        <div class="headding3">
                          <a href="#" class="tag">#Law Concretizing</a>
                          <h2><a href="{{ route("profiles.detail",['law_firm'=>$values->areasId,'lawyerId' => $values->id ]) }}">{{ $values->lawyerName }}</a></h2>
                        </div>
                        <div class="icon">
                          <a href="#"><i class="fa-regular fa-arrow-up"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

                @endforeach

                @endif

              </div>

              <div class="space40"></div>
              <div class="row">
                  <div class="col-12 m-auto">
                  <div class="theme-pagination text-center">
                      <ul>
                      <li><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                      <li><a class="active" href="#">01</a></li>
                      <li><a href="#">02</a></li>
                      <li>...</li>
                      <li><a href="#">12</a></li>
                      <li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                      </ul>
                  </div>
                  </div>
              </div>
              

            </div>
          </div>

          <!--=====CASE AREA END=======-->

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
