@extends('layout')
@section('title', 'Signin Signup')
@section('content')
<main>
    <div class="social-icons">
      <div class="icon facebook">
        <a href="#">
          <i class="fab fa-facebook-f"></i>
          <span class="icon-label">Facebook</span>
        </a>
      </div>
      <div class="icon instagram">
        <a href="#">
          <!-- <i class="fab fa-instagram"></i> -->
          <img src="assets/images/instagram-icon.png" style="width: 40px;">
          <span class="icon-label">Instagram</span>
        </a>
      </div>
      <div class="icon linkedin">
        <a href="#">
          <i class="fab fa-linkedin-in"></i>
          <span class="icon-label">Linkedin</span>
        </a>
      </div>
    </div>

    @include('chat-bot')

    <section class="join-wrapper">
      <div class="pills-wrappper">
        <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="signin-tab" data-toggle="pill" href="#signin" role="tab" aria-controls="signin" aria-selected="true">sign in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="signup-tab" data-toggle="pill" href="#signup" role="tab" aria-controls="signup" aria-selected="false">sign up</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
            <h5 class="sub-heading">Log in Using</h5>
            <div class="platform-box">
              <a href="#" class="btn"><img src="assets/images/google-icon.png" class="img-fluid"></a>
              <a href="#" class="btn"><img src="assets/images/facebook-icon.png" class="img-fluid"></a>
              <a href="#" class="btn"><img src="assets/images/microsoft-icon.png" class="img-fluid"></a>
              <a href="#" class="btn"><img src="assets/images/linkedin-icon.png" class="img-fluid"></a>
            </div>
            <hr>
            <h4>Or</h4>
            <h5 class="sub-heading">Log in With</h5>

            <form action="{{ route('UserLogin') }}" method="post">
              @csrf
              <input type="email" name="email" class="form-control mt-4" placeholder="E-mail" required>
              <input type="password" name="password" class="form-control" id="userpassword"  onclick="myFunctionuser()" placeholder="" required>
              <h5><a href="forgot-password.html">Forgort Password?</a></h5>

              <div class="terms">
                <label class="custom-checkbox">
                  <input type="checkbox" required>
                  <span class="checkmark"></span>
                </label>
                <p>
                  I Agree to inAct’s <a href="{{ route('PrivacyPolicy') }}">Terms & Conditions</a> and <a href="{{ route('PrivacyPolicy') }}">Privacy Policy</a> <br> 
                  and I agree to abide with the <a href="{{ route('PrivacyPolicy') }}">Code of Conduct</a>.
                </p>
              </div>
                @if(session()->has('request_error'))
                    <div class="col-md-12">
                        <div class="alert alert-danger mt-5">
                            {{ session('request_error') }}
                        </div>
                        {{ session()->forget('request_error') }}
                    </div>
                @elseif (session()->has('request_success') )
                    <div class="col-md-12">
                        <div class="alert alert-success alert-dismissible fade show mt-5"> 
                            <strong>Success! </strong> {{ session('request_success') }}
                            <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> -->
                        </div>
                        {{ session()->forget('request_success') }}
                    </div>
                @endif 
              <button type="submit" class="btn btn-block">Log in</button>
            </form>
          </div>


          <div class="tab-pane fade py-4" id="signup" role="tabpanel" aria-labelledby="signup-tab">
            <h5 class="sub-heading">Create An Account Using</h5>
            <div class="platform-box">
              <a href="#" class="btn"><img src="assets/images/google-icon.png" class="img-fluid"></a>
              <a href="#" class="btn"><img src="assets/images/facebook-icon.png" class="img-fluid"></a>
              <a href="#" class="btn"><img src="assets/images/microsoft-icon.png" class="img-fluid"></a>
              <a href="#" class="btn"><img src="assets/images/linkedin-icon.png" class="img-fluid"></a>
            </div>
            <hr>
            <h4>Or</h4>
            <h5 class="sub-heading">Create A New Account</h5>
          

            <form action="{{ route('Register') }}" method="post">
              @csrf
              <input type="text" class="form-control mt-4" name="first_name" placeholder="First Name" required>
              <input type="text" class="form-control mt-4" name="last_name" placeholder="Last Name" required>
              <small>This name will be used on any certificates that you earn.</small>
              <input type="email" class="form-control" name="email" placeholder="E-mail" required>
              <small>This is what you will use to login.</small>
              <input type="password" class="form-control my-0" name="password" id="password_signup"  onclick="myFunctionsignup()" placeholder="" required>
              <small>Your password must contain at least 8 characters, including 1 letter & 1 number.</small>
              <!-- <input type="text" class="form-control" name="country" placeholder="Country or Region of Residence" required> -->
              <select name="country" id="" class="form-control my-0" >
                @foreach($countries as $country)
                <option value="{{ $country->id }}">{{$country->name}}</option>
                @endforeach
              </select>
              <small>The Country or region where you live</small>

              <div class="terms mb-0">
                <label class="custom-checkbox">
                  <input type="checkbox" required>
                  <span class="checkmark"></span>
                </label>
                <h6>
                  Email Me About New Courses And <br> Recommendations
                </h6>
              </div>

              <div class="terms">
                <label class="custom-checkbox">
                  <input type="checkbox" required>
                  <span class="checkmark"></span>
                </label>
                <p>
                  I Agree to inAct’s <a href="{{ route('PrivacyPolicy') }}">Terms & Conditions</a> and <a href="{{ route('PrivacyPolicy') }}">Privacy Policy</a> <br> 
                  and I agree to abide with the <a href="{{ route('PrivacyPolicy') }}">Code of Conduct</a>.
                </p>
              </div>

              <button type="submit" class="btn btn-block">Create A New Account</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    
  </main>

  <script>

    function myFunctionsignup() {
        var x = document.getElementById("password_signup");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function myFunctionuser() {
        var x = document.getElementById("userpassword");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    
  </script>
  
@endsection
