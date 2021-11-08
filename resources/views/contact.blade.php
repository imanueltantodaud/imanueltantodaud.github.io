@extends('layout')
@section('title', 'Contact')
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

    <section class="banner4 contact-banner">
      <div class="overlay">
        <div class="inner-wrapper">
          <h2>inAct</h2>
          <h1>support community</h1>
        </div>
      </div>
    </section>

    <section class="double-column">
      <div class="buttons-wrrapper">
        <a href="{{ route('Faqs') }}" class="btn">
          <img src="assets/images/icon-a-conversation.png" class="img-fluid back">
          <img src="assets/images/icon-b-conversation.png" class="img-fluid front">
          FAQs
        </a>
        <a href="{{ route('Contact') }}" class="btn active">
          <img src="assets/images/icon-a-contact.png" class="img-fluid back">
          <img src="assets/images/icon-b-contact.png" class="img-fluid front">
          Contact Us
        </a>
      </div>

      <div class="content">
        <h4>If you want to contact us for general queries</h4>
        <h3><i class="fas fa-envelope"></i> Info@inAct.org </h3>
        <h4>For Payment Queries You Can Contact Us On</h4>
        <h3><i class="fas fa-envelope"></i> Payment@inAct.org</h3>
        <h4>If you are facing any technical issues in set up your account or other technical issue contact us on</h4>
        <h3><i class="fas fa-envelope"></i> Support@inAct.org</h3>
        <h4>If you are interested in using inAct content to upskill your employees or workforce, contact us on </h4>
        <h3><i class="fas fa-envelope"></i> inActForEnterpise@inAct.com</h3>
        <h4>If you interested to join inAct as an instructor contact us on</h4>
        <h3><i class="fas fa-envelope"></i> TeachoninAct@inAct.com </h3>
        <h4>Mobile Number</h4>
        <h3><i class="fas fa-phone-square-alt"></i>  20 XXXXX XXXXX</h3> 
        <!-- <h4>If you are interested in using inAct content to upskill your employees or workforce, contact us on </h4>
        <h3><i class="fas fa-envelope"></i> inActForEnterpise@inAct.com</h3>
        <h4>If you interested to join inAct as an instructor contact us on</h4>
        <h3><i class="fas fa-envelope"></i> TeachoninAct@inAct.com </h3>
        <h4>And general mail for the user when he will fill the get started and
sending to us on the chat boat </h4>
        <h3><i class="fas fa-envelope"></i> info@inAct.org</h3>
        <h4>If you are interested to join inAct as an instructor contact us on</h4>
        <h3><i class="fas fa-envelope"></i> Support@inAct.org</h3>
        <h4>If you are facing any technical issues in set up your account or other technical issue contact us on</h4>
        <h3><i class="fas fa-envelope"></i> TeachoninAct@inAct.com</h3>
        <h4>Mobile Number</h4>
        <h3><i class="fas fa-phone-square-alt"></i>  20 XXXXX XXXXX</h3> -->

        <div class="social">
          <h5>Follow InAct On</h5>
          <a href="#" class="pl-0"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>

      </div>
    </section>


    
  </main>
@endsection
