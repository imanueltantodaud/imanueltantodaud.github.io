@extends('layout')
@section('title', 'Courses for Individual')
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

    <!-- <section class="banner-individual">
      <div class="inner-wrapper">
        <div class="column column-1">
          <h1>Bridge your knowledge gap</h1>
          <h3>InAct builds skills with programs , subjects and courses</h3>

          <div class="start">
            <h2>Development starts here</h2>
            <form action="">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="what do you want to learn?">
                <div class="input-group-append">
                  <button class="btn" type="button"><i class="uil uil-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="column column-2">
          <img src="assets/images/individual.png" class="img-fluid">
        </div>
      </div>
    </section> --> 
    <section class="banner-individual">
      <div class="row mx-0">
        <div class="col-lg-3 col-md-3 col-sm-12 column-1">
        </div>
        <div class="col-lg-6 col-md-3 col-sm-12">
          <div class="inner-wrapper">
            <h1>Bridge Your Knowledge Gap</h1>
    
              <h2>Development starts here</h2>
              <form action="">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="what do you want to learn?" id="search-courses">
                  <div class="input-group-append">
                    <button class="btn" type="button"><i class="uil uil-search"></i></button>
                  </div>
                </div>
              </form>
    
              <h3>inAct builds skills with Programs, Subjects and Courses</h3>
    
              <!-- <img src="assets/images/left-image-course-indiviual-top-container.jpg" class="img-fluid w-100"> -->
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 column-3"></div>
      </div>
    </section>

    <section class="individual-tabs">
      <ul class="nav nav-pills" id="individual-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="coursess-tab" data-toggle="pill" href="#coursess" role="tab" aria-controls="coursess" aria-selected="false">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="subjects-tab" data-toggle="pill" href="#subjects" role="tab" aria-controls="subjects" aria-selected="false">Certificates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " id="programs-tab" data-toggle="pill" href="#programs" role="tab" aria-controls="programs" aria-selected="true">Programs</a>
        </li>
      </ul>
      <div class="tab-content" id="individual-tabContent">
        <div class="tab-pane fade blur-programs" id="programs" role="tabpanel" aria-labelledby="programs-tab">
          <div class="inner-w">
            <!-- <img src="assets/images/individual-a.gif" class="img-fluid gif-img">
            <h1>comming soon</h1> -->

            <div class="tabs-wrapper courses-tabs">
              <!-- <ul class="nav nav-pills individual-courses-tabs" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="popular-tab" data-toggle="pill" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Most popular programs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="trending-tab" data-toggle="pill" href="#trending" role="tab" aria-controls="trending" aria-selected="false">trending programs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="top-rated-tab" data-toggle="pill" href="#top-rated" role="tab" aria-controls="top-rated" aria-selected="false">top rated programs</a>
                </li>
              </ul> -->
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                  <div class="owl-carousel owl-theme courses-slider individual-courses">
                    
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <div class="comming-soon-container">
      
                            <div class="ribbonss">
                              <span class="ribbon3">Comming Soon</span>
                            </div>                      
                        </div>

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
                        <div class="comming-soon-container">
 
                            <div class="ribbonss">
                              <span class="ribbon3">Comming Soon</span>
                            </div>                           
                          </div>
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
                        <div class="comming-soon-container">
 
                            <div class="ribbonss">
                              <span class="ribbon3">Comming Soon</span>
                            </div>                           
                          </div>
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

                  </div>
                </div>
                <div class="tab-pane fade" id="trending" role="tabpanel" aria-labelledby="trending-tab">
                  <div class="owl-carousel owl-theme courses-slider individual-courses">
                    
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <div class="comming-soon-container">
 
                            <div class="ribbonss">
                              <span class="ribbon3">Comming Soon</span>
                            </div>                           
                          </div>
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
                        <div class="comming-soon-container">
 
                            <div class="ribbonss">
                              <span class="ribbon3">Comming Soon</span>
                            </div>                           
                          </div>
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
                        <div class="comming-soon-container">
 
                          <div class="ribbonss">
                              <span class="ribbon3">Comming Soon</span>
                            </div>                           
                          </div>
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

                  </div>
                </div>
                <div class="tab-pane fade" id="top-rated" role="tabpanel" aria-labelledby="top-rated-tab">
                  <div class="owl-carousel owl-theme courses-slider individual-courses">
                    
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <div class="comming-soon-container">
 
                            <div class="ribbonss">
                              <span class="ribbon3">Comming Soon</span>
                            </div>                          
                          </div>
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
                        <div class="comming-soon-container">
 
                            <div class="ribbonss">
                              <span class="ribbon3">Comming Soon</span>
                            </div>                           
                          </div>
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
                        <div class="comming-soon-container">
 
                            <div class="ribbonss">
                              <span class="ribbon3">Comming Soon</span>
                            </div>                          
                          </div>
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

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="tab-pane fade blur-subjects" id="subjects" role="tabpanel" aria-labelledby="subjects-tab">
          <div class="inner-w">
            <!-- <img src="assets/images/individual-a.gif" class="img-fluid gif-img">
            <h1>comming soon</h1> -->
            <div class="tabs-wrapper courses-tabs">
              <!-- <ul class="nav nav-pills individual-courses-tabs" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="popular-tab" data-toggle="pill" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Most popular Certificates</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="trending-tab" data-toggle="pill" href="#trending" role="tab" aria-controls="trending" aria-selected="false">trending Certificates</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="top-rated-tab" data-toggle="pill" href="#top-rated" role="tab" aria-controls="top-rated" aria-selected="false">top rated Certificates</a>
                </li>
              </ul> -->              
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                  <div class="owl-carousel owl-theme courses-slider individual-courses">
                    
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <div class="comming-soon-container">
                          <div class="ribbonss">
                              <span class="ribbon3">Comming Soon</span>
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
                          <div class="ribbonss">
                              <span class="ribbon3">Comming Soon</span>
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
                          <div class="ribbonss">
                              <span class="ribbon3">Comming Soon</span>
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
                          <div class="ribbonss">
                              <span class="ribbon3">Comming Soon</span>
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
                          <div class="ribbonss">
                              <span class="ribbon3">Comming Soon</span>
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
                          <div class="ribbonss">
                              <span class="ribbon3">Comming Soon</span>
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
                          <div class="ribbonss">
                              <span class="ribbon3">Comming Soon</span>
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
                          <div class="ribbonss">
                              <span class="ribbon3">Comming Soon</span>
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
                          <div class="ribbonss">
                              <span class="ribbon3">Comming Soon</span>
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

        <div class="tab-pane fade show active " id="coursess" role="tabpanel" aria-labelledby="coursess-tab">
          <div class="tabs-wrapper courses-tabs">
              <ul class="nav nav-pills individual-courses-tabs" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="popular-tab" data-toggle="pill" href="#popular-courses" role="tab" aria-controls="popular" aria-selected="true">Most popular courses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="trending-tab" data-toggle="pill" href="#trending-courses" role="tab" aria-controls="trending" aria-selected="false">trending courses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="top-rated-tab" data-toggle="pill" href="#top-rated-courses" role="tab" aria-controls="top-rated" aria-selected="false">top rated courses</a>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="popular-courses" role="tabpanel" aria-labelledby="popular-tab">
                  <div class="owl-carousel owl-theme courses-slider individual-courses">
                    
                    @foreach($courses as $course)
                      
                    <div class="item">
                      <div class="card">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                         <span class="tag">New</span>
                         <div class="card-body">
                          <h6 class="time"><i class="far fa-clock"></i> {{ date('d/m/Y', strtotime($course->created_at)) }}</h6>
                          <h4 class="card-heading">{{ $course->course_title }}</h4>
                          <p>{{ Str::limit($course->course_description, 150) }}</p>
                          <h6><i class="far fa-calendar-alt"></i> Duration: <span>{{ $course->course_duration }} Week</span></h6>
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
                          <a href="{{ route('CourseBreifNew', [$course->id]) }}" class="btn">See More</a>
                        </div>
                      </div>
                    </div>

                    @endforeach

                  </div>
                </div>
              </div>
            </div>          

        </div>
      </div>
    </section>

    <section class="our-partners">
      <div class="inner-wrapper">
        <div class="heading-w">
          <hr>
          <h4>our partners</h4>
        </div>

        <h3>Transformational teaching experience supported by</h3>

        <img src="assets/images/individual-a.gif" class="img-fluid gif-img">
        <h1>comming soon</h1>
      </div>
    </section>
    
  </main>
@endsection
