@push('links')
<link rel="icon" href=".../assets/Dashboard/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Zono - Premium Admin Template</title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/font-awesome.css">
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
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/Dashboard/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/responsive.css">
@endpush

@section('content')
  <!-- Container-fluid Ends-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6">
        <div class="card height-equal">
          <div class="card-header pb-0">
            <h4>Student validation form</h4>
            <p class="f-m-light mt-1">
                Please make sure fill all the filed before click on next button.</p>
          </div>
          <div class="card-body custom-input">
            <form class="form-wizard" id="regForm" action="#" method="POST">
              <div class="tab">
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="name">Name</label>
                    <input class="form-control" id="name" type="text" placeholder="Enter your name" required="required">
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="student-email-wizard">Email<span class="txt-danger">*</span></label>
                    <input class="form-control" id="student-email-wizard" type="email" required="" placeholder="Zono@gmail.com">
                  </div>
                  <div class="col-12">
                    <label class="col-sm-12 form-label" for="password-wizard">Password<span class="txt-danger">*</span></label>
                    <input class="form-control" id="password-wizard" type="password" placeholder="Enter password" required="">
                  </div>
                  <div class="col-12">
                    <label class="col-sm-12 form-label" for="confirmpassowrd">Confirm Password<span class="txt-danger">*</span></label>
                    <input class="form-control" id="confirmpassowrd" type="password" placeholder="Enter confirm password" required="">
                  </div>
                </div>
              </div>
              <div class="tab">
                <div class="row g-3 avatar-upload">
                  <div class="col-12">
                    <div>
                      <div class="avatar-edit">
                        <input id="imageUpload" type="file" accept=".png, .jpg, .jpeg">
                        <label for="imageUpload"></label>
                      </div>
                      <div class="avatar-preview">
                        <div id="image"></div>
                      </div>
                    </div>
                    <h3>Add Profile</h3>
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="exampleFormControlInput1">Portfolio URL</label>
                    <input class="form-control" id="exampleFormControlInput1" type="url" placeholder="https://zono/">
                  </div>
                  <div class="col-12"> 
                    <label class="form-label" for="projectDescription">Project Description</label>
                    <textarea class="form-control" id="projectDescription" rows="2"></textarea>
                  </div>
                </div>
              </div>
              <div class="tab">
                <h5 class="mb-2">Social Links </h5>
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label class="form-label" for="twitterControlInput">Twitter</label>
                    <input class="form-control" id="twitterControlInput" type="url" placeholder="https://twitter.com/">
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="githubControlInput">Github</label>
                    <input class="form-control" id="githubControlInput" type="url" placeholder="https://admin.pixelstrap.net/github.com">
                  </div>
                  <div class="col-12"> 
                    <div class="input-group">
                      <input class="form-control" id="inputGroupFile04" type="file" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                      <button class="btn btn-outline-secondary" id="inputGroupFileAddon04" type="button">Submit</button>
                    </div>
                  </div>
                  <div class="col-12">
                    <select class="form-select" aria-label="Default select example">
                      <option selected="">Positions</option>
                      <option value="1">Web Designer</option>
                      <option value="2">Software Engineer</option>
                      <option value="3">UI/UX Designer </option>
                      <option value="3">Web Developer</option>
                    </select>
                  </div>
                  <div class="col-12"> 
                    <label class="form-label" for="quationsTextarea">Why do you want to take this position?</label>
                    <textarea class="form-control" id="quationsTextarea" rows="2"></textarea>
                  </div>
                </div>
              </div>
              <div>
                <div class="text-end pt-3">
                  <button class="btn btn-secondary" id="prevBtn" type="button" onclick="nextPrev(-1)">Previous</button>
                  <button class="btn btn-primary" id="nextBtn" type="button" onclick="nextPrev(1)">Next</button>
                </div>
              </div>
              <!-- Circles which indicates the steps of the form:-->
              <div class="text-center"><span class="step"></span><span class="step"></span><span class="step"></span><span class="step"></span></div>
            </form>
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
  <script src="../assets/Dashboard/js/form-wizard/form-wizard.js"></script>
  <script src="../assets/Dashboard/js/form-wizard/image-upload.js"></script>
  <script src="../assets/Dashboard/js/height-equal.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="../assets/Dashboard/js/script.js"></script>
  {{-- <script src="../assets/Dashboard/js/theme-customizer/customizer.js"></script> --}}
  <!-- Plugin used-->
@endpush

@endsection
