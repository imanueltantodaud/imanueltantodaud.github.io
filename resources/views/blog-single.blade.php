@extends('layout')
@section('title', 'Blog Single')
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

    <div class="center-text three">
      <img src="{{ asset('assets/images/career-development.webp') }}" class="img-fluid w-100 ">
    </div><


    <!-- <div class="hero-img">
      <div class="overlay"></div>
     <img src="assets/images/blog-hero-img.png" class="img-fluid w-100">
    </div> -->

    <div class="center-text two">
      <h1 class="blog-main-heading">{{ $blogs_sinles->blog_title }}</h1>

      {!! $blogs_sinles->blog_content !!}

    </div>
    @if( $blogs_sinles->blog_comment)
      <!-- <div class="center-text feedback">
        <div class="alert alert-danger" role="alert">
          Comments restricted by author!
        </div>
      </div> -->
    @else
    <div class="center-text feedback">
      <h5 class="sub-heading">1 Comment</h5>
      <div class="coment">
        <img src="{{ asset('assets/images/comentee.jpeg') }}" class="img-fluid">
        <div class="detail">
          <div class="top">
            <h6 class="name">Lucy Regin</h6>
            <a href="#">Reply</a>
          </div>
          <p>This course was well organized and covered a lot more details than any other Figma courses. I really enjoy it. One suggestion is that it can be much better if we could complete the prototype together. Since we created 24 frames, I really want to test it on Figma mirror to see all the connections. Could you please let me take a look at the complete prototype?</p>
        </div>
      </div>

      <div class="form-wrapper">
        <h5 class="sub-heading mb-1">Leave a Reply</h5>
        <p class="mb-4">Your email address will not be published. Required fields are marked *</p>

        <form action="">
          <div class="form-group">
            <label>Comment</label>
              <textarea class="form-control"></textarea>
          </div>
          <div class="form-row mt-4">
            <div class="form-group col-sm-6">
              <label>Your Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group col-sm-6">
              <label>Your E-mail</label>
              <input type="email" class="form-control">
            </div>
          </div>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Save my name and email in this browser for the next time I comment.</label>
          </div>
          <button type="submit" class="btn">Post Comment</button>
        </form>
      </div>
    </div>
   
    @endif
    <div class="latest-news mb-0">
      <h2>inAct News</h2>
      <div class="top">
        <p>Discover Your Perfect Course</p>
        <a href="{{ route('CoursesForIndividuals') }}">Browse All <i class="fas fa-angle-right"></i></a>
      </div>
      <div class="latest-news-slider-wrapper">
        <div class="owl-carousel owl-theme courses-slider individual-courses">
                    
        @foreach($courses as $course)
                      
          <div class="item">
            <div class="card">
              <img src="{{ asset('assets/images/course-html-css.jpg') }}" class="img-fluid card-img-top">
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

    
  </main>

@endsection
