@extends('layout')
@section('title', 'Main Course')
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
    
<section class="main-heading">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Learn From Industry Expert</h2>
      </div>
    </div>
  </div>
</section>
    <section class="workforce workforcebreif">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12 padding-0">
            <iframe width="100%" height="450px"
            src="https://www.youtube.com/embed/Hr_CkEvuaW8">
            </iframe>
          </div>
        </div>

        <div class="container">
          <div class="row">
          <div class="col-md-12">
            <div class="welcome-content">
              <h2>Welcom to your course, Mr Anderson</h2>
            <ul>
              <li class="active">Week 1</li>
              <li>Week 2</li>
              <li>Week 3</li>
              <li>Week 4</li>
              <li>Week 5</li>
              <li>Week 6</li>
            </ul>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
          </div>
        </div>

        <div class="row flex mt-5 mb-5">
          <div class="col-md-6">
            <div class="course-content">
             

              

             <div class="row">
                  <div class="col-md-9">
                    <h6 class="course-contentdiv watched-videos">Watched Videos: </h6>
                  </div>
                  <div class="col-md-3">
                    <div class="circle_percent" data-percent="75">
      <div class="circle_inner">
          <div class="round_per"></div>
        </div>
    </div>
                  </div>
                </div>


                <div class="row mt-3">
                  <div class="col-md-9">
                    <p class="assignment course-contentdiv">Number Of Completed <br> Assignment:</p>
                  </div>
                  <div class="col-md-3">
                    <p class="assignment-num course-contentdiv">5</p>
                  </div>
                </div>






            </div>
          </div>
          <div class="col-md-6">
            <div class="performance-conten">
                <h3>PERFORMANCE</h3>
                <h5>HOW TO COMPLETE THIS COURSE?</h5>
                <p>To earn a cerificate on this course, you need to amr at least 90% of steps as complete, and have an overall score of 70%</p>

               


            </div>
          </div>
        </div>


       <div class="coursecontentmaindiv">
          <div class="row">
          <div class="col-md-12">
 <h3 class="course-content-heading">COURSE CONTENT</h3>


 <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  COURSE CONTENT <i class="fas fa-chevron-down"></i>
                </button>
              </h5>
            </div>
        
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                <p>
                               <div class="course-contentdiv">
                <div class="row flex">
                <div class="col-md-6">
                  <iframe width="100%" height="200px"
            src="https://www.youtube.com/embed/Hr_CkEvuaW8">
            </iframe>
                </div>
                <div class="col-md-6">
                  <p class="course-name">2 - Welcome Learn From Industry Expert</p>
                </div>
              </div>
              </div>



            <div class="course-contentdiv">
              <div class="row flex">
                <div class="col-md-2">
                  <i class="far fa-file-pdf"></i>
                </div>
                <div class="col-md-8">
                  <p class="assessment"> Assessment 1</p>
                </div>
                <div class="col-md-2">
                  <i class="fas fa-lock lockIcon"></i>
                </div>
              </div>
            </div>
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Description  <i class="fas fa-chevron-down"></i>
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                <p>Are you ready to start your path to becoming a Data Scientist!</p>
                <p>This comprehensive course will be your guide to learning how to use the power of Python to analyze data, create beautiful visualizations, and use powerful machine learning algorithms!</p> 
                <ol>
                  <li>Data Scientist has been ranked the number one job on Glassdoor and the average salary of a data scientist is over $120,000 in the United States according to Indeed! Data Science is a rewarding career that allows you to solve some of the world's most interesting problems!</li>
                  <li>This course is designed for both beginners with some programming experience or experienced developers looking to make the jump to Data Science!</li>
                </ol>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  What you'll learn  <i class="fas fa-chevron-down"></i>
                </button>
              </h5>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body">
                <p>
                  Data Scientist has been ranked the number one job on Glassdoor and the average salary of a data scientist is over $120,000 in the United States according to Indeed! Data Science is a rewarding career that allows you to solve some of the world's most interesting problems!
                </p>
                <ol>
                  <li>Use Python for Data Science and Machine Learning</li>
                  <li>Implement Machine Learning Algorithms</li>
                  <li>Learn to use Pandas for Data Analysis</li>
                  <li>Learn to use Seaborn for statistical plots</li>
                  <li>Use Plotly for interactive dynamic visualizations</li>
                </ol>
              </div>
            </div>
          </div>
        </div>


          </div>
        </div>
       </div>

        </div>

      </div>


   
    </section>


 

  </main>
  
@endsection
