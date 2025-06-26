@extends('layout')
@section('title', 'Course Brief New')
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

    <section class="course-brief-banner">
      <div class="overlay">
        <h1>Success Takes Preparation</h1>
      </div>
    </section>

    <section class="course-brief-intro">
      <div class="custom-row">
        <div class="column column-1">
          <div class="img-box">
            
            @if($courses)
            <!-- <video style="width: 100%;" controls>
              <source src="{{ $courses->video }}" type="video/mp4">
            </video> -->
            @endif

            <!-- <iframe src="https://player.vimeo.com/video/638019970?h=b5d22de808&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" width="500" height="500" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="video"></iframe> -->
            
            <!-- <iframe src="https://player.vimeo.com/video/638022270?h=14073bb2fd&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" width="500" height="500" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title="coderech.mp4"></iframe> -->

            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/638019970?h=b5d22de808&amp;player_id=0&amp;app_id=58479" frameborder="0" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="video"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
            
              <!-- <div class="overlay">
              <i class="far fa-play-circle"></i>
            </div> -->

          </div>
        </div>

        <div class="column column-2">
          <div class="inner-wrapper">
            @if($courses)
            <h1>{{ $courses->course_title }}</h1>
            <p>{{ $courses->course_description }}</p>
            <div class="enroll-wrapper">
              <!-- <div class="instructor">
                <img src="assets/images/instructor-img.PNG" class="img-fluid">
                <p>Nu'man Amri Malikyr</p>
              </div> -->
              <div>
                <h6>Course Price</h6>
                <h2>${{ $courses->course_price }}</h2>
              </div>
              <a href="{{ route('Checkout', [$courses->id]) }}" class="btn">Enroll for Individuals</a>
            </div>
            @endif
          </div>
        </div>
      </div>
    </section>

    @if($courses)
    <section class="short-section">
      <div class="custom-row">
        <div class="column">
          <div class="inner">
            <i class="far fa-clock"></i>
            <h5>Duration: <br><span>{{ $courses->course_duration }} weeks</span></h5>
          </div>
        </div>
        <div class="column">
          <div class="inner">
            <i class="fas fa-redo-alt"></i>
            <h5>Weekly study: <br><span>{{ $courses->weekly_study }} hours</span></h5>
          </div>
        </div>
        <div class="column">
          <div class="inner">
            <i class="fas fa-wifi"></i> 
            <h5>100% Online: <br><span>Learn on your peace</span></h5>
          </div>
        </div>
      </div>
    </section>
    @endif

    <section class="about-course">
      <div class="custom-row">
        <div class="column">
          <div class="heading">
            <h5>Sessions in This Course</h5>
            <h6>15 Sessions (1 hr 16m) </h6>
          </div>

          <div class="course-table">
          @foreach(json_decode($courses_videos, true)  as $video)
            
            <a href="#" class="btn">
              <i class="uil uil-play"></i>
              <p>01. {{ $video['name'] }}</p>
              <span class="time">{{ $video['total_time'] }}</span>
            </a>
            
          @endforeach
          
            
            <!-- <a href="#" class="btn">
              <i class="uil uil-padlock"></i>
              <p>03. Quis rerum aliquid dolorum at.</p>
              <span class="time">1:29</span>
            </a> -->
            
            <button class="btn" id="courseLessonExpand" type="button" data-toggle="collapse" data-target="#collapseLessons" aria-expanded="false" aria-controls="collapseLessons">
              See All The Syllabus <i class="uil uil-angle-right-b"></i>
            </button>
            <div class="collapse" id="collapseLessons">
              <div class="card card-body p-0">
                <a href="#" class="btn">
                  <i class="uil uil-padlock"></i>
                  <p>05. Introduction</p>
                  <span class="time">6:34</span>
                </a>
                
              </div>
            </div>
            <button class="btn" id="courseLessonUnxpand" type="button" data-toggle="collapse" data-target="#collapseLessons" aria-expanded="false" aria-controls="collapseLessons">
              Unexpand The Syllabus <i class="uil uil-angle-right-b"></i>
            </button>
          </div>
        </div>
      </div>

      <hr class="mt-5">

      <div class="custom-row2">
        <div class="column">
          <i class="uis uis-signal-alt-3"></i>
          <span>All Levels</span>
        </div>
        <div class="column">
          <h5>@if($courses){{ $courses->number_students }}@endif</h5>
          <span>Students</span>
        </div>
        <div class="column">
          <h5>@if($courses){{ $courses->projects }}@endif</h5>
          <span>Projects</span>
        </div>
      </div>

      <hr class="mb-5">

      <div class="custom-row custom-row3">
        <div class="heading">
          <h5>About This Course</h5>
        </div>
        <h6>@if($courses)"{{ $courses->about_course }}"@endif</h6>
          <p>@if($courses){{ $courses->about_brief }}@endif</p>
      </div>

      <hr class="my-5">

      <div class="custom-row custom-row4">
        <div class="heading">
          <h5>About The Instructor</h5>
        </div>
        @if($courses)
          <div class="teacher-info">
            @if($courses->image)
              <img src="{{ asset($courses->image) }}" class="img-fluid">
            @else
              <img src="{{ asset('assets/images/icon-user.png') }}" class="img-fluid">
            @endif  
            <div class="details">
              <h5>{{ $courses->first_name }} {{ $courses->last_name }}</h5>
              <h6>Author</h6>
            </div>
          </div>
          <p>{{ $courses->author_description }}</p>
        @endif
      </div>

      <hr class="my-5">

      <div class="custom-row custom-row-5">
        <div class="heading">
          <h5>Related Course</h5>
        </div>
        <div class="course-buttons">
          @if($courses)
            @foreach(json_decode($courses->related_courses, true)  as $data)
              <a href="#" class="btn">{{ $data['related_courses'] }}</a>
            @endforeach
          @endif
        </div>
      </div>

    </section>
    
  </main>
  
@endsection
