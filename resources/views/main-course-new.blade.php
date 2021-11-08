@extends('layout')
@section('title', 'Main Course New')
@section('content')

<main style="background-color: #f4f4f4;">
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
          <img src="{{ asset('assets/images/instagram-icon.png') }}" style="width: 40px;">
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

    <section class="expert-banner">
      <div class="overlay">
        <h1>{{ $courses->course_title }}</h1>
      </div>
    </section>

    <section class="double-column-row">
      <div class="column-left">
        <div class="video-wrapper">
          <video style="width: 100%;" controls>
            <source src="{{ asset('assets/videos/video.mp4') }}" type="video/mp4">
          </video>
          <div class="author-div">
            <h1>01. Introduction</h1>
            <a href="#" class="btn">Next Video</a>
          </div>
        </div>
        <hr>
        
        <div class="course-about">
          <h5>The files attached to this session</h5>
          <a href="#" class="btn download-btn"><i class="far fa-file-archive"></i> Setup_file.zip</a>
        </div>

        <div class="row flex mb-5">
          <div class="col-md-12">
            <div class="course-content">
             

              <div>
                <div class="performance-conten">
                    <h3>PERFORMANCE</h3>
                    <h5>HOW TO COMPLETE THIS COURSE?</h5>
                    <p>You have to finish all videos, get at least average 75% in all assignments and achieve at least 70% in the final quiz.</p>
                </div>
              </div>

              
              <div class="row mt-3 special-row">
                <div class="col-md-6">
                  <div class="card watched-videos-card">
                    <div class="card-header">
                      <h2>Watched Videos: </h2>
                    </div>
                    <div class="card-body">
                      <div class="circle_percent" data-percent="45">
                        <div class="circle_inner">
                          <div class="round_per"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="caard">
                    <div class="heading">Passed Assignments</div>
                    <div class="value">7</div>
                  </div>
                  <div class="caard">
                    <div class="heading">Over All Score</div>
                    <div class="value">5</div>
                  </div>
                </div>
              </div>

              

            </div>
          </div>
          
        </div>
      </div>
      <div class="column-right">
        <div class="inner-data">
          @foreach($course_setup as $course_setups)
            <h2>{{ $course_setups->weekly_title }}</h2>
            
              <div class="course-table">
              @foreach($video_courses as $video_course)
                <a href="#" class="btn">
                  <div>
                    <i class="uis uis-check-circle"></i>
                    <p>{{ $video_course->name }}</p>
                    <span class="time">{{ $video_course->total_time }}</span>
                  </div>
                </a>
              @endforeach
              
              <a href="{{ route('Quiz', [$enrolled_curse->course_id]) }}" class="btn assig-btn btn-block">Assignment 1 <i class="fas fa-lock"></i></a>
            </div>
           
           
          @endforeach
          

          <a href="{{ route('Quiz', [$enrolled_curse->course_id]) }}" class="btn assignment-btn">
            Final Quiz <i class="fas fa-lock"></i>
          </a>
        </div>
      </div>

    </section>
  </main>
  
@endsection
