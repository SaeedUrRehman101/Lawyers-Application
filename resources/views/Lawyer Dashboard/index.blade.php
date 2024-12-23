@extends("components.dashboard_layout")
@push("links")
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
    <link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/vendors/js-datatables/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/vendors/owlcarousel.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/Dashboard/css/color_1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/responsive.css">
@endpush
@section("titel")
@if (Auth::guard('lawyers')->check() && Auth::guard('lawyers')->user()->role == 'lawyer')
Default Dashboard
@else
Booked Appointments
@endif
@endsection
@section('content')
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row"> 
      <div class="col-sm-12"> 
        <div class="card"> 
          <div class="card-body">
            <div class="list-product-header">
              {{-- <div>
                @if (Auth::guard('lawyers')->check() && Auth::guard('lawyers')->user()->role == 'lawyer')
                <a class="btn btn-primary" href="add-products.html"><i class="fa fa-plus"></i>Add User</a>
                @endif
              </div> --}}
            </div>
            <div class="list-product">
              @if (Auth::guard('lawyers')->check() && Auth::guard('lawyers')->user()->role == 'lawyer')
              <table class="table" id="project-status">
                <thead> 
                  <tr> 
                    <th>
                      <div class="form-check"> 
                      </div>
                    </th>
                    <th> <span class="f-light f-w-600">User</span></th>
                    <th> <span class="f-light f-w-600">Email</span></th>
                    <th> <span class="f-light f-w-600">DOB</span></th>
                    <th> <span class="f-light f-w-600">Contact</span></th>
                    <th> <span class="f-light f-w-600">State</span></th>
                    <th> <span class="f-light f-w-600">Address</span></th>
                    <th> <span class="f-light f-w-600">Role</span></th>
                    <th> <span class="f-light f-w-600">Action</span></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($lawyerAppointments as $values)
                  <tr class="product-removes">
                    <td>
                      <p class="bg-dark-subtle text-dark text-center">{{ $values->id }}</p>
                    </td>
                    <td> 
                      <div class="product-names">
                        <div class="light-product-box">
                          <img class="img-fluid" src="{{ $values->image ? asset('assets/Dashboard/user_Images').'/'.$values->image : asset('assets/Dashboard/images/user/user.png') }}" alt="laptop">
                        </div>
                        <p>{{ $values->userName }}</p>
                      </div>
                    </td>
                    <td> 
                      <p class="">{{ $values->email }}</p>
                    </td>
                    <td> 
                      <p class="">{{ $values->dob }}</p>
                    </td>
                    <td> 
                      <p class="">{{ $values->contact }}</p>
                    </td>
                    <td> 
                      <p class="">{{ $values->states }}</p>
                    </td>
                    <td> 
                      <p class="">{{ $values->Address }}</p>
                    </td>
                    <td> 
                      <p class="">{{ $values->role }}</p>
                    </td>
                    <td> 
                      <div class="product-action"><a href="add-products.html"> 
                          <svg>    
                            <use href="assets/Dashboard/svg/icon-sprite.svg#edit-content"></use>
                          </svg></a>
                        <svg>
                          <use href="assets/Dashboard/svg/icon-sprite.svg#trash1"></use>
                        </svg>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
              @elseif (Auth::check() && Auth::user()->role == 'admin')
              <table class="table" id="project-status">
                <thead> 
                  <tr> 
                    <th>
                      <div class="form-check"> 
                      </div>
                    </th>
                    <th> <span class="f-light f-w-600">User</span></th>
                    <th> <span class="f-light f-w-600">Email</span></th>
                    <th> <span class="f-light f-w-600">DOB</span></th>
                    <th> <span class="f-light f-w-600">Contact</span></th>
                    <th> <span class="f-light f-w-600">State</span></th>
                    <th> <span class="f-light f-w-600">Address</span></th>
                    <th> <span class="f-light f-w-600">Role</span></th>
                    <th> <span class="f-light f-w-600">Action</span></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $values)
                  @if ($values->role == 'user')
                  <tr class="product-removes">
                    <td>
                      <p class="bg-dark-subtle text-dark text-center">{{ $values->id }}</p>
                    </td>
                    <td> 
                      <div class="product-names">
                        <div class="light-product-box">
                          <img class="img-fluid" src="{{ $values->image ? asset('assets/Dashboard/user_Images').'/'.$values->image : asset('assets/Dashboard/images/user/user.png') }}" alt="laptop">
                        </div>
                        <p>{{ $values->userName }}</p>
                      </div>
                    </td>
                    <td> 
                      <p class="">{{ $values->email }}</p>
                    </td>
                    <td> 
                      <p class="">{{ $values->dob }}</p>
                    </td>
                    <td> 
                      <p class="">{{ $values->contact }}</p>
                    </td>
                    <td> 
                      <p class="">{{ $values->states }}</p>
                    </td>
                    <td> 
                      <p class="">{{ $values->Address }}</p>
                    </td>
                    <td> 
                      <p class="">{{ $values->role }}</p>
                    </td>
                    <td> 
                      <div class="product-action"><a href="add-products.html"> 
                          <svg>    
                            <use href="assets/Dashboard/svg/icon-sprite.svg#edit-content"></use>
                          </svg></a>
                        <svg>
                          <use href="assets/Dashboard/svg/icon-sprite.svg#trash1"></use>
                        </svg>
                      </div>
                    </td>
                  </tr>
                  @endif
                  @endforeach
                </tbody>
              </table>
              @else
              <table class="table" id="project-status">
                <thead> 
                  <tr> 
                    <th>
                      <div class="form-check"> 
                      </div>
                    </th>
                    <th> <span class="f-light f-w-600">Lawyer</span></th>
                    <th> <span class="f-light f-w-600">Email</span></th>
                    <th> <span class="f-light f-w-600">Contact</span></th>
                    <th> <span class="f-light f-w-600">Address</span></th>
                    <th> <span class="f-light f-w-600">Slots</span></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($appointment as $booked)
                  <tr class="product-removes">
                      <td>
                          <div class="form-check"> 
                          </div>
                      </td>
                      <td>
                        @php
                            // Find the lawyer related to this appointment
                            $lawyer = $getLawyer->firstWhere('id', $booked->lawyerId);
                        @endphp
                        <div class="product-names">
                            <div class="light-product-box">
                                <img class="img-fluid" src="{{ asset('assets/Dashboard/Lawyer_Image/'.$lawyer->image) }}" alt="laptop">
                                {{-- <img class="img-fluid" src="assets/Dashboard/images/dashboard-8/product-categories/laptop.png" alt="laptop"> --}}
                            </div>
                            
                            <p>{{ $lawyer ? $lawyer->lawyerName : 'Lawyer not found' }}</p>
                        </div>
                      </td>
                      <td> 
                          <p class="f-light">{{ $lawyer->email }}</p>
                      </td>
                      <td> 
                          <p class="f-light">{{ $lawyer->contact }}</p>
                      </td>
                      <td> 
                          <p class="f-light">{{ $booked->service }}</p>
                      </td>
                      <td> 
                          <p class="f-light">{{ $booked->slots }}</p>
                      </td>
                  </tr>
                  @endforeach
              </tbody>              
              </table>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->



  @push("scripts")
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
  <script src="../assets/Dashboard/js/js-datatables/simple-datatables%40latest.js"></script>
  <script src="../assets/Dashboard/js/custom-list-product.js"></script>
  <script src="../assets/Dashboard/js/owlcarousel/owl.carousel.js"></script>
  <script src="../assets/Dashboard/js/ecommerce.js"></script>
  <script src="../assets/Dashboard/js/tooltip-init.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="../assets/Dashboard/js/script.js"></script>
  {{-- <script src="../assets/Dashboard/js/theme-customizer/customizer.js"></script> --}}
  @endpush

@endsection
        