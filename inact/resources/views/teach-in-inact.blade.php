@extends('layout')
@section('title', 'Teach in InAct')
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
    
    <section class="banner3">
      <div class="overlay">
        <h1>Teach On inAct</h1>
      <a href="{{ route('TeachInactForm') }}" class="btn">Get Started</a>
      </div>
    </section>

    <section class="three-colum-row">
      <div class="inner-wrapper">
        <div class="column">
          <div class="img-box">
            <img src="assets/images/teach-icon-1.png" class="img-fluid">
          </div>
          <h5>Contemporary <br> syllabus</h5>
          <p>Set of multi – disciplinary topics has been aligned with long – term learning strategy to build your knowledge and bridge your talent gaps.</p>
        </div>
        <div class="column">
          <div class="img-box">
            <img src="assets/images/teach-icon-2.png" class="img-fluid">
          </div>
          <h5>Systematic <br> approach</h5>
          <p>Establishing Systematic approach  promotes better quality of learning results with high level of productivity which demonstrate your knowledge and build your skills</p>
        </div>
        <div class="column">
          <div class="img-box">
            <img src="assets/images/teach-icon-3.png" class="img-fluid big-icon">
          </div>
          <h5>Expert <br> tutors</h5>
          <p>Master your skills and learn with expert tutors who armed with well-structured knowledge in the field you choose.</p>
        </div>
      </div>
    </section>

    <section class="record-video">
      <div class="inner-wrapper">
        <div class="column column-img">
          <img src="assets/images/record-your-video.jpg" class="img-fluid">
        </div>
        <div class="column column-content">
          <div class="content-1">
            <h4>Plan Your Curriculum</h4>
            <hr>
            <p>You start with your passion and knowledge. Then choose a promising topic with the help of our Marketplace Insights tool. The way that you teach what you bring to it</p>
          </div>
          <div class="content-2">
            <h4>Record Your Video</h4>
            <hr>
            <p>Use basic tools like a smartphone or a DSLR camera. Add a good microphone and you're ready to start.</p>
          </div>
          <div class="content-3">
            <h4>Launch Your Course</h4>
            <hr>
            <p>Publish the course you want, in the way you want, and always have of control your own content.</p>
          </div>
        </div>
      </div>
    </section>


  </main>
@endsection
