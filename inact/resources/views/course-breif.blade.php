@extends('layout')
@section('title', 'Course Brief')
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
        <!-- <a href="#">
          <i class="fab fa-instagram"></i>
          <span class="icon-label">Instagram</span>
        </a> -->
        <img src="assets/images/instagram-icon.png" style="width: 40px;">
      </div>
      <div class="icon linkedin">
        <a href="#">
          <i class="fab fa-linkedin-in"></i>
          <span class="icon-label">Linkedin</span>
        </a>
      </div>
    </div>

    @include('chat-bot')
    
<section class="main-heading">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Success Takes Preparation</h2>
      </div>
    </div>
  </div>
</section>
    <section class="workforce workforcebreif">
      <div class="custom-row row-1">
        <div class="overlay">
          <div class="inner-wrapper">
            <div class="column">
              <div class="heading">
                <h1>The Complete Digital Finance Marketing Course</h1>
                
              </div>
              <p>Master Digital Marketing: Strategy, Social Media Marketing, SEO, YouTube,
Email, Facebook Marketing, Analytics & More!Lorem Ipsum is simply 
dummy text of the printing and typesetting
 industry.</p>
 <p>Instructor : <span>Mark Hardson</span></p>
 <p class="last">Last updated 2 July, 2019</p>
            </div>
            <div class="column">
            <div class="form-wrapper-coursebreif">
              <div>
                <img src="assets/images/course-js.jpg" class="img-fluid">
                <i class="far fa-play-circle"></i>
              </div>
              <p><i class="fas fa-ribbon"></i> Course Price : <span>$100</span></p>
              <button type="button" class="btn">Enroll for individuals</button>
            </div>
          </div>

          </div>
        </div>
      </div>

       <div class="container">
         <div class="row">
              <div class="col-md-3">
                <div class="duration-box">
                 <i class="far fa-clock"></i> <span>Duration: <br>3 weeks</span>
                </div>
              </div>
              <div class="col-md-4">
                 <div class="duration-box">
                 <i class="fas fa-redo-alt"></i> <span>Weekle study: <br>3 hours</span>
                </div>
              </div>
              <div class="col-md-5">
                 <div class="duration-box">
                <i class="fas fa-wifi"></i> <span>100% Online: <br>Learn on your peace</span>
                </div>
              </div>
            </div>
       </div>


      <div class="custom-row row-2">
        <div class="inner-wrapper">
          <div class="column">
           
            <h2>OVERVIEW</h2>

      <div class="content">

        <div id="accordion" class="coursebreifaccordain">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 Description<i class="fas fa-chevron-down"></i>
                </button>
              </h5>
            </div>
        
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <p>
                  Lorem Ipsum is simply dummy text of the printing 
and typesetting industry. Lorem Ipsum has been the 
industry's standard dummy text ever since the 1500s, 
when an unknown printer took a galley of type and 
scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into 
electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of 
Lorem Ipsum
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Sallybus <i class="fas fa-chevron-down"></i>
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                <p>Lorem Ipsum is simply dummy text of the printing 
and typesetting industry. Lorem Ipsum has been the 
industry's standard dummy text ever since the 1500s, 
when an unknown printer took a galley of type and 
scrambled it to make a type specimen book.</p> 
                
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                 Prerequisites <i class="fas fa-chevron-down"></i>
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
orem Ipsum is simply dummy text of the printing 
and typesetting industry. Lorem Ipsum has been the 
industry's standard dummy text ever since the 1500s, 
when an unknown printer took a galley of type and 
scrambled it to make a type specimen book.              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                 What's Include <i class="fas fa-chevron-down"></i>
                </button>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body">
                <p>
                 Lorem Ipsum is simply dummy text of the printing 
and typesetting industry. Lorem Ipsum has been the 
industry's standard dummy text ever since the 1500s, 
when an unknown printer took a galley of type and 
scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into 
electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of 
Lorem Ipsum
                </p>
              </div>
            </div>
          </div>
        </div>
        

      </div>
          </div>
          <div class="column">
            <div class="form-wrapper-coursebreif2">
              <h4>The Intended Learning Outcomes</h4>
              <h5>By the end of the course, you‘ll be able to...</h5>
              
              <ul>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam  nonummy nibh euismod tincid</li>
                <li>Lorem ipsum dolor sit amet, sed diam  nonummy nibh euismod tincid</li>
                 <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam  nonummy nibh euismod tincid</li>
                <li>Lorem ipsum dolor sit amet, sed diam  nonummy nibh euismod tincid</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="instructor-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>ABOUT THE INSTRUCTOR</h2>
            <img src="assets/images/instructorImg.png" class="img-fluid">
            <h4>Nu'man Amri Maliky</h4>
            <p>"Top instructors from around the world teach millions of students on Inact. We 
provide the tools and skills to teach what you love.”</p>
          </div>
        </div>
      </div>
    </section>


        <section class="maincourse-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>MAIN COURSE</h2>
          </div>
        </div>

        <div class="row">
      <div class="tabs-wrapper courses-tabs">
        <!-- <ul class="nav nav-pills" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="popular-tab" data-toggle="pill" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Most popular courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="trending-tab" data-toggle="pill" href="#trending" role="tab" aria-controls="trending" aria-selected="false">trending courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="top-rated-tab" data-toggle="pill" href="#top-rated" role="tab" aria-controls="top-rated" aria-selected="false">top rated courses</a>
          </li>
        </ul> -->
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
            <div class="owl-carousel owl-theme maincourses-slider">
              <div class="item">
                <div class="flip-card">
                  <div class="flip-card-inner">
                      <div class="card flip-card-front">
                        <img src="assets/images/course-html-css.jpg" class="img-fluid card-img-top">
                        <div class="card-body">
                          <span class="tag">New</span>
                          <h4 class="card-heading">Advance HTML Expert</h4>
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
                          <a href="course-breif.html" class="btn">See More</a>
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
                          <a href="course-breif.html" class="btn">See More</a>
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
                          <a href="course-breif.html" class="btn">See More</a>
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
                          <a href="course-breif.html" class="btn">See More</a>
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
                          <a href="course-breif.html" class="btn">See More</a>
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
                          <a href="course-breif.html" class="btn">See More</a>
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
                          <a href="course-breif.html" class="btn">See More</a>
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
                          <a href="course-breif.html" class="btn">See More</a>
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
                          <a href="course-breif.html" class="btn">See More</a>
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
    </section>

  </main>
  
@endsection
