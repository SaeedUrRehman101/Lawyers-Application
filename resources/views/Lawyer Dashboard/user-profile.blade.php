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
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="user-profile">
      <div class="row">
        <!-- user profile first-style start-->
        <div class="col-sm-12">
          <div class="card hovercard text-center">
            <div class="cardheader"></div>
            <div class="user-image">
              <div class="avatar">
                @if (Auth::guard('lawyers')->check() && Auth::guard('lawyers')->user()->image)
                  <img alt="" src="{{ asset('../assets/Dashboard/Lawyer_Image/'.Auth::guard('lawyers')->user()->image) }}">
                @elseif (Auth::check() && Auth::user()->image)
                  <img alt="" src="{{ asset('../assets/Dashboard/user_Images/'.Auth::user()->image) }}">
                @else
                  <img alt="" src="../assets/Dashboard/images/user/7.jpg">
                @endif
              </div>
              <div class="icon-wrapper"><i class="icofont icofont-pencil-alt-5"></i></div>
            </div>
            <div class="info">
              <div class="row">
                <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="ttl-info text-start">
                        @if (Auth::guard('lawyers')->check() && Auth::guard('lawyers')->user()->email)
                          <h6><i class="fa fa-envelope"></i>Email</h6><span>{{ Auth::guard('lawyers')->user()->email }}</span>
                        @else
                          <h6><i class="fa fa-envelope"></i>Email</h6><span>{{ Auth::user()->email }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="ttl-info text-start">
                        @if (Auth::guard('lawyers')->check() && Auth::guard('lawyers')->user())
                        <h6><i class="fa fa-calendar me-1"></i>Designation</h6><span class="mt-1">{{ Auth::guard('lawyers')->user() ? Auth::guard('lawyers')->user()->designation : "Add Designation" }}</span>
                        @elseif (Auth::check() && Auth::user())
                          <h6><i class="fa fa-calendar"></i>BOD</h6><span>{{ Auth::user() ? Auth::user()->dob : "Add Your Date of Birth" }}</span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                  <div class="user-designation">
                    <div class="title"><a target="_blank" href="#">{{ Auth::user()->userName }}</a></div>
                    @isset(Auth::user()->bio)
                    <div class="desc">{{ Auth::user()->bio }}</div>
                    @else
                    <div class="desc">Bio</div>
                    @endisset
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="ttl-info text-start">
                        @if (Auth::guard('lawyers')->check() && Auth::guard('lawyers')->user()->contact)
                          <h6><i class="fa fa-phone me-1"></i>Contact Us</h6><span>{{ Auth::guard('lawyers')->user()->contact }}</span>
                        @elseif (Auth::check() && Auth::user()->contact)
                          <h6><i class="fa fa-phone me-1"></i>Contact Us</h6><span>{{ Auth::user()->contact }}</span>
                        @else
                          <h6><i class="fa fa-phone me-1"></i>Contact Us</h6><span class="mt-1">Add Contact Details</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="ttl-info text-start">
                        @if (Auth::guard('lawyers')->check() && Auth::guard('lawyers')->user()->address)
                          <h6><i class="fa fa-location-arrow me-1"></i>Location</h6><span>{{ Auth::guard('lawyers')->user()->address }}</span>
                        @elseif (Auth::check() && Auth::user()->address)
                          <h6><i class="fa fa-location-arrow me-1"></i>Location</h6><span>{{ Auth::user()->address }}</span>
                        @else
                          <h6><i class="fa fa-location-arrow me-1"></i>Location</h6><span class="mt-1">Add Contact Details</span>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
            </div>
          </div>
        </div>
        <!-- user profile first-style end-->
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
  
  @if (Auth::check() && Auth::user()->role == 'user')
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12"> 
        <div class="card">
          <div class="card-header">
            <h4>Your Info</h4>
          </div>
          <div class="card-body">
            <div class="horizontal-wizard-wrapper">
              <div class="row g-3">
                <div class="col-12"> 
                  <div class="tab-content dark-field" id="horizontal-wizard-tabContent">
                    <div class="tab-pane fade show active" id="wizard-info" role="tabpanel" aria-labelledby="wizard-info-tab">
                      <form class="row g-3 needs-validation" novalidate="" action="{{ route("update_profile") }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="user_Id" value="{{ Auth::user()->id }}">
                        <div class="col-xl-4 col-sm-6">
                          <label class="form-label" for="customFirstname">Full Name<span class="txt-danger">*</span></label>
                          <input class="form-control mb-3" name="name" value="@isset(Auth::user()->userName) {{ Auth::user()->userName }} @endisset" id="customFirstname" type="text" placeholder="Enter first name" required="">
                          @error("name")
                          <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="col-xl-4 col-sm-6">
                          <label class="col-xxl-3 box-col-12 text-start">Default Date </label>
                          <div class="col-xxl-9 box-col-12">
                            <div class="input-group flatpicker-calender">
                              @isset(Auth::user()->dob)
                              <input class="form-control mb-3" name="dob" value="{{ old('dob', Auth::user()->dob ?? '') }}" id="customDob" type="date" placeholder="Enter Date of Birth" required>
                              @else
                              <input class="form-control mb-3" id="datetime-local" name="dob" type="date">
                              @endisset
                              {{-- <input class="form-control" id="datetime-local" type="date" value="2024-05-03"> --}}
                            </div>
                          </div>
                          @error("dob")
                          <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="col-xl-4 col-12">
                          <label class="form-label" for="customEmail">Email<span class="txt-danger">*</span></label>
                          <input class="form-control mb-3" id="customEmail" name="email" type="email" required="" value="{{ Auth::user()->email }}" placeholder="Zono@example.com">
                          @error("email")
                          <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="col-xl-5 col-sm-4">
                          <label class="form-label" for="customState-wizard">State</label>
                          <select class="form-select mb-3" id="customState-wizard" required="" name="states">
                            @isset(Auth::user()->states)
                            <option value="Sindh" {{ Auth::user()->states == 'Sindh' ? 'selected' : '' }}>Sindh</option>
                            <option value="Punjab" {{ Auth::user()->states == 'Punjab' ? 'selected' : '' }}>Punjab</option>
                            <option value="Balochistan" {{ Auth::user()->states == 'Balochistan' ? 'selected' : '' }}>Balochistan</option>
                            <option value="Khyber Pakhtunkhwa" {{ Auth::user()->states == 'Khyber Pakhtunkhwa' ? 'selected' : '' }}>Khyber Pakhtunkhwa</option>
                            <option value="Azad Kashmir" {{ Auth::user()->states == 'Azad Kashmir' ? 'selected' : '' }}>Azad Kashmir</option>
                            <option value="Gilgit Baltistan" {{ Auth::user()->states == 'Gilgit Baltistan' ? 'selected' : '' }}>Gilgit Baltistan</option>
                            @else
                            <option selected="" disabled="">Choose...</option>
                            <option value="Sindh">Sindh</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Balochistan">Balochistan</option>
                            <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
                            <option value="Azad Kashmir">Azad Kashmir</option>
                            <option value="Gilgit Baltistan">Gilgit Baltistan</option>
                            @endisset
                          </select>
                          {{-- <div class="invalid-feedback">Please select a valid state.</div> --}}
                          @error("states")
                          <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="col-sm-4">
                          <label class="form-label" for="customContact1">Contact Number</label>
                          
                          @isset(Auth::user()->contact)
                          <input class="form-control mb-3" id="customContact1" type="number" value="{{ Auth::user()->contact }}" name="contact" placeholder="Enter number" >
                          @else
                          <input class="form-control mb-3" id="customContact1" type="number" name="contact" placeholder="Enter number">
                          @endisset
                          @error("contact")
                          <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="col-xl-3 col-sm-4">
                          <label class="form-label" for="custom-address">Address</label>
                          @isset(Auth::user()->Address)
                          <input class="form-control mb-3" id="custom-address" value="{{ Auth::user()->Address }}" type="text" name="Address" placeholder="Enter Your Address">
                          @else
                          <input class="form-control mb-3" id="custom-address" type="text" name="Address" placeholder="Enter Your Address">
                          @endisset
                          @error("Address")
                          <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="col-12">
                          <div class="mb-3 row"> 
                            <label class="form-label" for="custom-address">Add Bio</label>
                            <div class="col-sm-12"> 
                              <div class="form-floating">
                                @isset(Auth::user()->bio)
                                <textarea class="form-control mb-3" id="floatingTextarea" name="bio" placeholder="Leave a comment here">{{ Auth::user()->bio }}</textarea>
                                @else
                                <textarea class="form-control mb-3" id="floatingTextarea" name="bio" placeholder="Leave a comment here"></textarea>
                                @endisset
                                <label for="floatingTextarea">Comments</label>
                              </div>
                              @error("bio")
                              <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                              @enderror
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="formFileSimple">Default file input example</label>
                            <input class="form-control px-4" name="image" id="formFileSimple" type="file">
                            @isset(Auth::user()->image)
                            <img class="mt-2" src="{{ asset('assets/Dashboard/user_Images/' . Auth::user()->image) }}" width="90px" alt="">
                            @endisset
                          </div>
                        </div>
                        <div class="col-12 text-end">
                          <button type="submit" class="btn btn-primary">Submit</button>
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

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-8"> 
        <div class="card">
          <div class="card-header">
          <h4 id="resest_password">Reset Password</h4>
          </div>
          <div class="card-body">
            <div class="horizontal-wizard-wrapper">
              <div class="row g-3">
                <div class="col-12"> 
                  <div class="tab-content dark-field" id="horizontal-wizard-tabContent">
                    <div class="tab-pane fade show active" id="wizard-info" role="tabpanel" aria-labelledby="wizard-info-tab">
                      <form class="row g-3 needs-validation" action="{{ route("checkPass") }}" method="post">
                        @csrf
                        <input type="hidden" name="email" value="{{ Auth::user()->email }}">
                        <div class="form-group">
                          <label class="col-form-label">Confirm Password</label>
                          <div class="form-input position-relative">
                            <input class="form-control mb-3" type="password" name="password" placeholder="*********">
                          </div>
                          @error("password")
                          <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                          @enderror
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
  @endif

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
