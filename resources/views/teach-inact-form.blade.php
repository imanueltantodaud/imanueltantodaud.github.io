@extends('layout')
@section('title', 'Teach InAct Form')
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

      <div class="teach-inactbanner">
       <div class="overlay">
          <h1 class="mb-2">Build With inAct</h1>
          <h5 class="text-white">Ready to deliver your exceptional teaching experience</h5>
       </div>
     </div>

    <section class="px-3">

      @if(session()->has('request_error'))
          <div class="col-md-12">
              <div class="alert alert-danger mt-5">
                  {{ session('request_error') }}
              </div>
              {{ session()->forget('request_error') }}
          </div>
      @elseif (session()->has('request_success') )
          <div class="col-md-12">
              <div class="alert alert-success alert-dismissible fade show mt-5"> 
                  <strong>Success! </strong> {{ session('request_success') }}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
              </div>
              {{ session()->forget('request_success') }}
          </div>
      @endif

      <form action="{{ route('StoreCourse') }}" method="post" class="teac-form">
        @csrf
        
        <div class="form-group">
          <label>Email Address <span>*</span></label>
          <input type="email" name="email" class="form-control" placeholder="Your email" required>
        </div>
        <div class="form-group">
          <label>Full Name (First Name, Last Name) <span>*</span></label>
          <input type="text" name="name" class="form-control" placeholder="Your full name" required>

        </div>
        <div class="form-group">
          <label>Location Country <span>*</span></label>
          <input type="text" name="country" class="form-control" placeholder="Currennt Location (Country)" required>

        </div>
        <div class="form-group">
          <label>Resume or relevant work samples <span>*</span></label>
          <input type="text" name="resume_sample" class="form-control" placeholder="Shareable Google Drive or YouTube link recommended" required>

        </div>
        <div class="form-group">
          <label>Course Name <span>*</span></label>
          <input type="text" name="course_name" class="form-control" placeholder="Write course name" required>

        </div>
        <div class="form-group">
          <label>Lecture Sample <span>*</span></label>
          <input type="text" name="course_sample" class="form-control" placeholder="Shareable Google Drive or YouTube link recommended" required>

        </div>
        <div class="form-group">
          <label>Upload your course syllabus *</label>
          <div class='file'>
            <label for='input-file'>
              Add or drop file here (pdf only )
            </label>
            <input id='input-file' name="course_syllabus" type='file' accept=".pdf" required/>
          </div>

        </div>
        <div class="form-group">
          <label>Ways to get involved (Check all that apply) *</label>
          
          <div class="ways mb-0">
            <label class="custom-checkbox">
              <input type="checkbox" name="cousrse_instructor" required>
              <span class="checkmark"></span>
              Instructor: Develop full course
            </label>
          </div>

          <div class="ways">
            <label class="custom-checkbox">
              <input type="checkbox" name="cousrse_proposal" required>
              <span class="checkmark"></span>
              Course Proposal: Propose a new course
            </label>
          </div>
  
  
          <div class="ways">
            <label class="custom-checkbox">
              <input type="checkbox" name="cousrse_support" required>
              <span class="checkmark"></span>
              Course support:  Build projects, lessons, assessments and content.
            </label>
          </div>
        </div>

        <div class="form-group">
          <label>Describe your course construction *</label>
          <textarea class="form-control" name="cousrse_description" placeholder="Number of videos , Number of quizzes , Number of assignments and Number of supporting materials." required></textarea>
        </div>

        <div class="form-ggroup">

          <label>How many hours per week you are supporting your course. *</label>

          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="other" id="inlineRadio1" value="3 Hrs"/>
              <label class="form-check-label" for="inlineRadio1">3 Hrs</label>
          </div>

          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="other" id="inlineRadio2" value="5 Hrs"/>
              <label class="form-check-label" for="inlineRadio2">5 Hrs</label>
          </div>

          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="other" id="inlineRadio3" value="10 Hrs"/>
              <label class="form-check-label" for="inlineRadio3">10 Hrs</label>
          </div>

          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="other" id="inlineRadio4" value="15 Hrs"/>
              <label class="form-check-label" for="inlineRadio4">15 Hrs</label>
          </div>

          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="other" id="inlineRadio5" value="20 Hrs"/>
              <label class="form-check-label" for="inlineRadio5">20 Hrs</label>
          </div>

          <input type="button" class="btn btn-outline-primary other-btn" value="Other" onclick="onClickShowOtherValues()" />
          <input class="hideOtherInput" type="text" name="others" id="textInput" placeholder="Enter here..!" />  

        </div>
        
        <button  type="submit" class="btn">Submit</button>
      </form>
      
    </section>
    
  </main>

@endsection
