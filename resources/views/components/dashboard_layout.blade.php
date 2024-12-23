<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zono admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Zono admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    @stack("links")
  </head>
  <body> 
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start   -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"> <img class="img-fluid for-light" src="../assets/Dashboard/images/logo/logo.png" alt=""><img class="img-fluid for-dark" src="../assets/Dashboard/images/logo/logo.png" alt=""></a></div>
            <div class="toggle-sidebar">
              <svg class="sidebar-toggle"> 
                <use href="assets/Dashboard/svg/icon-sprite.svg#stroke-animation"></use>
              </svg>
            </div>
          </div>
          <form class="col-sm-4 form-inline search-full d-none d-xl-block" action="#" method="get">
            <div class="form-group">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Type to Search .." name="q" title="" autofocus>
                  <svg class="search-bg svg-color">
                    <use href="assets/Dashboard/svg/icon-sprite.svg#search"></use>
                  </svg>
                </div>
              </div>
            </div>
          </form>
          <div class="nav-right col-xl-8 col-lg-12 col-auto pull-right right-header p-0">
            <ul class="nav-menus">
              <li class="serchinput">
                <div class="serchbox">
                  <svg>
                    <use href="assets/Dashboard/svg/icon-sprite.svg#search"></use>
                  </svg>
                </div>
                <div class="form-group search-form">
                  <input type="text" placeholder="Search here...">
                </div>
              </li>
              <li>
                <div class="mode">
                  <svg class="for-dark">
                    <use href="assets/Dashboard/svg/icon-sprite.svg#moon"></use>
                  </svg>
                  <svg class="for-light">
                    <use href="assets/Dashboard/svg/icon-sprite.svg#Sun"></use>
                  </svg>
                </div>
              </li>
              <li class="language-nav">
                <div class="translate_wrapper">
                  <div class="current_lang">
                    <div class="lang"><i class="flag-icon flag-icon-pk"></i><span class="lang-txt box-col-none">PK</span></div>
                  </div>
                  <div class="more_lang">
                    <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span> (US)</span></span></div>
                    <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span class="lang-txt">Deutsch</span></div>
                    <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span class="lang-txt">Español</span></div>
                    <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Français</span></div>
                    <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span class="lang-txt">Português<span> (BR)</span></span></div>
                    <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span class="lang-txt">简体中文</span></div>
                    <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span class="lang-txt">لعربية <span> (ae)</span></span></div>
                  </div>
                </div>
              </li>
              <li class="profile-nav onhover-dropdown pe-0 py-0">
                <div class="d-flex align-items-center profile-media">
                  @if(Auth::guard('lawyers')->check() && Auth::guard('lawyers')->user()->image)
                      <img class="b-r-25" width="40px" src="{{ asset('../assets/Dashboard/Lawyer_Image/' . Auth::guard('lawyers')->user()->image) }}" alt="">
                  @elseif (Auth::check() && Auth::user()->image)
                  <img class="b-r-25" width="40px" src="{{ asset('../assets/Dashboard/user_Images/' . Auth::user()->image) }}" alt="">
                  @else
                      <img class="b-r-25" src="../assets/Dashboard/images/dashboard/profile.png" alt="">
                  @endif
                  <div class="flex-grow-1 user"><span></span>
                    <p class="mb-0 font-nunito">
                      @if (Auth::guard('lawyers')->check() && Auth::guard('lawyers')->user()->lawyerName)
                      {{ Auth::guard('lawyers')->user()->lawyerName }}
                      @elseif(Auth::check() && Auth::user()->userName)
                      {{ Auth::user()->userName }}
                      @endif
                      <svg>
                        <use href="assets/Dashboard/svg/icon-sprite.svg#header-arrow-down"></use>
                      </svg>
                    </p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                @if (Auth::guard('lawyers')->check() && Auth::guard('lawyers')->user()->role === 'lawyer')
                  <li><a href="{{ route('Lawyer_Panel') }}"><i data-feather="user"></i><span>Account</span></a></li>
                @elseif(Auth::check() && Auth::user()->role === 'user' || Auth::check() && Auth::user()->role === 'admin')
                  <li><a href="{{ route('User_Panel') }}"><i data-feather="user"></i><span>Account</span></a></li>
                  <li><a href="{{ route('Lawyer_Web') }}"><i data-feather="user"></i><span>Website</span></a></li>
                @endif
                  <li><a href="letter-box.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                  <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li>
                    @if (Auth::guard('lawyers')->check() && Auth::guard('lawyers')->user()->role == 'lawyer')
                    <a href="{{ route("Logout") }}"> <i data-feather="log-in"></i><span>Log Out</span></a>
                    @else
                    <a href="{{ route("SignOut") }}"> <i data-feather="log-in"></i><span>Log Out</span></a>
                    @endif
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">              
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName"></div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page body Start -->
      <div class="page-body-wrapper"> 
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper" data-layout="stroke-svg">
          <div>
            <div class="logo-wrapper"><a href="index.html"> <img class="img-fluid for-light" src="/assets/lawyer/img/logo/header5-logo.png" alt=""><img class="img-fluid for-dark" src="/assets/lawyer/img/logo/header5-logo.png" alt=""></a>
              <div class="toggle-sidebar">
                <svg class="sidebar-toggle"> 
                  <use href="assets/Dashboard/svg/icon-sprite.svg#toggle-icon"></use>
                </svg>
              </div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/Dashboard/images/logo/logo-icon.png" alt=""></a></div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="index.html"><img class="img-fluid" src="../assets/Dashboard/images/logo/logo-icon.png" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="pin-title sidebar-main-title">
                    <div> 
                      <h6>Pinned</h6>
                    </div>
                  </li>
                  <li class="sidebar-main-title">
                    <div>
                      <h6 class="lan-1">General</h6>
                    </div>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{ route("Dashboard") }}">
                    <svg class="stroke-icon">
                      <use href="assets/Dashboard/svg/icon-sprite.svg#stroke-email"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="assets/Dashboard/svg/icon-sprite.svg#fill-email"></use>
                    </svg><span>Dashboard</span></a>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{ route("Lawyer_Web") }}">
                    <svg class="stroke-icon">
                      <use href="assets/Dashboard/svg/icon-sprite.svg#stroke-ecommerce"></use>
                    </svg>
                    <svg class="fill-icon">
                      {{-- <use href="assets/Dashboard/svg/icon-sprite.svg#fill-email"></use> --}}
                      <use href="assets/Dashboard/svg/icon-sprite.svg#stroke-ecommerce"></use>
                    </svg><span>Website</span></a>
                  </li>
                  @if (Auth::guard('lawyers')->check() && Auth::guard('lawyers')->user()->role === 'lawyer')
                    {{-- <li><a href="{{ route('Lawyer_Panel') }}"><i data-feather="user"></i><span>Account</span></a></li> --}}
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{ route("Lawyer_Panel") }}">
                      <svg class="stroke-icon">
                        <use href="assets/Dashboard/svg/icon-sprite.svg#stroke-user"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="assets/Dashboard/svg/icon-sprite.svg#fill-email"></use>
                      </svg><span>Account</span></a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{ route("Law_Firms") }}">
                      <svg class="stroke-icon">
                        <use href="assets/Dashboard/svg/icon-sprite.svg#stroke-learning"></use>
                      </svg>
                      <svg class="fill-icon">
                        <use href="assets/Dashboard/svg/icon-sprite.svg#stroke-learning"></use>
                      </svg><span>Add Law Firms</span></a>
                    </li>
                  @elseif(Auth::check() && Auth::user()->role === 'user' || Auth::check() && Auth::user()->role === 'admin')
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{ route("User_Panel") }}">
                    <svg class="stroke-icon">
                      <use href="assets/Dashboard/svg/icon-sprite.svg#stroke-user"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="assets/Dashboard/svg/icon-sprite.svg#fill-email"></use>
                    </svg><span>Account</span></a>
                  </li>
                  @endif
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{ route("SignOut") }}">
                    <svg class="stroke-icon">
                      <use href="assets/Dashboard/svg/icon-sprite.svg#stroke-faq"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="assets/Dashboard/svg/icon-sprite.svg#fill-email"></use>
                    </svg><span>LogOut</span></a>
                  </li>
                  <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav" href="{{ route("User_Panel") }}#resest_password">
                    <svg class="stroke-icon">
                      <use href="assets/Dashboard/svg/icon-sprite.svg#stroke-others"></use>
                    </svg>
                    <svg class="fill-icon">
                      <use href="assets/Dashboard/svg/icon-sprite.svg#fill-email"></use>
                    </svg><span>Reset Password</span></a>
                  </li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title"> 
              <div class="row">
                <div class="col-xl-4 col-sm-7 box-col-3">
                  <h3>@yield("titel")</h3>
                  {{-- <h3>Default Dashboard </h3> --}}
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          @yield("content")
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 p-0 footer-copyright">
                <p class="mb-0">Copyright 2024 © Saeed Ur Rehman.</p>
              </div>
              <div class="col-md-6 p-0">
                <p class="heart mb-0">Hand crafted &amp; made with
                  <svg class="footer-icon">
                    <use href="assets/Dashboard/svg/icon-sprite.svg#heart"></use>
                  </svg>
                </p>
              </div>
            </div>
          </div>
        </footer>
      </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    @stack("scripts")
  </body>

<!-- Mirrored from admin.pixelstrap.net/zono/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2024 06:32:44 GMT -->
</html>