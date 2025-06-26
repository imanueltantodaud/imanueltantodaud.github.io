@extends('layout')
@section('title', 'Home')
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

    <section class="banner">
      <div class="column column-content">
        <div class="heading">
          <h1>Build Your </h1>
          <div class="box">
            <ul>
              <li id="alternating" class="item-1">Skills</li>
              <li class="item-2">Passion</li>
              <li class="item-3">knowledge</li>
              <li class="item-4">Workforce</li>
            </ul>
          </div>
        </div>
        <h2>Unlock your potential by getting the right courses </h2>
        <form action="">
          <div class="input-group special-input-group">
            <input type="text" class="form-control" placeholder="Enter Email Addrress" aria-label="Enter Email Addrress" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn" type="button">Get Started</button>
            </div>
          </div>
        </form>
      </div>
      <div class="column column-img">
        
      </div>
    </section>

    <section class="why">
      <h1>Why InAct?</h1>

      <div class="owl-carousel owl-theme why-slider">
        <div class="item">
          <div class="card">
            <div class="card-body">
              <div class="img-box">
                <img src="assets/images/why-icon-4.png" class="img-fluid">
              </div>
            <h5>Earn <br> certificates</h5>
            <p>Boosting your professional creditability with in your network will help in enhancing your career paths getting ahead in a competitive global climate.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card">
            <div class="card-body">
              <div class="img-box">
                <img src="assets/images/why-icon-1.png" class="img-fluid">
              </div>
            <h5>Inspire <br> learners</h5>
            <p>Creating supportive learning climate that help learners establishing clear goals, discovering their interests and feeding your inner passion.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card">
            <div class="card-body">
              <div class="img-box">
                <img src="assets/images/why-icon-5.png" class="img-fluid">
              </div>
            <h5>Flexible ways <br> of learning</h5>
            <p>Achieving the intended learning outcomes through demonstrating your knowledge by providing a space to practice with quizzes and open response assessments.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card">
            <div class="card-body">
              <div class="img-box">
                <img src="assets/images/why-icon-2.png" class="img-fluid">
              </div>
            <h5>Comprehensive <br> curriculum</h5>
            <p>our dozen distinct learning features will  help you in applying your new capabilities , moving  your skills forward and arming with comprehensive deep knowledge.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card">
            <div class="card-body">
              <div class="img-box">
                <img src="assets/images/why-icon-3.png" class="img-fluid">
              </div>
            <h5>Practical <br> experience</h5>
            <p>The winning formula for success is the combination of practical experience with effortful learning, which enables you to create new value and discover career opportunities.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="courses">
      <div class="tabs-wrapper courses-tabs">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="popular-tab" data-toggle="pill" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Most popular courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="trending-tab" data-toggle="pill" href="#trending" role="tab" aria-controls="trending" aria-selected="false">trending courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="top-rated-tab" data-toggle="pill" href="#top-rated" role="tab" aria-controls="top-rated" aria-selected="false">top rated courses</a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
            <div class="owl-carousel owl-theme courses-slider">
              <div class="item">
                <div class="flip-card">
                  <div class="flip-card-inner">
                      <div class="card flip-card-front">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <div class="card-body">
                          <span class="tag">New</span>
                          <h4 class="card-heading">Advance HTML Expert</h4>
                          <h6>Duration: <span>3 Week</span></h6>
                          <a href="course-breif-new.html" class="btn">See More</a>
                        </div>
                      </div>
                      <div class="flip-card-back">
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
                          <a href="course-breif-new.html" class="btn">See More</a>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="flip-card">
                  <div class="flip-card-inner">
                      <div class="card flip-card-front">
                        <img src="assets/images/course-js.jpg" class="img-fluid card-img-top">
                        <div class="card-body">
                          <span class="tag">New</span>
                          <h4 class="card-heading">Advance JS Expert</h4>
                          <h6>Duration: <span>3 Week</span></h6>
                          <a href="course-breif-new.html" class="btn">See More</a>
                        </div>
                      </div>
                      <div class="flip-card-back">
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
                          <a href="course-breif-new.html" class="btn">See More</a>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="flip-card">
                  <div class="flip-card-inner">
                      <div class="card flip-card-front">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <div class="card-body">
                          <span class="tag">New</span>
                          <h4 class="card-heading">Advance HTML Expert</h4>
                          <h6>Duration: <span>3 Week</span></h6>
                          <a href="course-breif-new.html" class="btn">See More</a>
                        </div>
                      </div>
                      <div class="flip-card-back">
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
                          <a href="course-breif-new.html" class="btn">See More</a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="trending" role="tabpanel" aria-labelledby="trending-tab">
            <div class="owl-carousel owl-theme courses-slider">
              <div class="item">
                <div class="flip-card">
                  <div class="flip-card-inner">
                      <div class="card flip-card-front">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <div class="card-body">
                          <span class="tag">New</span>
                          <h4 class="card-heading">Advance HTML Expert</h4>
                          <h6>Duration: <span>3 Week</span></h6>
                          <a href="course-breif-new.html" class="btn">See More</a>
                        </div>
                      </div>
                      <div class="flip-card-back">
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
                          <a href="course-breif-new.html" class="btn">See More</a>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="flip-card">
                  <div class="flip-card-inner">
                      <div class="card flip-card-front">
                        <img src="assets/images/course-js.jpg" class="img-fluid card-img-top">
                        <div class="card-body">
                          <span class="tag">New</span>
                          <h4 class="card-heading">Advance JS Expert</h4>
                          <h6>Duration: <span>3 Week</span></h6>
                          <a href="course-breif-new.html" class="btn">See More</a>
                        </div>
                      </div>
                      <div class="flip-card-back">
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
                          <a href="course-breif-new.html" class="btn">See More</a>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="flip-card">
                  <div class="flip-card-inner">
                      <div class="card flip-card-front">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <div class="card-body">
                          <span class="tag">New</span>
                          <h4 class="card-heading">Advance HTML Expert</h4>
                          <h6>Duration: <span>3 Week</span></h6>
                          <a href="course-breif-new.html" class="btn">See More</a>
                        </div>
                      </div>
                      <div class="flip-card-back">
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
                          <a href="course-breif-new.html" class="btn">See More</a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="top-rated" role="tabpanel" aria-labelledby="top-rated-tab">
            <div class="owl-carousel owl-theme courses-slider">
              <div class="item">
                <div class="flip-card">
                  <div class="flip-card-inner">
                      <div class="card flip-card-front">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <div class="card-body">
                          <span class="tag">New</span>
                          <h4 class="card-heading">Advance HTML Expert</h4>
                          <h6>Duration: <span>3 Week</span></h6>
                          <a href="course-breif-new.html" class="btn">See More</a>
                        </div>
                      </div>
                      <div class="flip-card-back">
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
                          <a href="course-breif-new.html" class="btn">See More</a>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="flip-card">
                  <div class="flip-card-inner">
                      <div class="card flip-card-front">
                        <img src="assets/images/course-js.jpg" class="img-fluid card-img-top">
                        <div class="card-body">
                          <span class="tag">New</span>
                          <h4 class="card-heading">Advance JS Expert</h4>
                          <h6>Duration: <span>3 Week</span></h6>
                          <a href="#" class="btn">See More</a>
                        </div>
                      </div>
                      <div class="flip-card-back">
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
                          <a href="course-breif-new.html" class="btn">See More</a>
                      </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="flip-card">
                  <div class="flip-card-inner">
                      <div class="card flip-card-front">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <div class="card-body">
                          <span class="tag">New</span>
                          <h4 class="card-heading">Advance HTML Expert</h4>
                          <h6>Duration: <span>3 Week</span></h6>
                          <a href="course-breif-new.html" class="btn">See More</a>
                        </div>
                      </div>
                      <div class="flip-card-back">
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
                          <a href="course-breif-new.html" class="btn">See More</a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="individual-tabs">
      
      <div class="tab-content" id="individual-tabContent">
        <div class="tab-pane fade  show active" id="programs" role="tabpanel" aria-labelledby="programs-tab">
          <div class="inner-w" style="padding: 10px 0px;">
            <!-- <img src="assets/images/individual-a.gif" class="img-fluid gif-img">
            <h1>comming soon</h1> -->
            <div class="tabs-wrapper courses-tabs">
              <ul class="nav nav-pills individual-courses-tabs" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="popular-tab" data-toggle="pill" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Most popular Courses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="trending-tab" data-toggle="pill" href="#trending" role="tab" aria-controls="trending" aria-selected="false">trending Courses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="top-rated-tab" data-toggle="pill" href="#top-rated" role="tab" aria-controls="top-rated" aria-selected="false">top rated Courses</a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                  <div class="owl-carousel owl-theme courses-slider individual-courses">
                    
                  @foreach($popular_courses as $course)
                      
                      <div class="item">
                        <div class="card" style="padding-bottom">
                          <img src="{{ asset('assets/images/course-html-css.jpg') }}" class="img-fluid card-img-top">
                            <span class="tag">New</span>
                            <div class="card-body">
                            <h6 class="time"><i class="far fa-clock"></i> {{ date('d/m/Y', strtotime($course->created_at)) }}</h6>
                            <h4 class="card-heading">{{ $course->course_title }}</h4>
                            {{-- Static size, so we need (also) to set the maximum words allowed for course description, displayed here (can also use Laravel helper function Str::limit(string)) --}}
                            <div style="height:325px; overflow:hidden;">
                              <p>{{ $course->course_description }}</p>
                            </div>
                            <h6><i class="far fa-calendar-alt"></i> Duration: <span>{{ $course->course_duration }} Week</span></h6>
                            <a href="{{ route('CourseBreifNew', [$course->id]) }}" class="btn">See More</a>
                          </div>
                          <div class="overlay" style="display:none;">
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
                            <a href="{{ route('CourseBreifNew', [$course->id]) }}" class="btn">See More</a>
                          </div>
                        </div>
                      </div>
            
                    @endforeach

                  </div>
                </div>
                <div class="tab-pane fade" id="trending" role="tabpanel" aria-labelledby="trending-tab">
                  <div class="owl-carousel owl-theme courses-slider individual-courses">
                    
                  @foreach($trending_courses as $course)
                      
                      <div class="item">
                        <div class="card" style="padding-bottom">
                          <img src="{{ asset('assets/images/course-html-css.jpg') }}" class="img-fluid card-img-top">
                            <span class="tag">New</span>
                            <div class="card-body">
                            <h6 class="time"><i class="far fa-clock"></i> {{ date('d/m/Y', strtotime($course->created_at)) }}</h6>
                            <h4 class="card-heading">{{ $course->course_title }}</h4>
                            {{-- Static size, so we need (also) to set the maximum words allowed for course description, displayed here (can also use Laravel helper function Str::limit(string)) --}}
                            <div style="height:325px; overflow:hidden;">
                              <p>{{ $course->course_description }}</p>
                            </div>
                            <h6><i class="far fa-calendar-alt"></i> Duration: <span>{{ $course->course_duration }} Week</span></h6>
                            <a href="{{ route('CourseBreifNew', [$course->id]) }}" class="btn">See More</a>
                          </div>
                          <div class="overlay" style="display:none;">
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
                            <a href="{{ route('CourseBreifNew', [$course->id]) }}" class="btn">See More</a>
                          </div>
                        </div>
                      </div>
            
                    @endforeach

