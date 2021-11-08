@extends('layout')
@section('title', 'Verification')
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

    <section class="verification-wrapper">
      <h1>Thank You For Signing In inAct</h1>
      <p>Please confirm your email to Full access of inAct</p>
      <p>Let's Confirm Your Mail, Enter Code We sent to</p>
      @if(session()->has('email'))
      <p>{{ session('email') }}</p>

      <form action="{{ route('VerifyStudent') }}" method="post">
        @csrf
        <div class="form-group">
          <input type="text" name="email" value="{{ session('email') }}" hidden>
          <input type="text" name="a" class="form-control" required>
          <input type="text" name="b" class="form-control" required>
          <input type="text" name="c" class="form-control" required>
          <input type="text" name="d" class="form-control" required>
          <input type="text" name="e" class="form-control" required>
          <input type="text" name="f" class="form-control" required>
        </div>

        <button type="submit" class="btn">Verify</button>

        <p>Didn't recieve code ? <a href="#">Send Again</a></p>
      </form>
      {{ session()->forget('email') }}
      @endif 
    </section>
    
  </main>
  
@endsection
