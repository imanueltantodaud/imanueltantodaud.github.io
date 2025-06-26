<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/images/chat-icon.png')}}" type="image/png" rel="icon">
    <title>InAct</title>

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css?ver=7')}}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">

    <!-- jQuery Files -->
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.js')}}"></script>


    <!-- Fonts Icons -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.3/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.3/css/solid.css">

    <!-- AOS Animation -->
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
    <script src="{{asset('assets/js/aos.js')}}"></script>

</head>
<body>
  
  <header class="sticky-top">
    <nav class="navbar navbar-expand-lg py-3 py-lg-0">
      <a class="navbar-brand" href="{{route('home')}}"><img src="{{ asset('assets/images/logo.png') }}" class="img-fluid"></a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      
      <div class="collapse navbar-collapse mt-3 mt-lg-0" id="navbarSupportedContent">
        <form action="" class="ml-0 ml-lg-5">
          <div class="input-group special-input-group">
            <input type="text" class="form-control" placeholder="Explore inAct" aria-label="Explore inAct" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn" type="button"><i class="uil uil-search"></i></button>
            </div>
          </div>
        </form>
        <ul class="navbar-nav  my-3 ml-0 ml-lg-5">
          <li class="nav-item">
            <a href="{{ route('Blog') }}" class="nav-link">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="coursesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Courses
            </a>
            <div class="dropdown-menu" aria-labelledby="coursesDropdown">
              <a class="dropdown-item" href="{{ route('CoursesForIndividuals') }}">Courses for Individuals</a>
              <a class="dropdown-item" href="{{ route('CoursesForEnterprise') }}">Courses for Enterprises</a>
              <a class="dropdown-item" href="{{ route('TeachInInact') }}">Teach on InAct</a>
            </div>
          </li>
        </ul>
      </div>

      
      <div class="action-buttons">
        <!-- <div class="dropdown">
          <a class="btn" href="signin-signup.html" role="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle mr-2"></i> John Doe <i class="uil uil-angle-down drop-toggle-icon"></i>
          </a>
        
          <div class="dropdown-menu" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="signin-signup.html">Sign In</a>
            <a class="dropdown-item" href="signin-signup.html">Register</a>
          </div>
        </div> -->
        @if(request()->user)
          @if(request()->user->roll_type == 3)
            <!-- <div class="dropdown"> -->
              <a class="btn" href="{{ route('Profile') }}" role="button" id="userDropdown">
                <i class="fas fa-user-circle ii2 mr-2"></i> {{ request()->user->first_name }} {{ request()->user->last_name }}
              </a>
              <!-- </div> -->
              @else
              <div class="dropdown">
                <a class="btn" href="javascript: void(0);" role="button" id="userDropdown">
                  <i class="fas fa-user-circle ii2 mr-2"></i> {{ request()->user->first_name }} {{ request()->user->last_name }}
                </a>
              </div>
            @endif
        @else
          <a class="btn" href="{{ route('SigninSignup') }}" role="button" id="userDropdown">
            <i class="fas fa-user-circle mr-2"></i> </i>
          </a>
        @endif
        <div class="dropleft languge-dropdown">
          <button class="btn" type="button" id="langDropdown`" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="uil uil-globe"></i>
            <span class="english">en <img src="{{ asset('assets/images/lang-en.png') }}" class="img-fluid"></span>
            <span class="arabic d-none">ar <img src="{{ asset('assets/images/lang-egypt.png') }}" class="img-fluid"></span>
            <span class="egypt d-none">eg <img src="{{ asset('assets/images/lang-japanese.png') }}" class="img-fluid"></span>
          </button>
          <div class="dropdown-menu" aria-labelledby="langDropdown">
            <a class="dropdown-item" href="#" id="english"><img src="{{ asset('assets/images/lang-en.png') }}" class="img-fluid"> English</a>
            <a class="dropdown-item" href="#" id="arabic"><img src="{{ asset('assets/images/lang-egypt.png') }}" class="img-fluid"> Arabic</a>
            <a class="dropdown-item" href="#" id="egypt"><img src="{{ asset('assets/images/lang-japanese.png') }}" class="img-fluid"> Japanesen</a>
          </div>
        </div>
        <div class="dropleft">
          <button class="btn" type="button" id="optionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="uil uil-eye"></i>
          </button>
          <div class="dropdown-menu" aria-labelledby="optionDropdown">
            <a class="dropdown-item" href="#">Registration & Overview</a>
            <a class="dropdown-item" href="#">Enrollment & Payment</a>
            @if(request()->user)
              <a class="dropdown-item" href="{{ route('DashboardLogout') }}">Logout</a>
            @endif
            <!-- <a class="dropdown-item" href="#">InAct Payment</a>
            <a class="dropdown-item" href="#">InAct Overview</a> -->
          </div>
        </div>
      </div>
      
    </nav>
  </header>