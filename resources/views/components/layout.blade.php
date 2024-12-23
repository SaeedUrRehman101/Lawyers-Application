<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from html.fleexstudio.com/legalt/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2024 07:26:05 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!--=====TITLE=======-->
    <title>Home 2 || Law & Attorneys </title>
    <!--=====FAV ICON=======-->
    <link rel="shortcut icon" href="/assets/lawyer/img/logo/titel5.png"/>

    @stack("links")

  </head>

  <body class="body4">
  <!--=====PROGRESS START=======-->


	
  <div class="overlay flex cac vac preloader-parent">
    <div>
        <div class="loader preloader flex vac">
            <svg width="200" height="200" >
                <circle class="background" cx="90" cy="90" r="80" transform="rotate(-90, 100, 90)"/>
                <circle class="outer" cx="90" cy="90" r="80" transform="rotate(-90, 100, 90)"/>
            </svg>
            <span class="circle-background">
              
            </span>
            <span class="logo animated fade-in">                
                 <img src="/assets/lawyer/img/logo/footer-logo5.png" alt="">            
            </span>
        </div>
    </div>
</div>

    


<!--=====PROGRESS END=======-->

<div class="paginacontainer"> 

  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
  </div>

</div> 


    <!--=====HEADER START=======-->
    <header>
      <div class="header-area header-area-all header-area-all5 d-none d-lg-block" id="header">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="header-elements _relative">
                <div class="site-logo home1-site-logo">
                  <a href="{{ route("Lawyer_Web") }}">
                    <img src="/assets/lawyer/img/logo/header5-logo.png" alt="" />
                  </a>
                </div>



                <div class="main-menu-ex main-menu-ex1">
                  <ul>

                    <li><a href="{{ route("Lawyer_Web") }}">Home</a></li>



                  <li><a href="{{ route('about') }}">About Us</a></li>

                  <li><a href="{{ route("services.List") }}">Service</a></li>

                  <li><a href="{{ route("services.List") }}">Practice Areas</a></li>


                  <li><a href="{{ route("contact") }}">Contact Us</a></li>
                  <li><a href="{{ route("User_Panel") }}">Profile</a></li>
                  @if (Auth::guard("lawyers")->check() && Auth::guard("lawyers")->user()->role == "lawyer")
                    <li><a href="{{ route("Logout") }}">LogOut</a></li>
                  @elseif (Auth::check()  && Auth::user()->role == "user")
                    <li><a href="{{ route("SignOut") }}">LogOut</a></li>
                  @else
                    <li><a href="{{ route("Lawyer") }}">Join as a Lawyer</a></li>
                    <li><a href="{{ route("SignUp") }}">Sign Up</a></li>
                  @endif
                  </ul>
                </div>


                <div class="home4-header-buttons">

      
                  <div class="button2-all">
                    <a href="{{ route("contact") }}" class="theme-btn8"><span class="span-btn">Contact Us</span></a>
                  </div>

                </div>
                <div class="mobile-menu-bar d-lg-none">
                  <i class="fas fa-bars"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--=====HEADER END=======-->

    
           <!--=====MOBILE HEADER START=======-->
           <div class="mobile-header mobile-header-4 d-block d-lg-none ">
            <div class="container-fluid">
              <div class="col-12">
                <div class="mobile-header-elements">
                  <div class="mobile-logo">
                    <a href="index1.html"><img src="/assets/lawyer/img/logo/header5-logo.png" alt="" /></a>
                  </div>
                  <div class="mobile-logo-unick">
                    <img src="/assets/lawyer/img/logo/header-logo1.svg" alt="">
                  </div>
                  <div class="mobile-nav-icon">
                    <!-- <i class="fa-solid fa-bars"></i> -->
                    <i class="fa-duotone fa-bars-staggered"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="mobile-sidebar d-block d-lg-none">
            <div class="menu-close">
              <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="mobile-logo-unick">
              <img src="/assets/lawyer/img/logo/header-logo1.svg" alt="">
            </div>
            <div class="mobile-nav">
        
              <li class="has-dropdown"><a href="#">Home </a> 
                <ul class="sub-menu">
                  <li  class="has-dropdown"><a href="index4.html">Multipage</a>
                    <ul class="sub-menu">
                      <li><a href="index.html">Home 1</a></li>
                      <li><a href="index2.html">Home 2</a></li>
                      <li><a href="index3.html">Home 3</a></li>
                      <li><a href="index4.html">Home 4</a></li>
                      <li><a href="index5.html">Home 5</a></li>
                      <li><a href="index6.html">Home 6</a></li>
                      <li><a href="index7.html">Home 7</a></li>
                    </ul>
                  </li>
                  <li  class="has-dropdown"><a href="index4.html">Landing Page</a>
                    <ul class="sub-menu">
                      <li><a href="single-index1.html">Home 1</a></li>
                      <li><a href="single-index2.html">Home 2</a></li>
                      <li><a href="single-index3.html">Home 3</a></li>
                      <li><a href="single-index4.html">Home 4 </a></li>
                      <li><a href="single-index5.html">Home 5 </a></li>
                      <li><a href="single-index6.html">Home 6 </a></li>
                      <li><a href="single-index7.html">Home 7 </a></li>
                    </ul>
                  </li>
                </ul>
            </li>

          <li><a href="{{ route('about') }}">About Us</a></li>

                  <li class="has-dropdown"><a href="#">Service </a> 
                    <ul class="sub-menu">
                      <li><a href="service.html">Our Service</a></li>
                      
                      <li class="has-dropdown"><a href="service.html">Service Details</a>
                        <ul class="sub-menu">
                          <li><a href="service-details-sidebar-left.html">Details Left</a></li>
                          <li><a href="service-details-sidebar-right.html">Details Right</a></li>
                          <li><a href="service-details.html">Single Service</a></li>
                        </ul>
                      </li>

                    </ul>
                </li>

                <li class="has-dropdown"><a href="#">Pages</a> 
                  <ul class="sub-menu">
                    <li  class="has-dropdown has-dropdown1"><a href="case-study.html">Case Study</a>
                      <ul class="sub-menu">
                            <li><a href="case-study.html">Case Study</a></li>
                             <li><a href="case-study-sidebar-left.html">Case Study Left</a></li>
                             <li><a href="case-study-sidebar-right.html">Case Study Right</a></li>
                      </ul>
                    </li>

                    <li  class="has-dropdown has-dropdown1"><a href="case-study.html">Case Details</a>
                      <ul class="sub-menu">
                           <li><a href="case-study-details-sidebar-left.html">Details Left</a></li>
                            <li><a href="case-study-details-sidebar-right.html">Details Right</a></li>
                            <li><a href="case-study-details.html">Single Detials</a></li>
                      </ul>
                    </li>

                    <li><a href="team.html">Our Team</a></li>
                    <li><a href="testimonial.html">Testimonial</a></li>
                    <li><a href="error.html">404</a></li>
                  </ul>
              </li>

                  <li><a href="contact.html">Contact Us</a></li>

    
              <li><a class="mobile-menu-button" href="contact.html">Get Started</a></li>
    
    
              
            </div>
    
            <div class="mobile-menu-social">
              <h3>Contact Info</h3>
              <div class="footer4-contact-info">
                <div class="mobile-menu-icon-box">
                  <div class="mobile-menu-icon">
                  </div>
                  <div class="mobile-menu-a">
                    <a href="tel:921-888-0022">921-888-0022</a>
                  </div>
                </div>

                <div class="mobile-menu-icon-box">
                  <div class="mobile-menu-icon">
                  </div>
                  <div class="mobile-menu-a">
                    <a href="mailto:example@visafast.com">example@visafast.com</a>
                  </div>
                </div>
    
                <div class="mobile-menu-social">
                  <h3>Our Location</h3>
                  
                  <div class="mobile-menu-icon-box">
                    <div class="mobile-menu-icon">
                    </div>
                    <div class="mobile-menu-a">
                      <a href="mailto:info@example.com">55 East Birchwood Ave.Brooklyn, <br> New York 11201,United States</a>
                    </div>
                  </div>
    
                </div>
    
                <div class="mobile-menu-social">
                  <h3>Social Links</h3>
                  
                  <div class="mobile-menu-social-icon">
                    <ul>
                      <li>
                        <a data-bs-toggle="tooltip" title="Linked in" href="#"><i class="fa-brands fa-facebook"></i></a>
                      </li>
                      <li>
                        <a data-bs-toggle="tooltip" title="Facebook" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                      </li>
                      <li>
                        <a data-bs-toggle="tooltip" title="Instagram" href="#"><i class="fa-brands fa-youtube"></i></a>
                      </li>
                      <li>
                        <a data-bs-toggle="tooltip" title="TikTok" href="#"><i class="fa-brands fa-twitter"></i></a>
                      </li>
                    </ul>
                  </div>
    
                </div>
    
              </div>
            </div>
          </div>
          <!--=====MOBILE HEADER END=======-->

          <!--===== HERO AREA START=======-->

          @yield('content')

          <!--===== HERO AREA END=======-->





    <div class="footer-area5-all">
             <!--=====FOOTER START=======-->
             <footer class="footer-area5">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4 col-sm-6">
                    <div class="single-footer mr50">
                      <div class="site-logo home1-site-logo">
                        <a href="{{ route("Lawyer_Web") }}"
                          ><img src="/assets/lawyer/img/logo/footer-logo5.png" alt="" />
                        </a>
                      </div>
                      <div class="space30"></div>
                     <div class="headding1-w">
                      <p>
                        Our dedicated team is here to help you navigate the legal process and fight for the compensation you deserve. Schedule a free consultation with our experienced attorneys today.
                      </p>
                     </div>
                    </div>
                    <div class="space24"></div>
                    <div class="social">
                      <ul>
                        <li>
                          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                      </ul>
                    </div>
        
                  </div>
                  <div class="col-lg col-sm-6 headding2">
                    <div class="single-footer">
                      <h3>
                        Company
                      </h3>
                      <div class="space10"></div>
                      <div>
                        <ul>
                          <li><a href="#"> Home</a></li>
                          <li><a href="#">Practice Areas</a></li>
                          <li><a href="#"> Our Team</a></li>
                          <li><a href="contact.html"> Contact</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg col-sm-6 headding2">
                    <div class="single-footer">
                      <h3>
                        Practice Areas
                      </h3>
                      <div class="space10"></div>
                      <div>
                        <ul>
                          <li><a href="#">Business Law</a></li>
                          <li><a href="#"> Personal Injury</a></li>
                          <li><a href="#">Family Law</a></li>
                          <li><a href="#"> Criminal Defense</a></li>
                          <li><a href="#"> Family Law</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 headding2">
                    <div class="single-footer">
                      <h3>
                        Contact Info
                      </h3>
                      <div class="space10"></div>
                      <div class="footer-contact-box">
                        <div class="footer-contact-icon">
                          <a href="#"><i class="fa-light fa-phone-volume"></i></a>
                        </div>
                        <div class="footer-contact-hadding">
                          <a href="tel:+3(924)4596512">+3(924)4596512</a>
                        </div> 
                      </div>
                      <div class="space10"></div>

                      <div class="footer-contact-box">
                        <div class="footer-contact-icon">
                          <a href="#"><i class="fa-regular fa-envelope"></i></a>
                        </div>
                        <div class="footer-contact-hadding">
                          <a href="mailto:info@example.com">info@example.com</a>
                        </div>
                      </div>
                    </div>
                    <div class="space24"></div>
                    <div class="single-footer">
                      <h3>
                        Our Location
                      </h3>
                      <div class="footer-contact-box">
                        <div class="footer-contact-icon">
                          <a href="#"><i class="fa-regular fa-location-dot"></i></a>
                        </div>
                        <div class="footer-contact-hadding">
                          <a href="#">55 East Birchwood Ave.Brooklyn, New York 11201,United States</a>
                        </div> 
                      </div>

                    </div>

                  </div>
                </div>
                <div class="space60"></div>
                <div class="row align-items-center copyright2">
                  <div class="col-lg-12 text-center headding1-w">
                    <p>
                      © Copyright 2024 Legalt Law Consulting Ltd. Terms & Conditions
                    </p>
                  </div>
                </div>
              </div>
            </footer>
            <!--=====FOOTER END=======-->
                  </div>


    @if (session("status"))
      <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toast = new bootstrap.Toast(document.getElementById('deleteToast'));
            toast.show();
        });
      </script>
      <div class="toast-container position-fixed top-0 end-0 p-3">
          <div id="deleteToast" class="toast align-items-center text-white bg-success border-0"
              role="alert" aria-live="assertive" aria-atomic="true">
              <div class="d-flex">
                  <div class="toast-body">
                      {{ session('status') }}
                  </div>
                  <button type="button" class="btn-close btn-close-white me-2 m-auto"
                      data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
          </div>
      </div>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    

 @stack("scripts")
</body>

<!-- Mirrored from html.fleexstudio.com/legalt/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Dec 2024 07:26:44 GMT -->
</html>