{{--
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <span class="tag">New</span>
                        <div class="card-body">
                          <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                          <h4 class="card-heading">Advance HTML Expert</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                          <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                          <a href="course-breif-new.html" class="btn">See More</a>
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
                          <a href="course-breif-new.html" class="btn">See More</a>
                        </div>
                      </div>
                    </div>
                    
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-js.jpg" class="img-fluid card-img-top">
                        <span class="tag">New</span>
                        <div class="card-body">
                          <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                          <h4 class="card-heading">Advance JS <br> Expert</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                          <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                          <a href="course-breif-new.html" class="btn">See More</a>
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
                          <a href="course-breif-new.html" class="btn">See More</a>
                        </div>
                      </div>
                    </div>
                    
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <span class="tag">New</span>
                        <div class="card-body">
                          <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                          <h4 class="card-heading">Advance HTML Expert</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                          <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                          <a href="course-breif-new.html" class="btn">See More</a>
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
                          <a href="course-breif-new.html" class="btn">See More</a>
                        </div>
                      </div>
                    </div>
--}}

                  </div>
                </div>
                <div class="tab-pane fade" id="top-rated" role="tabpanel" aria-labelledby="top-rated-tab">
                  <div class="owl-carousel owl-theme courses-slider individual-courses">
                    
                  @foreach($top_rated_courses as $course)
                      
                      <div class="item">
                        <div class="card" style="padding-bottom">
                          <img src="{{ asset('assets/images/course-html-css.jpg') }}" class="img-fluid card-img-top">
                            <span class="tag">New</span>
                            <div class="card-body">
                            <h6 class="time"><i class="far fa-clock"></i> {{ date('d/m/Y', strtotime($course->created_at)) }}</h6>
                            <h4 class="card-heading">{{ $course->course_title }}</h4>
                            {{-- Static size, so we need (also) to set the maximum words allowed for course description, displayed here (can also use Laravel helper function Str::limit(string)) --}}
                            <div style="height:325px; overflow:hidden;">
                              <p>{{ $course->course_description }}</p>
                            </div>
                            <h6><i class="far fa-calendar-alt"></i> Duration: <span>{{ $course->course_duration }} Week</span></h6>
                            <a href="{{ route('CourseBreifNew', [$course->id]) }}" class="btn">See More</a>
                          </div>
                          <div class="overlay" style="display:none;">
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
                            <a href="{{ route('CourseBreifNew', [$course->id]) }}" class="btn">See More</a>
                          </div>
                        </div>
                      </div>
            
                    @endforeach

