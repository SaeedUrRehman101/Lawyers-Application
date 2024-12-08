<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.net/zono/template/sign-up-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2024 06:36:39 GMT -->
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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Dashboard/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Dashboard/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Dashboard/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Dashboard/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Dashboard/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Dashboard/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Dashboard/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('assets/Dashboard/css/color_1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Dashboard/css/responsive.css') }}">
  </head>
  <body>
    <!-- login page start-->
    <div class="container-fluid p-0"> 
      <div class="row m-0">
        <div class="col-xl-5 loggIn_Img"><img class="bg-img-cover bg-center" src="../assets/Dashboard/images/login/Lawyer-rafiki.png" alt="looginpage"></div>
        <div class="col-xl-7 p-0">
          <div class="login-card login-dark login-bg">
            <div>
              <div><a class="logo text-start" href="index.html"><img class="img-fluid for-light" src="../assets/Dashboard/images/logo/logo.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/Dashboard/images/logo/logo_dark.png" alt="looginpage"></a></div>
              <div class="login-main"> 
                <form class="theme-form" action="{{ route("SignUp") }}" method="post">
                  <h4>Create your account</h4>
                  <p>Enter your personal details to create account</p>
                  @csrf
                  <div class="form-group">
                    <label class="col-form-label">Your Name</label>
                    <input class="form-control" name="name" type="text" placeholder="Full Name">
                    @error("name")
                    <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Email Address</label>
                    <input class="form-control" type="email" name="email" placeholder="Test@gmail.com">
                    @error("email")
                    <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                    @enderror
                  </div>
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
                  <div class="form-group mb-0">
                    <button class="btn btn-primary btn-block w-100" type="submit">Create Account</button>
                  </div>
                  <p class="mt-4 mb-0 text-center">Already have an account?<a class="ms-2" href="{{ route("SignIn") }}">Sign in</a></p>
                </form>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

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

<!-- Mirrored from admin.pixelstrap.net/zono/template/sign-up-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2024 06:36:39 GMT -->
</html>