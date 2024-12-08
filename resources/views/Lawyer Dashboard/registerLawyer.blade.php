<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.net/zono/template/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2024 06:34:38 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Zono admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Zono admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/Dashboard/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/Dashboard/images/favicon.png" type="image/x-icon">
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
    <link id="color" rel="stylesheet" href="../assets/Dashboard/css/color_1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/responsive.css">
  </head>
  <body> 
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>

    <div class="container-fluid p-0"> 
        <div class="row m-0">
          <div class="col-xl-5 loggIn_Img"><img class="bg-img-cover bg-center" src="../assets/Dashboard/images/login/Lawyer-rafiki.png" alt="looginpage"></div>
          <div class="col-xl-7 p-0">
            <div class="login-card login-dark login-bg">
              <div>
                <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light" src="../assets/Dashboard/images/logo/logo.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/Dashboard/images/logo/logo_dark.png" alt="looginpage"></a></div>
                <div class="login-main padding"> 
                    <div class="card height-equal border_none margin">
                        <div class="card-header pb-0">
                          <h4>Lawyers Registration</h4>
                          <p class="f-m-light mt-1">
                              Please make sure fill all the filed before click on next button.</p>
                        </div>
                        <div class="card-body custom-input">
                          <form class="form-wizard" id="regForm" action="{{ route("Lawyer") }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="tab">
                              <div class="row g-3">
                                <div class="col-12 mt-3">
                                  <label class="col-sm-12 form-label" for="name">Name<span class="txt-danger">*</span></label>
                                  <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name" >
                                </div>
                                <div class="col-12 mt-4">
                                    <label class="form-label col-sm-12" for="lawyer-number-wizard">Phone Number<span class="txt-danger">*</span></label>
                                    <input class="form-control" id="lawyer-number-wizard" name="contact" type="number" placeholder="0323-1122334">
                                  </div>
                                <div class="col-12 mt-4">
                                  <label class="form-label col-sm-12" for="lawyer-email-wizard">Email<span class="txt-danger">*</span></label>
                                  <input class="form-control" id="lawyer-email-wizard" name="email" type="email" placeholder="Zono@gmail.com">
                                </div>
                                <div class="col-12 mt-4">
                                  <label class="col-sm-12 form-label" for="confirmpassowrd">Password<span class="txt-danger">*</span></label>
                                  <input class="form-control" id="confirmpassowrd" type="password" name="password" placeholder="Enter password" >
                                </div>
                              </div>
                            </div>
                            <div class="tab">
                              <div class="row g-3 avatar-upload">
                                <div class="col-12">
                                  <div>
                                    <div class="avatar-edit">
                                      <input id="imageUpload" type="file" name="lawyerImage">
                                      <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                      <div id="image"></div>
                                    </div>
                                  </div>
                                  <h3>Add Profile</h3>
                                </div>
                                <div class="col-12">
                                  <label class="form-label" for="projectDescription">Designation<span class="txt-danger">*</span></label>
                                    <select class="form-select" aria-label="Default select example" name="designation">
                                      <option selected="">Select Designation</option>
                                      <option value="Advocate">Advocate</option>
                                      <option value="Advocate High Court">Advocate High Court</option>
                                      <option value="Advocate Supreme Court">Advocate Supreme Court</option>
                                      <option value="Barrister">Barrister</option>
                                      <option value="Paralegal">Paralegal</option>
                                    </select>
                                </div>
                                <div class="col-12 mt-4">
                                    <label class="col-sm-12 form-label" for="lawyer-qualification-wizard">Qualification<span class="txt-danger">*</span></label>
                                    <input class="form-control" id="lawyer-qualification-wizard" type="text" name="qualification" placeholder="e.g. LLB, LLM, Bar-at-Law, PhD., Other" >
                                  </div>
                              </div>
                            </div>
                            <div class="tab">
                              <div class="row g-3">
                                <div class="col-12 mt-3">
                                    <label class="col-sm-12 form-label" for="Province">Province<span class="txt-danger">*</span></label>
                                    <select class="form-select" aria-label="Default select example" name="province">
                                        <option selected="">Select</option>
                                        <option value="Sindh">Sindh</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Balochistan">Balochistan</option>
                                        <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
                                        <option value="Azad Kashmir">Azad Kashmir</option>
                                        <option value="Gilgit Baltistan">Gilgit Baltistan</option>
                                      </select>
                                </div>
                                <div class="col-12 mt-3">
                                    <label class="col-sm-12 form-label" for="Address">Address<span class="txt-danger">*</span></label>
                                    <input class="form-control" id="Bar-License" name="lawyer_Address" type="text">
                                </div>
                                <div class="col-12 mt-3">
                                    <label class="col-sm-12 form-label" for="bar-License">Provisional Bar Council License<span class="txt-danger">*</span></label>
                                    <input class="form-control" id="bar-License" name="Bar_License" type="number">
                                </div>
                                <div class="col-12 mt-3">
                                <label class="col-sm-12 form-label" for="Court-Enrollment">Lower Court Enrollment No<span class="txt-danger">*</span></label>
                                <input class="form-control" id="Court-Enrollment" name="Court_Enrollment" type="number" >
                                </div>
                              </div>
                            </div>
                            <div>
                              <div class="text-end pt-4">
                                <button class="btn btn-secondary" id="prevBtn" type="button" onclick="nextPrev(-1)">Previous</button>
                                <button class="btn btn-primary" id="nextBtn" type="button" onclick="nextPrev(1)">Next</button>
                              </div>
                            </div>
                            <!-- Circles which indicates the steps of the form:-->
                            <div class="text-center"><span class="step"></span><span class="step"></span><span class="step"></span><span class="step"></span></div>
                            <p class="mt-4 mb-0 text-center text-secondary fw-semibold">Already have an account?<a class="ms-2 text-decoration-underline" href="{{ route("Lawyer_login") }}">Sign in</a></p>
                          </form>
                        </div>
                      </div>
                </div>
              </div>
            </div>
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
    <!-- latest jquery-->
    <script src="../assets/Dashboard/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/Dashboard/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/Dashboard/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/Dashboard/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    {{-- <script src="../assets/Dashboard/js/scrollbar/simplebar.js"></script> --}}
    {{-- <script src="../assets/Dashboard/js/scrollbar/custom.js"></script> --}}
    <!-- Sidebar jquery-->
    <script src="../assets/Dashboard/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/Dashboard/js/sidebar-menu.js"></script>
    {{-- <script src="../assets/Dashboard/js/sidebar-pin.js"></script> --}}
    <script src="../assets/Dashboard/js/slick/slick.min.js"></script>
    <script src="../assets/Dashboard/js/slick/slick.js"></script>
    <script src="../assets/Dashboard/js/header-slick.js"></script>
    <script src="../assets/Dashboard/js/form-wizard/form-wizard.js"></script>
    <script src="../assets/Dashboard/js/form-wizard/image-upload.js"></script>
    <script src="../assets/Dashboard/js/height-equal.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/Dashboard/js/script.js"></script>
    <!-- Plugin used-->
  </body>

<!-- Mirrored from admin.pixelstrap.net/zono/template/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2024 06:34:40 GMT -->
</html>