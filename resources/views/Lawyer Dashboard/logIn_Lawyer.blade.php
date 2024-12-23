<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.net/zono/template/login_one.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2024 06:36:38 GMT -->
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
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/Dashboard/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/responsive.css">
  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-5 loggIn_Img "><img class="bg-img-cover bg-center" src="../assets/Dashboard/images/login/lawyer.jpg" alt="looginpage"></div>
        <div class="col-xl-7 p-0">
          <div class="login-card login-dark login-bg">
            <div>
              <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light" src="/assets/lawyer/img/logo/header5-logo.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/Dashboard/images/logo/logo_dark.png" alt="looginpage"></a></div>
              <div class="login-main">
                <form class="theme-form" method="POST" action="{{ route("Lawyer_login") }}">
                  <h3>Sign in to account</h3>
                  <p>Enter your email & password to login</p>
                  @csrf
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control mb-3" value="{{ old("email") }}" type="email" name="email" placeholder="Test@gmail.com">
                    @error("email")
                    <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="projectDescription">Designation<span class="txt-danger">*</span></label>
                      <select class="form-select background-color mb-3" aria-label="Default select example" name="designation">
                        <option selected="">Select Designation</option>
                        <option value="Advocate">Advocate</option>
                        <option value="Advocate High Court">Advocate High Court</option>
                        <option value="Advocate Supreme Court">Advocate Supreme Court</option>
                        <option value="Barrister">Barrister</option>
                        <option value="Paralegal">Paralegal</option>
                      </select>
                      @error("designation")
                      <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <div class="form-input position-relative">
                      <input class="form-control mb-3" type="password" value="{{ old("password") }}" name="password" placeholder="*********">
                      @error("password")
                      <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group mb-0 mt-3">
                    <button class="btn btn-primary btn-block w-100" type="submit">Sign in</button>
                  </div>
                  <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2 text-decoration-underline" href="{{ route("Lawyer") }}">Create Account</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="../assets/Dashboard/js/jquery.min.js"></script>
      <!-- Bootstrap js-->
      <script src="../assets/Dashboard/js/bootstrap/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="../assets/Dashboard/js/icons/feather-icon/feather.min.js"></script>
      <script src="../assets/Dashboard/js/icons/feather-icon/feather-icon.js"></script>
      <!-- scrollbar js-->
      <!-- Sidebar jquery-->
      <script src="../assets/Dashboard/js/config.js"></script>
      <!-- Plugins JS start-->
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="../assets/Dashboard/js/script.js"></script>
      <!-- Plugin used-->
    </div>
  </body>

<!-- Mirrored from admin.pixelstrap.net/zono/template/login_one.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2024 06:36:39 GMT -->
</html>