<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | InAct</title>
    <!-- App favicon -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->
    <link href="{{ URL::asset('assets/images/chat-icon.png') }}" type="image/png" rel="icon">
    <!-- Bootstrap Css -->
    <link href="{{ URL::asset('assets/admin-css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ URL::asset('assets/admin-css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ URL::asset('assets/admin-css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    @yield('head')
  </head>
  <body data-sidebar="dark">
    <div id="layout-wrapper">
      <header id="page-topbar">
        <div class="navbar-header">
          <div class="d-flex">
            <div class="navbar-brand-box">
              <a href="{{ route('home') }}" class="logo logo-dark">
                <span class="logo-sm">
                  <img src="{{ asset('assets/images/logo-white.png') }}" alt="" height="22">
                </span>
                <span class="logo-lg">
                  <img src="{{ asset('assets/images/logo-white.png') }}" alt="" height="17">
                </span>
              </a>
              <a href="{{ route('home') }}" class="logo logo-light">
                <span class="logo-sm">
                  <img src="{{ asset('assets/images/logo-white.png') }}" alt="" height="22">
                </span>
                <span class="logo-lg">
                  <img src="{{ asset('assets/images/logo-white.png') }}" alt="" height="60" style="margin-top: 10px;">
                </span>
              </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
              <i class="fa fa-fw fa-bars"></i>
            </button>
            
            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
              <div class="position-relative">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="bx bx-search-alt"></span>
              </div>
            </form>
          </div>
          
          <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ms-2">
              <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="mdi mdi-magnify"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                aria-labelledby="page-header-search-dropdown">
                <form class="p-3">
                  <div class="form-group m-0">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            
            <div class="dropdown d-inline-block" style="margin: 0 20px 0 0px;">
              <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/icon-user.png') }}">
                <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{ request()->user->first_name }} {{ request()->user->last_name }}</span>
                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end">
                <!-- Item -->
                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="{{ route('DashboardLogout') }}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
              </div>
            </div>
            
          </div>
        </div>
      </header>

      <!-- Dashboard Sidebar -->
      <div class="vertical-menu">
        <div data-simplebar class="h-100">
          <!--- Sidemenu -->
          <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
              <li class="menu-title" key="t-menu">Menu</li>
              <li>
                <a href="javascript: void(0);" class="waves-effect">
                  <span key="t-dashboards">Dashboards</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  
                </ul>
              </li>
              <!-- Courses -->
              <li>
                <a href="javascript: void(0);" class="waves-effect">
                  <span key="t-dashboards">Courses</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="{{ route('InstructorRequestCourseList') }}" key="t-saas">Requested Course</a></li>
                </ul>
              </li>
              <!-- Users -->
              <li>
                <a href="javascript: void(0);" class="waves-effect">
                  <span key="t-dashboards">Students</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="" key="t-saas">All Enrolled Students</a></li>
                </ul>
              </li>
              <!-- Quizes -->
              <li>
                <a href="javascript: void(0);" class="waves-effect">
                  <span key="t-dashboards">Quizzes/MCQ's</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                  <li><a href="{{ route('InstructorAddQuizQuestion') }}" key="t-default">Add Quiz Question</a></li>
                  <li><a href="{{ route('InstructorAddQuizOption') }}" key="t-saas">Add Quiz Option</a></li>
                  <li><a href="{{ route('InstructorQuizList') }}" key="t-saas">All Quizes</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /sidebar-menu -->
        </div>
        <!-- /data-simplebar -->
      </div>
      <!-- /vertical-menu -->
      
      @yield('content')
      
      <footer class="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <script>document.write(new Date().getFullYear())</script> © InAct.
            </div>
            <div class="col-sm-6">
              <div class="text-sm-end d-none d-sm-block">
                Designed & Developed by SourceIgnite
              </div>
            </div>
          </div>
        </div>
      </footer>
    
    </div>
    <!-- END layout-wrapper -->
    
    <!-- Right Sidebar -->
    <div class="right-bar">
      <div data-simplebar class="h-100">
        <div class="rightbar-title d-flex align-items-center px-3 py-4">
          <h5 class="m-0 me-2">Settings</h5>
          <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
            <i class="mdi mdi-close noti-icon"></i>
          </a>
        </div>
        
        <!-- Settings -->
        <hr class="mt-0" />
        <h6 class="text-center mb-0">Choose Layouts</h6>
        
        <div class="p-4">
          <div class="mb-2">
            <img src="assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images">
          </div>
          <div class="form-check form-switch mb-3">
            <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
            <label class="form-check-label" for="light-mode-switch">Light Mode</label>
          </div>
          
          <div class="mb-2">
            <img src="assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
          </div>
          <div class="form-check form-switch mb-3">
            <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
            <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
          </div>
          
          <div class="mb-2">
            <img src="assets/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images">
          </div>
          <div class="form-check form-switch mb-3">
            <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
            <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
          </div>
          
          <div class="mb-2">
            <img src="assets/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
          </div>
          <div class="form-check form-switch mb-5">
            <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
            <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
          </div>
        
        </div>
      </div>
      <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->
    
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    
    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
    
    <script src="{{ asset('assets/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-repeater.int.js') }}"></script>
    
    <script src="{{ asset('assets/libs/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-editor.init.js') }}"></script>
    
    <script src="{{asset('assets/js/sweetalert2@11.js')}}"></script>
    
    @yield('script')
    
    <script src="{{ asset('assets/js/app.js') }}"></script>
    
    <noscript>
      This browser doesn't support JavaScript.
      To get better experience, you may access using different browser(s).
    </noscript>
  </body>
</html>