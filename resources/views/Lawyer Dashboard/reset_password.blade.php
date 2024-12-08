@extends('components.dashboard_layout')
@push('links')
<link rel="icon" href="../assets/Dashboard/images/favicon.png" type="image/x-icon">
<link rel="shortcut icon" href="../assets/Dashboard/images/favicon.png" type="image/x-icon">
<title>Zono - Premium Admin Template</title>
<!-- Google font -->
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/font-awesome.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<!-- ico-font-->
<link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/vendors/icofont.css">
<!-- Themify icon-->
<link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/vendors/themify.css">
<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/vendors/flag-icon.css">
<!-- Feather icon-->
<link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/vendors/feather-icon.css">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/vendors/slick.css">
<link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/vendors/slick-theme.css">
<link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/vendors/scrollbar.css">
<link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/vendors/animate.css">
<link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/vendors/photoswipe.css">
<!-- Plugins css Ends-->
<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/vendors/bootstrap.css">
<!-- App css-->
<link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/style.css">
<link id="color" rel="stylesheet" href="../assets/Dashboard/css/color_1.css" media="screen">
<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/responsive.css">
<style>
  .show-hide{
    top: 19px !important;
  }
</style>
@endpush
@section('titel')
User Profile
@endsection
@section('content')

<div class="container-fluid mx-auto" style="width: 1000px;">
    <div class="row">
      <div class="col-sm-12"> 
        <div class="card">
          <div class="card-header">
          <h4>Reset Password</h4>
          </div>
          <div class="card-body">
            <div class="horizontal-wizard-wrapper">
              <div class="row g-3">
                <div class="col-12"> 
                  <div class="tab-content dark-field" id="horizontal-wizard-tabContent">
                    <div class="tab-pane fade show active" id="wizard-info" role="tabpanel" aria-labelledby="wizard-info-tab">
                      <form class="row g-3 needs-validation" action="" method="post">
                      {{-- <form class="row g-3 needs-validation" action="{{ route("Reset_Password") }}" method="post"> --}}
                        @csrf
                        <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                        <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <div class="form-input position-relative">
                              <input class="form-control" type="password" name="login[password]" placeholder="*********">
                              <div class="show-hide"><span class="show"></span></div>
                              @error("login[password]")
                            <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                            @enderror
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-form-label">Confirm Password</label>
                            <div class="form-input position-relative">
                              <input class="form-control" type="password" name="login[password_confirmation]" placeholder="*********">
                              <div class="show-hide"><span class="show"></span></div>
                              @error("login[password_confirmation]")
                            <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                            @enderror
                            </div>
                          </div>
                        <div class="col-12 text-end">
                          <button type="submit" class="btn btn-primary">Reset Password</button>
                        </div>
                      </form>
                    </div>
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
  <!-- latest jquery-->
  <script src="../assets/Dashboard/js/jquery.min.js"></script>
  <!-- Bootstrap js-->
  <script src="../assets/Dashboard/js/bootstrap/bootstrap.bundle.min.js"></script>
  <!-- feather icon js-->
  <script src="../assets/Dashboard/js/icons/feather-icon/feather.min.js"></script>
  <script src="../assets/Dashboard/js/icons/feather-icon/feather-icon.js"></script>
  <!-- scrollbar js-->
  <script src="../assets/Dashboard/js/scrollbar/simplebar.js"></script>
  <script src="../assets/Dashboard/js/scrollbar/custom.js"></script>
  <!-- Sidebar jquery-->
  <script src="../assets/Dashboard/js/config.js"></script>
  <!-- Plugins JS start-->
  <script src="../assets/Dashboard/js/sidebar-menu.js"></script>
  <script src="../assets/Dashboard/js/sidebar-pin.js"></script>
  <script src="../assets/Dashboard/js/slick/slick.min.js"></script>
  <script src="../assets/Dashboard/js/slick/slick.js"></script>
  <script src="../assets/Dashboard/js/header-slick.js"></script>
  <script src="../assets/Dashboard/js/counter/jquery.waypoints.min.js"></script>
  <script src="../assets/Dashboard/js/counter/jquery.counterup.min.js"></script>
  <script src="../assets/Dashboard/js/counter/counter-custom.js"></script>
  <script src="../assets/Dashboard/js/photoswipe/photoswipe.min.js"></script>
  <script src="../assets/Dashboard/js/photoswipe/photoswipe-ui-default.min.js"></script>
  <script src="../assets/Dashboard/js/photoswipe/photoswipe.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="../assets/Dashboard/js/script.js"></script>
  {{-- <script src="../assets/Dashboard/js/theme-customizer/customizer.js"></script> --}}
  <!-- Plugin used-->
@endpush

@endsection
