@extends('layout')
@section('title', 'About')
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

    <section class="about-banner">
      <h1>Innovation</h1>
      <h2>Through Education</h2>
    </section>

    <section class="about-inact">
      <div class="column column-1">
        <div class="overlay">
          <div class="content">
            <h1>About <span>InAct</span></h1>
            <hr>
            <p>Online learning allows inAct students to pursue their educational requirements outside of the 
              traditional classroom setting and can accelerate or enhance their time to degree. Inact’s online 
              courses are especially important to Graduate students who are working professionals seeking an 
              advanced degree in their fields. Undergraduate students who cannot attend on-site classes because 
              of work or family obligations. An additional and equally important benefit of online learning is that
              it helps students develop the academic skills and online learning strategies they need to pursue their 
              future educational and professional goals</p>
          </div>
        </div>
      </div>
      <div class="column column-2">
        <div class="wrapper">
          <div class="about-points">
            <div class="point">
              <h5>Our Flexibility</h5>
              <p>We know your busy life demands options and flexibility. Your education is different. Take classes at night, on weekends or during Summer University. Learn anywhere, anytime with our growing number of online courses and programs. Stay in your home community by combining LIVE-streamed, online and college courses. Whether you are a stay at home parent, a full time employee or living outside the country, our flexible courses allow you to Learn Anytime, Anywhere!</p>
            </div>
            <div class="point">
              <h5>Our Staff</h5>
              <p>Our staff provides exceptional care and service to all of our students and partners. We want you to have a great experience with us and we will help you in every way we can. We take pride in our dedication to our students, our instructors and our community.</p>
              <p>Whatever brings you to Continuing Education, we know you are looking for that little something to give you a competitive edge in the job market,</p>
            </div>
            <div class="point">
              <h5>Our Instructors</h5>
              <p>Our instructors bring passion for their topics and in-field expertise to the classroom. All are accomplished in their fields and more importantly, are committed to the success of their students.<br><br>They are professionals who have exceptional teaching experience in various study fields who armed with comprehensive deep knowledge </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="vision-mission">
      <div class="inner-wrapper">
        <div class="column column-1">
          <h5>Our Vision</h5>
          <p>We believe students will become productive citizens when they are challenged and mentored in leadership, problem solving and critical thinking skills. Our student-centered education includes the following:-</p>
          <p>Online learning environment that prepares them for advanced education options, future employment, and professional education.</p>
          <p>Students complete meaningful projects and solve challenging problems while interning in the community by learning and applying academic skills consistent with real world expectations, standards and knowledge.</p>
        </div>
        <div class="column column-2">
          <h5>Our Core Values</h5>
          <p><b>Transformation </b> the transformative power of education is what will let you change maker</p>
          <p><b>Innovation </b> we willnot be constrained by what already exists but will lead the way in introducing new ways </p>
          <p><b>Inspiration </b> inspire leaners to explore their interests , gain new skills and advance their careers .</p>
        </div>
        <div class="column column-3">
          <h5>Our Mission</h5>
          <p>Our academic team serves the community by providing training, research, and flexible support services. Through creative problem solving and collaboration, we provide an environment for growth in teaching and learning in an effort to best support our students, instructors and staff.  </p>
            <p>We empower individuality with adaptable and supportive learning models that meet students where they are and ignite thier passion, knowledge, skills and character for lifelong growth and positive impact.</p>
        </div>
      </div>
    </section>
    
  </main>
@endsection
