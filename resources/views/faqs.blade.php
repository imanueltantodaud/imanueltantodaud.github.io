@extends('layout')
@section('title', 'FAQs')
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

    <section class="banner4">
      <div class="overlay">
        <div class="inner-wrapper">
          <h2>inAct</h2>
          <h1>support community</h1>
        </div>
      </div>
    </section>

    <section class="double-column">
      <div class="buttons-wrrapper">
        <a href="faqs.html" class="btn active">
          <img src="assets/images/icon-a-conversation.png" class="img-fluid back">
          <img src="assets/images/icon-b-conversation.png" class="img-fluid front">
          FAQS
        </a>
        <a href="contact.html" class="btn">
          <img src="assets/images/icon-a-contact.png" class="img-fluid back">
          <img src="assets/images/icon-b-contact.png" class="img-fluid front">
          Contact Us
        </a>
      </div>

      <div class="content">

        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  How to create an account on inAct ?<i class="fas fa-chevron-down"></i>
                </button>
              </h5>
            </div>
        
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <p>
                  Set up your inAct account To start taking classes on inAct , you'll need to setup an account. To make a inAct account: Go to inAct.org. At the top of the page, click Sign up.Choose whether you want to provide a name, email, and password or link your inAct account to your Facebook profile, Google account or Linkedin . If you choose to create a new InAct account with a name, email, and password, your password needs to be 8 characters or longer. Once you create your account, you can change your account settings any time.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How to set a payment? <i class="fas fa-chevron-down"></i>
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                <p>To enroll in any course and To get a Course Certificate you will need to pay a fee.</p> 
                <ol>
                  <li>Log into your inAct account</li>
                  <li>Open the home page for the course or Specialization you want to see the prices for</li>
                  <li>Click Enroll</li>
                  <li> proceed to do a checkout and secured payment </li>
                </ol>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  How to enroll on a course? <i class="fas fa-chevron-down"></i>
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                <p>To take a course on inAct , you'll need to choose enroll and make the payment for the course Open the course information page by clicking on the course title. Click Enroll. Read all instructions and follow any prompts you receive</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Quzzies and Assessments <i class="fas fa-chevron-down"></i>
                </button>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body">
                <p>
                  Quizzes are automatically-graded assignments used to test your knowledge in a course. In some courses, quizzes are called "exams." Quiz scores After you finish and submit a quiz, you'll see your score. For some quizzes, you might also see feedback, like hints or explanations, for each question. Most quizzes require you to get a certain score to pass the quiz. The passing score will be on the quiz page. After submitting a quiz, you'll see whether you earned a high enough score to pass. For every course you take, make sure you check the syllabus and course policies for quiz policies and grading information. To see your deadlines and incomplete assignments: Log in to InAct . Click the In Progress tab to see a list of courses you're enrolled in. Find the course you'd like to see the schedule for and click its name. Click the Grades tab. Check a specific week to see deadlines for that week's assignments.
                </p>
              </div>
            </div>
          </div>
        </div>
        

      </div>
    </section>


    
  </main>
@endsection