{{--
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <span class="tag">New</span>
                        <div class="card-body">
                          <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                          <h4 class="card-heading">Advance HTML Expert</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                          <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                          <a href="course-breif-new.html" class="btn">See More</a>
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
                          <a href="course-breif-new.html" class="btn">See More</a>
                        </div>
                      </div>
                    </div>
                    
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-js.jpg" class="img-fluid card-img-top">
                        <span class="tag">New</span>
                        <div class="card-body">
                          <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                          <h4 class="card-heading">Advance JS <br> Expert</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                          <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                          <a href="course-breif-new.html" class="btn">See More</a>
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
                          <a href="course-breif-new.html" class="btn">See More</a>
                        </div>
                      </div>
                    </div>
                    
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <span class="tag">New</span>
                        <div class="card-body">
                          <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                          <h4 class="card-heading">Advance HTML Expert</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                          <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                          <a href="course-breif-new.html" class="btn">See More</a>
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
                          <a href="course-breif-new.html" class="btn">See More</a>
                        </div>
                      </div>
                    </div>
--}}

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade" id="subjects" role="tabpanel" aria-labelledby="subjects-tab">
          <div class="inner-w">
            <!-- <img src="assets/images/individual-a.gif" class="img-fluid gif-img">
            <h1>comming soon</h1> -->
            <div class="tabs-wrapper courses-tabs">
              <ul class="nav nav-pills individual-courses-tabs" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="popular-tab" data-toggle="pill" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Most popular Certificates</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="trending-tab" data-toggle="pill" href="#trending" role="tab" aria-controls="trending" aria-selected="false">trending Certificates</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="top-rated-tab" data-toggle="pill" href="#top-rated" role="tab" aria-controls="top-rated" aria-selected="false">top rated Certificates</a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                  <div class="owl-carousel owl-theme courses-slider individual-courses">
                    
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <div class="comming-soon-container">
                          <div class="ribbon">
                             <strong class="ribbon-content">Comming Soon</strong>
                          </div>
                        </div>
                        <div class="card-body">
                          <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                          <h4 class="card-heading">Advance HTML Expert</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                          <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                          <a href="#" class="btn">See More</a>
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
                          <a href="#" class="btn">See More</a>
                        </div>
                      </div>
                    </div>
                    
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-js.jpg" class="img-fluid card-img-top">
                        <div class="comming-soon-container">
                          <div class="ribbon">
                             <strong class="ribbon-content">Comming Soon</strong>
                          </div>
                        </div>
                        <div class="card-body">
                          <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                          <h4 class="card-heading">Advance JS <br> Expert</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                          <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                          <a href="#" class="btn">See More</a>
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
                          <a href="#" class="btn">See More</a>
                        </div>
                      </div>
                    </div>
                    
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <div class="comming-soon-container">
                          <div class="ribbon">
                             <strong class="ribbon-content">Comming Soon</strong>
                          </div>
                        </div>
                        <div class="card-body">
                          <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                          <h4 class="card-heading">Advance HTML Expert</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                          <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                          <a href="#" class="btn">See More</a>
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
                          <a href="#" class="btn">See More</a>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="tab-pane fade" id="trending" role="tabpanel" aria-labelledby="trending-tab">
                  <div class="owl-carousel owl-theme courses-slider individual-courses">
                    
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <div class="comming-soon-container">
                          <div class="ribbon">
                             <strong class="ribbon-content">Comming Soon</strong>
                          </div>
                        </div>
                        <div class="card-body">
                          <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                          <h4 class="card-heading">Advance HTML Expert</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                          <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                          <a href="#" class="btn">See More</a>
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
                          <a href="#" class="btn">See More</a>
                        </div>
                      </div>
                    </div>
                    
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-js.jpg" class="img-fluid card-img-top">
                        <div class="comming-soon-container">
                          <div class="ribbon">
                             <strong class="ribbon-content">Comming Soon</strong>
                          </div>
                        </div>
                        <div class="card-body">
                          <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                          <h4 class="card-heading">Advance JS <br> Expert</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                          <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                          <a href="#" class="btn">See More</a>
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
                          <a href="#" class="btn">See More</a>
                        </div>
                      </div>
                    </div>
                    
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <div class="comming-soon-container">
                          <div class="ribbon">
                             <strong class="ribbon-content">Comming Soon</strong>
                          </div>
                        </div>
                        <div class="card-body">
                          <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                          <h4 class="card-heading">Advance HTML Expert</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                          <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                          <a href="#" class="btn">See More</a>
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
                          <a href="#" class="btn">See More</a>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="tab-pane fade" id="top-rated" role="tabpanel" aria-labelledby="top-rated-tab">
                  <div class="owl-carousel owl-theme courses-slider individual-courses">
                    
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <div class="comming-soon-container">
                          <div class="ribbon">
                             <strong class="ribbon-content">Comming Soon</strong>
                          </div>
                        </div>
                        <div class="card-body">
                          <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                          <h4 class="card-heading">Advance HTML Expert</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                          <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                          <a href="#" class="btn">See More</a>
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
                          <a href="#" class="btn">See More</a>
                        </div>
                      </div>
                    </div>
                    
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-js.jpg" class="img-fluid card-img-top">
                        <div class="comming-soon-container">
                          <div class="ribbon">
                             <strong class="ribbon-content">Comming Soon</strong>
                          </div>
                        </div>
                        <div class="card-body">
                          <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                          <h4 class="card-heading">Advance JS <br> Expert</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                          <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                          <a href="#" class="btn">See More</a>
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
                          <a href="#" class="btn">See More</a>
                        </div>
                      </div>
                    </div>
                    
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <div class="comming-soon-container">
                          <div class="ribbon">
                             <strong class="ribbon-content">Comming Soon</strong>
                          </div>
                        </div>
                        <div class="card-body">
                          <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                          <h4 class="card-heading">Advance HTML Expert</h4>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                          <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                          <a href="#" class="btn">See More</a>
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
                          <a href="#" class="btn">See More</a>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="tab-pane fade`" id="coursess" role="tabpanel" aria-labelledby="coursess-tab">
          <div class="tabs-wrapper courses-tabs">
            <ul class="nav nav-pills individual-courses-tabs" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="popular-tab" data-toggle="pill" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Most popular courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="trending-tab" data-toggle="pill" href="#trending" role="tab" aria-controls="trending" aria-selected="false">trending courses</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="top-rated-tab" data-toggle="pill" href="#top-rated" role="tab" aria-controls="top-rated" aria-selected="false">top rated courses</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                <div class="owl-carousel owl-theme courses-slider individual-courses">
                  
                  <div class="item">
                    <div class="card">
                      <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                      <div class="comming-soon-container">
                          <div class="ribbon">
                             <strong class="ribbon-content">Comming Soon</strong>
                          </div>
                        </div>
                      <div class="card-body">
                        <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                        <h4 class="card-heading">Advance HTML Expert</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                        <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                        <a href="#" class="btn">See More</a>
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
                        <a href="#" class="btn">See More</a>
                      </div>
                    </div>
                  </div>
                  
                  <div class="item">
                    <div class="card">
                      <img src="assets/images/course-js.jpg" class="img-fluid card-img-top">
                      <div class="comming-soon-container">
                          <div class="ribbon">
                             <strong class="ribbon-content">Comming Soon</strong>
                          </div>
                        </div>
                      <div class="card-body">
                        <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                        <h4 class="card-heading">Advance JS <br> Expert</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                        <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                        <a href="#" class="btn">See More</a>
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
                        <a href="#" class="btn">See More</a>
                      </div>
                    </div>
                  </div>
                  
                  <div class="item">
                    <div class="card">
                      <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                      <div class="comming-soon-container">
                          <div class="ribbon">
                             <strong class="ribbon-content">Comming Soon</strong>
                          </div>
                        </div>
                      <div class="card-body">
                        <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                        <h4 class="card-heading">Advance HTML Expert</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                        <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                        <a href="#" class="btn">See More</a>
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
                        <a href="#" class="btn">See More</a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="tab-pane fade" id="trending" role="tabpanel" aria-labelledby="trending-tab">
                <div class="owl-carousel owl-theme courses-slider individual-courses">
                  
                  <div class="item">
                    <div class="card">
                      <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                      <div class="comming-soon-container">
                          <div class="ribbon">
                             <strong class="ribbon-content">Comming Soon</strong>
                          </div>
                        </div>
                      <div class="card-body">
                        <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                        <h4 class="card-heading">Advance HTML Expert</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                        <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                        <a href="#" class="btn">See More</a>
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
                        <a href="#" class="btn">See More</a>
                      </div>
                    </div>
                  </div>
                  
                  <div class="item">
                    <div class="card">
                      <img src="assets/images/course-js.jpg" class="img-fluid card-img-top">
                      <div class="comming-soon-container">
                          <div class="ribbon">
                             <strong class="ribbon-content">Comming Soon</strong>
                          </div>
                        </div>
                      <div class="card-body">
                        <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                        <h4 class="card-heading">Advance JS <br> Expert</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                        <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                        <a href="#" class="btn">See More</a>
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
                        <a href="#" class="btn">See More</a>
                      </div>
                    </div>
                  </div>
                  
                  <div class="item">
                    <div class="card">
                      <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                      <div class="comming-soon-container">
                          <div class="ribbon">
                             <strong class="ribbon-content">Comming Soon</strong>
                          </div>
                        </div>
                      <div class="card-body">
                        <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                        <h4 class="card-heading">Advance HTML Expert</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                        <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                        <a href="#" class="btn">See More</a>
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
                        <a href="#" class="btn">See More</a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="tab-pane fade" id="top-rated" role="tabpanel" aria-labelledby="top-rated-tab">
                <div class="owl-carousel owl-theme courses-slider individual-courses">
                  
                  <div class="item">
                    <div class="card">
                      <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                      <div class="comming-soon-container">
                          <div class="ribbon">
                             <strong class="ribbon-content">Comming Soon</strong>
                          </div>
                        </div>
                      <div class="card-body">
                        <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                        <h4 class="card-heading">Advance HTML Expert</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                        <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                        <a href="#" class="btn">See More</a>
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
                        <a href="#" class="btn">See More</a>
                      </div>
                    </div>
                  </div>
                  
                  <div class="item">
                    <div class="card">
                      <img src="assets/images/course-js.jpg" class="img-fluid card-img-top">
                      <div class="comming-soon-container">
                          <div class="ribbon">
                             <strong class="ribbon-content">Comming Soon</strong>
                          </div>
                        </div>
                      <div class="card-body">
                        <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                        <h4 class="card-heading">Advance JS <br> Expert</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                        <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                        <a href="#" class="btn">See More</a>
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
                        <a href="#" class="btn">See More</a>
                      </div>
                    </div>
                  </div>
                  
                  <div class="item">
                    <div class="card">
                      <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                      <div class="comming-soon-container">
                          <div class="ribbon">
                             <strong class="ribbon-content">Comming Soon</strong>
                          </div>
                        </div>
                      <div class="card-body">
                        <h6 class="time"><i class="far fa-clock"></i> 24/07/2021</h6>
                        <h4 class="card-heading">Advance HTML Expert</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis veritatis aliquid quaerat.</p>
                        <h6><i class="far fa-calendar-alt"></i> Duration: <span>3 Week</span></h6>
                        <a href="#" class="btn">See More</a>
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
                        <a href="#" class="btn">See More</a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sponsor">
      <h4>
        Join the movement <br>
        Expand your career opportunities by following the Top world companies 
      </h4>

      <div class="owl-carousel owl-theme sponsor-slider">
        <div class="item">
          <a href="https://careers.vodafone.com/">
            <img src="assets/images/sp-vodafone.png" class="img-fluid">
          </a>
        </div>
        <div class="item">
          <a href="https://www.unilever.com/careers/">
            <img src="assets/images/sp-Unilever.png" class="img-fluid">
          </a>
        </div>
        <div class="item">
          <a href="https://www.pwc.com/m1/en/careers.html">
            <img src="assets/images/sp-PWC.png" class="img-fluid">
          </a>
        </div>
        <div class="item">
          <a href="https://www.pepsicojobs.com/main/">
            <img src="assets/images/sp-Peoisco.png" class="img-fluid">
          </a>
        </div>
        <div class="item">
          <a href="https://home.kpmg/eg/en/home/careers/strategy-careers-overview.html">
            <img src="assets/images/sp-kmpg.png" class="img-fluid">
          </a>
        </div>
        <div class="item">
          <a href="https://www.ey.com/en_gl/careers">
            <img src="assets/images/sp-ernst-young-logo.png" class="img-fluid">
          </a>
        </div>
        <div class="item">
          <a href="https://www.imanet.org/career-resources?ssopc=1">
            <img src="assets/images/sp-ima.png" class="img-fluid">
          </a>
        </div>
        <div class="item">
          <a href="https://www.isaca.org/training-and-events/careers-home">
            <img src="assets/images/sp-ISACA.png" class="img-fluid">
          </a>
        </div>
        <div class="item">
          <a href="https://www.oracle.com/in/corporate/careers/">
            <img src="assets/images/sp-oracle.png" class="img-fluid">
          </a>
        </div>
        <div class="item">
          <a href="https://www.pgcareers.com/">
            <img src="assets/images/sp-PG.png" class="img-fluid">
          </a>
        </div>
        <div class="item">
          <a href="https://www.sap.com/about/careers.html">
            <img src="assets/images/sp-sap.png" class="img-fluid">
          </a>
        </div>
        <div class="item">
          <a href="https://www2.deloitte.com/global/en/careers/job-search.html">
            <img src="assets/images/sp-Deliotte.png" class="img-fluid">
          </a>
        </div>
        <div class="item">
          <a href="https://www.allianz.com.eg/en_GB/careers/Job-Opportunities.html">
            <img src="assets/images/sp-Allianz.png" class="img-fluid">
          </a>
        </div>
        <div class="item">
          <a href="https://jobs.accaglobal.com/jobs/">
            <img src="assets/images/sp-ACCA.png" class="img-fluid">
          </a>
        </div>
      </div>
    </section>

    <section class="suggestion">
      <h4>We are curious about your suggestions and recommendations to create better experience and best contribution in the future</h4>
      <a href="#" class="btn" data-toggle="modal" data-target="#suggestionPopup">Submit</a>

      <!-- Modal -->
      <div class="modal fade" id="suggestionPopup" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <img src="assets/images/logo.png" class="img-fluid">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fas fa-times"></i>
              </button>
            </div>
            <div class="modal-body px-3 px-sm-4">
              <form action="">
                <div class="form-group">
                  <label for="name" class="sr-only">Name</label>
                  <input type="text" class="form-control" placeholder="Name" required name="name" id="name">
                </div>
                <div class="form-group">
                  <label for="email" class="sr-only">Email</label>
                  <input type="email" class="form-control" placeholder="E-mail" required name="email" id="email">
                </div>
                <div class="form-group">
                  <label for="mobileNumber" class="sr-only">Mobile Number</label>
                  <input type="tel" class="form-control" placeholder="Mobile Number" required name="mobileNumber" id="mobileNumber">
                </div>
                <div class="form-group">
                  <label for="suggestion" class="sr-only">Your Message</label>
                  <textarea name="suggestion" id="suggestion" class="form-control" placeholder="Your requests & suggestions"></textarea>
                </div>
                <input type="submit" value="submit">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="our-mission">
      <div class="slider-wrapper">
        <div class="overlay">
          <div class="heading"></div>
          <div class="owl-carousel owl-theme mission-slider">
            <div class="item">
              <h1>inAct Mission</h1>
              <ul>
                <li>Our academic team serves the community, by providing the training, research & flexible support services. Through creative problem solving and collaboration, we provide an environment for growth in teaching and learning in an effort to best support our students, instructors and staff.</li>
                <li>We empower individuality with adaptable and supportive learning models that meets students where they are and ignite their passion, knowledge, skills and character for lifelong growth and positive impact.</li>
              </ul>
              <a href="{{ route('About') }}" class="btn">See More</a>
            </div>
            <div class="item">
              <h1>About inAct</h1>
              <ul>
                <li>
                  Online earning allows inAct students to pursue their educational requiremtnts outside of the traditional
                   classroom setting can accelerate or enhance  their time to degree. inAct's online courses are especially 
                   important toGraduate students who are working  professional seeking an advanced degree in theiir fields. 
                   Undergraduate students who cannot attend on site classes because of work or family obligations. An additional 
                   to equally important benifit of online  learning is that it helps students develope academic skills and
                   online learning strategies they need to pursue their future educational and professional goals.
                </li>
              </ul>
              <a href="{{ route('About') }}" class="btn">See More</a>
            </div>
            <div class="item">
              <h1>inAct Vision</h1>
              <ul>
                <li>We believe students will become productive citizens when they are challenged and mentored in leadership, problem solving and critical thinking skills. Our students centered education includes the following:-</li>
                <li>Onilne learning environment that prepars them for advanced education options, future employment and professional education.</li>
                <li>Students complete meaningful projects and solve challenging problems while interming in expectations, standards and knowledge.</li>
              </ul>
              <a href="{{ route('About') }}" class="btn">See More</a>
            </div>
            <div class="item">
              <h1>inAct Core Values</h1>
              <ul>
                <li>Innovation: We will not be constrained by what already exists but will lead in introducing new ways;</li>
                <li>Inspiration: Inspire learners to explore their interests, gain new skills and advance their career.</li>
                <li>Transformation: The transformative power of education is what will let you changemaker.</li>
              </ul>
              <a href="{{ route('About') }}" class="btn">See More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  
  @endsection
