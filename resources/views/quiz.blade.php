@extends('layout')
@section('title', 'Quiz')
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

    <section class="test-banner quiz">
      <div class="overlay">
        <h1>{{ $enrolled_curse->course_title }}</h1>
      </div>
    </section>

    <section class="assignment-area">
      <div class="container">
        <div class="headings">
          <h2 class="title">Final <span>Quiz</span></h2>
          <div class="custom-row">
            <div class="attempts">
              <h5>number of attempts</h5>
              <div>
                <h3>(1/1)</h3>
              </div>
            </div>
            <div class="passing-scrore">
              <h5>passing score is </h5>
              <div>
                <h3>75 %</h3>
              </div>
            </div>
          </div>

        </div>
        <div class="content-body">
          <div id="test-slider" class="carousel slide test-slider" data-interval="false">
            <h5 class="mcqs">MCQS <span style="display:none;">(1 of 6)</span></h5>
            
            <div class="carousel-inner">
            <form action="{{ route('QuizStore') }}" method="post">
            @foreach($quizes as $quize)
              @csrf
              <div class="carousel-item {{ $quize->id ? 'active' : '' }}">
                <div class="question">
                  <h3>
                    <span>Q.</span>
                    {{ $quize->question }}
                  </h3>
                  <input type="text" name="user_id" value="{{ request()->user->user_id }}" hidden>
                  <input type="text" name="course_id" value="{{ $enrolled_curse->id }}" hidden>
                  <input type="text" name="question[]" value="{{ $quize->id }}" hidden>
                  <select class="textWidth form-control" name="quiz_answer[]" type="text">
                      <option disabled selected>Select an Option</option>
                      
                        <option value="{{ $quize->option_a }}">
                          {{ $quize->option_a }}
                        </option>
                        <option value="{{ $quize->option_b }}">
                        {{ $quize->option_b }}
                        </option>
                        <option value="{{ $quize->option_c }}">
                        {{ $quize->option_c }}
                        </option>
                        <option value="{{ $quize->option_d }}">
                        {{ $quize->option_d }}
                        </option>
                      
                  </select>

                  <!-- <div class="options">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="text" name="my_checkbox{{ $quize->id }}" id="q1-option-1" value="{{ $quize->option_a }}">
                      <label class="custom-control-label" for="q1-option-1">
                        {{ $quize->option_a }}
                      </label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="text" name="my_checkbox{{ $quize->id }}" id="q1-option-2" value="{{ $quize->option_b }}">
                      <label class="custom-control-label" for="q1-option-2">
                        {{ $quize->option_b }} 
                      </label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="text" name="my_checkbox{{ $quize->id }}" id="q1-option-3" value="{{ $quize->option_c }}">
                      <label class="custom-control-label" for="q1-option-3">
                        {{ $quize->option_c }}
                      </label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="text" name="my_checkbox{{ $quize->id }}" id="q1-optoin-4" value="{{ $quize->option_d }}">
                      <label class="custom-control-label" for="q1-optoin-4">
                        {{ $quize->option_d }}
                      </label>
                    </div>
                  </div> -->

                </div>
              </div>
            @endforeach
            </div>
            <div class="buttons-wrapper">
              <!-- <a class="carousel-control-prev" href="#test-slider" role="button" data-slide="prev">
                Previous
              </a>
              <a class="carousel-control-next" href="#test-slider" role="button" data-slide="next">
                Next
              </a> -->
              <button style="padding-left: 10px !important; padding-right: 10px !important;" class="btn" type="submit">Submit</button>
          </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </main>

@endsection

@section('script')

  <script>

    $(document).ready(function() {
        document.title = 'Quiz | InAct';
    });

    setTimeout(function(){
      // $('#alert-success').slideUp('slow').fadeOut(function() {
          window.location.reload();
          alert('IN');
          /* or window.location = window.location.href; */
      // });
    }, 30*60000);
  </script>

@endsection
