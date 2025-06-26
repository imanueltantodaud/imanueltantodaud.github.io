@extends('layout')
@section('title', 'Profile')
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

    <section class="profile-section">
      <div class="custom-container">

        <div class="user-profile-header">
          <a href="#" class="profil-img">
            <img src="assets/images/icon-user.png" class="img-fluid">
            {{ request()->user->first_name }} {{ request()->user->last_name }}
          </a>
          <ul class="nav nav-pills profile-tabs" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#pills-courses">My Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-purchases">My Purchases</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-profile">Update Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pills-accomplishments">Accomplishments</a>
            </li>
          </ul>
          <a href="{{ route('DashboardLogout') }}" class="btn">Logout</a>
        </div>
        
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-courses">
            <div class="owl-carousel owl-theme my-courses-slider individual-courses">
              @foreach($enrolled_courses as $enrolled_course)
                
                <div class="item">
                <div class="card">
                  <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                   <span class="tag">{{ $enrolled_course->course_tags }}</span>
                   <div class="card-body">
                    <h6 class="time"><i class="far fa-clock"></i> {{ date('d/m/Y', strtotime($enrolled_course->created_at)) }}</h6>
                    <h4 class="card-heading">{{ $enrolled_course->course_title }}</h4>
                    <p>{{ Str::limit($enrolled_course->course_description, 150) }}</p>
                    <h6><i class="far fa-calendar-alt"></i> Duration: <span>{{ $enrolled_course->course_duration }} Week</span></h6>
                    <a href="{{ route('MainCourseNew', [$enrolled_course->id]) }}" class="btn">See More</a>
                  </div>
                  <div class="overlay">
                    <div class="custom-row">
                      <div class="col-1">
                        <h2>50%</h2>
                      </div>
                      <div class="col-2">
                        <p>50% of IT organizations stated that the employees who are aware off database principles are well connected to thhe company's mission and values</p>
                      </div>
                    </div>
                    <div class="custom-row">
                      <div class="col-1">
                        <h2>30%</h2>
                      </div>
                      <div class="col-2">
                        <p>30% of the employees applying the database knowledge help them to create a professional and smooth working environment.</p>
                      </div>
                    </div>
                    <a href="{{ route('MainCourseNew', [$enrolled_course->id]) }}" class="btn">See More</a>
                  </div>
                </div>
              </div>
              @endforeach
            

            </div>
          </div>
          <div class="tab-pane fade" id="pills-purchases">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th></th>
                    <th>Course Title</th>
                    <th><a href="#" class="btn">
                      <img src="assets/images/icon-filter1.png" class="img-fluid"> Date</a>
                    </th>
                    <th><a href="#" class="btn">
                      <img src="assets/images/icon-filter1.png" class="img-fluid"> Total Price</a>
                    </th>
                    <th><a href="#" class="btn">
                      <img src="assets/images/icon-filter1.png" class="img-fluid"> Payment Types</a>
                    </th>
                  </tr>
                </thead>
                <tbody>
                @foreach($enrolled_courses as $enrolled_course)
                  <tr>
                    <td>
                      <img src="assets/images/demo-course.PNG" class="img-fluid">
                    </td>
                    <td>{{ $enrolled_course->course_title }}</td>
                    <td>{{ date('d/m/Y', strtotime($enrolled_course->created_at)) }}</td>
                    <td>${{ $enrolled_course->course_price }}</td>
                    <td>{{ $enrolled_course->payment_method }}</td>
                    
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-profile">
            <div class="custom-row">
              <div class="column image-column">
                <div class="inner">
                  <div class="img-box">
                    <img src="assets/images/icon-user.png" class="img-fluid">
                  </div>
                  <h6>select an image file from your computer (6mb max)</h6>
                  <div class="buttons-wrapper">
                    <label> choose image
                      <input type="file">
                    </label> 
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
                </div>
              </div>
              <div class="column form-column">
                <div class="form-wrapper">
                  <form action="{{ route('UpdateDetails') }}" method="post">
                    @csrf
                    <fieldset class="fieldset-1">
                      <legend>User Settings</legend>
                      <div class="form-row">
                        <div class="col-sm-6 form-group">
                          <label for="">Firts name</label>
                          <input type="text" class="form-control" name="first_name" value="{{ request()->user->first_name }}">
                        </div>
                        <div class="col-sm-6 form-group">
                          <label for="">last name</label>
                          <input type="text" class="form-control" name="last_name" value="{{ request()->user->last_name }}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="">email</label>
                        <input type="email" class="form-control" name="email" value="{{ request()->user->email }}" readonly>
                      </div>
                      <div class="form-group">
                        <label for="">address</label>
                        <input type="text" class="form-control" name="addess" value="{{ request()->user->address }}">
                      </div>
                      <div class="form-group">
                        <label for="">country</label>
                        <select class="form-control" name="country">
                          @foreach($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name}}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="button-wrappers">
                        <button type="submit" class="btn">save settings</button>
                        <button type="button" class="btn">cancel</button>
                      </div>
                    </form>
                    </fieldset>                    
                    <fieldset class="fieldset-2">
                      <legend>Change password</legend>
                      <div class="form-group">
                        <label for="">current password</label>
                        <input type="password" class="form-control" value="">
                      </div>
                      <div class="form-group">
                        <label for="">change password</label>
                        <input type="password" class="form-control" value="">
                      </div>
                      <div class="form-group">
                        <label for="">confirm password</label>
                        <input type="password" class="form-control" value="">
                      </div>
                      <button class="btn">update</button>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-accomplishments">Here your certifications will be displayed.</div>
        </div>
      </div>
    </section>
    
  </main>

@endsection
