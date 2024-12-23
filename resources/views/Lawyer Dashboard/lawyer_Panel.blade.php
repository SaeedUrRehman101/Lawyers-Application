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

<link rel="stylesheet" type="text/css" href="../assets/Dashboard/css/vendors/todo.css">
<!-- Plugins css Ends-->


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
                          <h6><i class="fa fa-envelope"></i>  Email</h6><span>{{ Auth::guard('lawyers')->user()->email }}</span>
                        @else
                          <h6><i class="fa fa-envelope"></i>  Email</h6><span>{{ Auth::user()->email }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="ttl-info text-start">
                        @if (Auth::guard('lawyers')->check() && Auth::guard('lawyers')->user())
                        <h6><i class="fa fa-calendar me-1"></i>Designation</h6><span class="mt-1">{{ Auth::guard('lawyers')->user() ? Auth::guard('lawyers')->user()->designation : "Add Designation" }}</span>
                        @elseif (Auth::check() && Auth::user())
                          <h6><i class="fa fa-calendar"></i>  BOD</h6><span>{{ Auth::user() ? Auth::user()->dob : "Add Your Date of Birth" }}</span>
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
  
  @if (Auth::guard('lawyers')->check() && Auth::guard('lawyers')->user()->role == 'lawyer')

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
                      <form class="row g-3 needs-validation" action="{{ route("lawyer_Details") }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <input type="hidden" name="lawyer_Id" value="{{ Auth::guard('lawyers')->user()->id }}">
                        <div class="col-xl-4 col-sm-6">
                          <label class="form-label" for="customFirstname">Full Name<span class="txt-danger">*</span></label>
                          @isset(Auth::guard("lawyers")->user()->lawyerName)
                              <input class="form-control mb-3" name="name" value="{{ Auth::guard("lawyers")->user()->lawyerName }}" id="customFirstname" type="text" placeholder="Enter first name">
                          @else
                          <input class="form-control mb-3" name="name" id="customFirstname" type="text" placeholder="Enter first name">
                          @endisset

                          @error("name")
                          <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="col-xl-4 col-sm-6">
                          <label class="col-xxl-3 box-col-12 text-start form-label">DOB<span class="txt-danger">*</span></label>
                          <div class="col-xxl-12 box-col-12">
                            <div class="input-group flatpicker-calender">
                              @isset(Auth::guard('lawyers')->user()->Lawyer_dob)
                              <input class="form-control mb-3" name="dob" value="{{ Auth::guard('lawyers')->user()->Lawyer_dob }}" id="customDob" type="date" placeholder="Enter Date of Birth" required>
                              @else
                              <input class="form-control mb-3" id="datetime-local" name="dob" type="date">
                              @endisset
                            </div>
                          </div>
                          @error("dob")
                          <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="col-xl-4 col-12">
                          <label class="form-label" for="customEmail">Email<span class="txt-danger">*</span></label>
                          <input class="form-control mb-3" id="customEmail" name="email" type="email" required="" value="{{ Auth::guard('lawyers')->user()->email }}" placeholder="Zono@example.com">
                          @error("email")
                          <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="col-sm-4">
                          <label class="form-label" for="customContact1">Contact<span class="txt-danger">*</span></label>
                          @isset(Auth::guard('lawyers')->user()->contact)
                          <input class="form-control mb-3" id="customContact1" type="number" value="{{ Auth::guard('lawyers')->user()->contact }}" name="contact" placeholder="Enter number" >
                          @else
                          <input class="form-control mb-3" id="customContact1" type="number" name="contact" placeholder="Enter number">
                          @endisset
                          @error("contact")
                          <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="col-xl-5 col-sm-4">
                          <label class="form-label" for="customState-wizard">Province<span class="txt-danger">*</span></label>
                          <select class="form-select mb-3" id="customState-wizard" name="province">
                            @isset(Auth::guard('lawyers')->user()->province)
                            <option value="Sindh" {{ Auth::guard('lawyers')->user()->province == 'Sindh' ? 'selected' : '' }}>Sindh</option>
                            <option value="Punjab" {{ Auth::guard('lawyers')->user()->province == 'Punjab' ? 'selected' : '' }}>Punjab</option>
                            <option value="Balochistan" {{ Auth::guard('lawyers')->user()->province == 'Balochistan' ? 'selected' : '' }}>Balochistan</option>
                            <option value="Khyber Pakhtunkhwa" {{ Auth::guard('lawyers')->user()->province == 'Khyber Pakhtunkhwa' ? 'selected' : '' }}>Khyber Pakhtunkhwa</option>
                            <option value="Azad Kashmir" {{ Auth::guard('lawyers')->user()->province == 'Azad Kashmir' ? 'selected' : '' }}>Azad Kashmir</option>
                            <option value="Gilgit Baltistan" {{ Auth::guard('lawyers')->user()->province == 'Gilgit Baltistan' ? 'selected' : '' }}>Gilgit Baltistan</option>
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
                          @error("province")
                          <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="col-xl-3 col-sm-4">
                          <label class="form-label" for="custom-address">Address<span class="txt-danger">*</span></label>
                          @isset(Auth::guard('lawyers')->user()->address)
                          <input class="form-control mb-3" id="custom-address" value="{{ Auth::guard('lawyers')->user()->address }}" type="text" name="address" placeholder="Enter Your Address">
                          @else
                          <input class="form-control mb-3" id="custom-address" type="text" name="address" placeholder="Enter Your Address">
                          @endisset
                          @error("address")
                          <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                          @enderror
                        </div>

                        <div class="col-6">
                          <label class="form-label" for="projectAreas">Practice Areas<span class="txt-danger">*</span></label>
                          <select class="form-select" aria-label="Default select example" name="areasId">
                            @if(!isset(Auth::guard("lawyers")->user()->areasId))
                            <option selected="" disabled="">Choose...</option>
                            @endif
                            @foreach ($firms as $values)
                              <option value="{{ $values->id }}" {{ Auth::guard("lawyers")->user()->areasId == $values->id ? 'selected' : '' }}>{{ $values->law_firm }}</option>
                            @endforeach
                              {{-- <option value="Advocate">Advocate</option>
                              <option value="Advocate High Court">Advocate High Court</option>
                              <option value="Advocate Supreme Court">Advocate Supreme Court</option>
                              <option value="Barrister" >Barrister</option>
                              <option value="Paralegal" >Paralegal</option> --}}
                            @error("areasId")
                            <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                            @enderror
                          </select>
                        </div>


                        {{-- <div class="col-sm-6"> --}}
                          @php
                            // $lawyerAreas = explode(',', Auth::guard("lawyers")->user()->areas);
                          @endphp
                          {{-- <div class="card-wrapper checkbox-checked">
                            <h6 class="sub-title">Practice Areas<span class="txt-danger">*</span></h6> --}}


                            {{-- <label class="d-block" for="chk-ani"></label>
                            <input class="checkbox_animated" id="chk-ani" name="areas[]" 
                            {{ isset($lawyerAreas) && in_array('Civil & Human Rights',$lawyerAreas) ? "checked" : '' }}
                            value="Civil & Human Rights" type="checkbox">Civil & Human Rights
                            <label class="d-block" for="chk-ani1"></label>
                            <input class="checkbox_animated" id="chk-ani1" name="areas[]"
                            {{ isset($lawyerAreas) && in_array('Criminal Defense',$lawyerAreas) ? "checked" : '' }}
                            value="Criminal Defense" type="checkbox">Criminal Defense
                            <label class="d-block" for="chk-ani2"></label>
                            <input class="checkbox_animated" id="chk-ani2" name="areas[]" 
                            {{ isset($lawyerAreas) && in_array('Accidents & Injuries',$lawyerAreas) ? "checked" : '' }}
                            value="Accidents & Injuries" type="checkbox">Accidents & Injuries
                            <label class="d-block" for="chk-ani4"></label>
                            <input class="checkbox_animated" id="chk-ani4" name="areas[]"
                            {{ isset($lawyerAreas) && in_array('Elder Law',$lawyerAreas) ? "checked" : '' }}
                            value="Elder Law" type="checkbox">Elder Law   --}}

                            {{-- ----------------------------------------- --}}

                            {{-- @foreach ($firms as $key => $values)
                                <label class="d-block" for="chk-ani-{{ $key }}">
                                    <input class="checkbox_animated" id="chk-ani-{{ $key }}" name="areasId[]" 
                                    {{ isset($lawyerAreas) && in_array("$values->law_firm", $lawyerAreas) ? "checked" : '' }}
                                    value="{{ $values->id }}" type="checkbox">
                                    {{ $values->law_firm }}
                                </label>
                            @endforeach --}}


                            {{-- ----------------------------------------- --}}
                          

                          {{-- </div>
                          @error("areasId")
                          <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                          @enderror
                        </div> --}}
                        <div class="col" bis_skin_checked="1">
                          <div bis_skin_checked="1">
                            <label class="form-label" for="custom-place">Working Place Areas<span class="txt-danger">*</span></label>
                            <textarea class="form-control input-air-primary" id="custom-place" name="working_Place" rows="6">
                              @isset(Auth::guard("lawyers")->user()->working_Place)
                              {{ Auth::guard("lawyers")->user()->working_Place }}
                              @endisset
                            </textarea>
                          </div>
                          @error("working_Place")
                          <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="col-6">
                          <label class="form-label" for="projectDescription">Designation<span class="txt-danger">*</span></label>
                          <select class="form-select" aria-label="Default select example" name="designation">
                            @isset(Auth::guard('lawyers')->user()->designation)
                              <option value="Advocate" {{ Auth::guard('lawyers')->user()->designation == 'Advocate' ? 'selected' : '' }} >Advocate</option>
                              <option value="Advocate High Court" {{ Auth::guard('lawyers')->user()->designation == 'Advocate High Court' ? 'selected' : '' }} >Advocate High Court</option>
                              <option value="Advocate Supreme Court" {{ Auth::guard('lawyers')->user()->designation == 'Advocate Supreme Court' ? 'selected' : '' }} >Advocate Supreme Court</option>
                              <option value="Barrister" {{ Auth::guard('lawyers')->user()->designation == 'Barrister' ? 'selected' : '' }} >Barrister</option>
                              <option value="Paralegal" {{ Auth::guard('lawyers')->user()->designation == 'Paralegal' ? 'selected' : '' }} >Paralegal</option>
                            @endisset
                            @error("designation")
                            <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                            @enderror
                          </select>
                        </div>
                        <div class="col-6">
                          <div bis_skin_checked="1">
                            <label class="form-label" for="custom-education">Education<span class="txt-danger">*</span></label>
                            @isset(Auth::guard('lawyers')->user()->education)
                            <textarea class="form-control input-air-primary" id="custom-education" name="education" placeholder="Your Education" rows="1">{{ Auth::guard('lawyers')->user()->education }}</textarea>
                            @else
                            <textarea class="form-control input-air-primary" id="custom-education" name="education" placeholder="Your Education" rows="1"></textarea>
                            @endisset
                          </div>
                          @error("education")
                          <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="col-xl-12 col-sm-4">
                          <label class="form-label" for="custom-experience">Experience<span class="txt-danger">*</span></label>
                          @isset(Auth::guard('lawyers')->user()->experience)
                          <input class="form-control mb-3" id="custom-experience" value="{{ Auth::guard('lawyers')->user()->experience }}" type="text" name="experience" placeholder="Your Experience in this filed">
                          @else
                          <input class="form-control mb-3" id="custom-experience" type="text" name="experience" placeholder="Your Experience in this filed">
                          @endisset
                          @error("experience")
                          <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                          @enderror
                        </div>
                        <div class="col-12">
                          <div class="mb-3 row"> 
                            <label class="form-label" for="custom-address">About<span class="txt-danger">*</span></label>
                            <div class="col-sm-12"> 
                              <div class="form-floating">
                                @isset(Auth::guard('lawyers')->user()->about)
                                <textarea class="form-control mb-3" id="floatingTextarea" name="about" placeholder="Leave a comment here">{{ Auth::guard('lawyers')->user()->about }}</textarea>
                                @else
                                <textarea class="form-control mb-3" id="floatingTextarea" name="about" placeholder="Leave a comment here"></textarea>
                                @endisset
                                <label for="floatingTextarea">Comments</label>
                              </div>
                              @error("about")
                              <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                              @enderror
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="mb-3">
                            <label class="form-label" for="formFileSimple">Profile Image<span class="txt-danger">*</span></label>
                            <input class="form-control px-4" name="image" id="formFileSimple" type="file">
                            @isset(Auth::guard('lawyers')->user()->image)
                            <img class="mt-2" src="{{ asset('assets/Dashboard/lawyer_Image/' . Auth::guard('lawyers')->user()->image) }}" width="90px" alt="">
                            @endisset
                          </div>
                          @error("image")
                          <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3">{{ $message }}</small>
                          @enderror
                        </div>

                        
                        <div class="col-xxl-9 col-xl-8 box-col-8">
                          <div class="card">
                            <div class="card-header b-bottom"> 
                              <div class="todo-list-header"> 
                                <div class="new-task-wrapper input-group">
                                  <input class="form-control m-0" type="datetime-local" value="2024-05-03T18:45:00" id="new-task" placeholder="Enter new task here. . .">
                                  <!-- End Time input -->
                                  <input class="form-control m-0" type="time" id="end-time" placeholder="Select end time...">
                                  <span class="btn btn-primary add-new-task-btn" id="add-task">Add Slots</span>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <div class="todo">
                                <div class="todo-list-wrapper custom-scrollbar">
                                  <div class="todo-list-container">
                                    <div class="todo-list-body">
                                      @php
                                        $raw_lawyer_Slots = explode(',', Auth::guard("lawyers")->user()->Lawyer_Slots);
                                        $lawyer_Slots = [];
                                        for ($i = 0; $i < count($raw_lawyer_Slots); $i += 3) {
                                            if (isset($raw_lawyer_Slots[$i+1]) && isset($raw_lawyer_Slots[$i+2])) {
                                                $lawyer_Slots[] = $raw_lawyer_Slots[$i] . ' ' . $raw_lawyer_Slots[$i+1] . ', ' . $raw_lawyer_Slots[$i+2];
                                            }
                                        }
                                      @endphp
                                      <ul id="todo-list">
                                        @if ( Auth::guard("lawyers")->user()->Lawyer_Slots)
                                        @foreach ($lawyer_Slots as $slot)
                                          <li class="task mb-4">
                                            <div class="task-container">
                                              <input class="task-label todoBorder"
                                                  value="{{ $slot }}" type="text" readonly />
                                              <div class="d-flex align-items-center gap-3">
                                                <span class="task-action-btn">
                                                  <span class="action-box large delete-btn" title="Delete Task">
                                                      <i class="fa fa-trash-o"></i>
                                                  </span>
                                                </span>
                                              </div>
                                            </div>
                                          </li>
                                          @endforeach
                                        @endif
                                      </ul>

                                    </div>
                                  </div>
                                </div>
                                <div class="notification-popup hide">
                                  <p><span class="task"></span><span class="notification-text"></span></p>
                                </div>
                              </div>
                              <script id="task-template" type="text/template">
                                <li class="task mb-4">
                                  <div class="task-container">
                                    <input class="task-label todoBorder" name="lawyer_Slots[]" type="text" readonly />
                                    <input class="task-end-time todoBorder" name="end_time[]" type="text" readonly />
                                    <div class="d-flex align-items-center gap-3">
                                      <span class="task-action-btn">
                                        <span class="action-box large delete-btn" title="Delete Task">
                                          <i class="fa fa-trash-o"></i>
                                        </span>
                                      </span>
                                    </div>
                                  </div>
                                </li>
                              </script>
                              @error("lawyer_Slots")
                              <small id="helpId" class="form-text text-danger bg-danger-subtle w-25 pe-4 ps-3 pb-2 pt-2 rounded-3 mt-3">{{ $message }}</small>
                              @enderror                         
                            </div>
                          </div>
                        </div>

                        {{-- <div class="col-xxl-9 col-xl-8 box-col-8">
                          <div class="card">
                            <div class="card-header b-bottom">
                              <div class="todo-list-header">
                                <div class="new-task-wrapper input-group">
                                  <!-- Start DateTime input -->
                                  <input class="form-control m-0" type="datetime-local" value="2024-05-03T18:45:00" id="new-task" placeholder="Enter new task here...">
                                  
                                  <!-- End Time input -->
                                  <input class="form-control m-0" type="time" id="end-time" placeholder="Select end time...">
                                  
                                  <span class="btn btn-primary add-new-task-btn" id="add-task">Add Slots</span>
                                </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <div class="todo">
                                <div class="todo-list-wrapper custom-scrollbar">
                                  <div class="todo-list-container">
                                    <div class="todo-list-body">
                                      <ul id="todo-list">
                                        <!-- Tasks will be added here -->
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <script id="task-template" type="text/template">
                                <li class="task mb-4">
                                  <div class="task-container">
                                    <input class="task-label todoBorder" name="lawyer_Slots[]" type="text" readonly />
                                    <input class="task-end-time todoBorder" name="end_time[]" type="text" readonly />
                                    <div class="d-flex align-items-center gap-3">
                                      <span class="task-action-btn">
                                        <span class="action-box large delete-btn" title="Delete Task">
                                          <i class="fa fa-trash-o"></i>
                                        </span>
                                      </span>
                                    </div>
                                  </div>
                                </li>
                              </script>
                            </div>
                          </div>
                        </div> --}}



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
  <script src="../assets/Dashboard/js/todo/todo.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="../assets/Dashboard/js/script.js"></script>
  {{-- <script src="../assets/Dashboard/js/theme-customizer/customizer.js"></script> --}}
  <!-- Plugin used-->

  






@endpush

@endsection
