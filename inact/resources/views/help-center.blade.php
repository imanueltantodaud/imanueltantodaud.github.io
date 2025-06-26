@extends('layout')
@section('title', 'Help Center')
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

    <section class="help-banner">
      <div class="overlay">
        <div class="inner-wrapper">
          <h2>Our support community </h2>
          <h1>How may we support ?</h1>
        </div>
      </div>
    </section>

    <section class="three-column">
      
      <div class="help-tabs-wrapper">
        <ul class="nav nav-pills help-tabs" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link" id="querries-tab" data-toggle="pill" href="#querries">
              <div class="icon-box">
                <img src="assets/images/help-icon-1a.png" class="img-fluid front">
                <img src="assets/images/help-icon-1b.png" class="img-fluid back">
              </div>
              Technical <br> Queries
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account">
              <div class="icon-box">
                <img src="assets/images/help-icon-2a.png" class="img-fluid front">
                <img src="assets/images/help-icon-2b.png" class="img-fluid back">
              </div>
              Account <br> & Profile
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="billing-tab" data-toggle="pill" href="#billing">
              <div class="icon-box">
                <img src="assets/images/help-icon-3a.png" class="img-fluid front">
                <img src="assets/images/help-icon-3b.png" class="img-fluid back">
              </div>
              Billing & <br> Payments
            </a>
          </li>
        </ul>
        <div class="tab-content help-tabs-content" id="pills-tabContent">
          <div class="tab-pane fade" id="querries">
            <form action="">
              <h1>Submit A Request</h1>
              
              <!-- <label>What can we help you with, User-name Subject?</label>
              <select class="form-control">
                <option>Account And Profile</option>
                <option>Billing And Payment</option>
                <option>Errors And Technical Issue</option>
              </select> -->

              <label>E-mail</label>
              <input type="email" class="form-control" placeholder="Your E-mail" required>
              
              <label>Course Name</label>
              <input type="text" class="form-control " placeholder="Your Course Name?" required>
              
              <label>Your Message</label>
              <textarea  class="form-control" required></textarea>

              <label>Attachments (optional)</label>
             <!--  <div class="item-wrapper one shadow bg-white rounded">
                <div class="item">
                  <div class="item-inner">
                      <div class="item-content">
                          <div class="image-upload"> 
                            <label style="cursor: pointer;" for="file_upload"> 
                              <img src="" alt="" class="uploaded-image">
                              <div class="dplay-tbl">
                                  <div class="dplay-tbl-cell"> <i class="fa fa-cloud-upload"></i>
                                      <h5><b>Choose Your Image to Upload</b></h5>
                                      <h6 class="">Or Drop Your Image Here</h6>
                                  </div>
                              </div>
                              <input data-required="image" type="file" name="image_name" id="file_upload" class="image-input" data-traget-resolution="image_resolution" value="">
                            </label> 
                          </div>
                      </div>
                  </div>
                </div>
              </div> -->
              <div class="form-group help-center-attchment">
                <div class='file'>
                  <label for='input-file'>
                    Add File or Drop File Here
                  </label>
                  <input id='input-file' type='file' accept=".pdf" />
                </div>
              </div>

          <div class="terms">
            <label class="custom-checkbox">
              <input type="checkbox" checked>
              <span class="checkmark"></span>
            </label>
            <p>
              I Agree to inAct’s <a href="privacy-policy.html">Terms & Conditions</a> and <a href="privacy-policy.html">Privacy Policy</a> <br> 
              and I agree to abide with the <a href="privacy-policy.html">Code of Conduct</a>.
            </p>
          </div>
              
            

              <a href="#" type="submit" class="btn btn-block">Submit</a>
            </form>
          </div>
          <div class="tab-pane fade show active" id="account">
            <form action="">
              <h1>Submit A Request</h1>
              
              <!-- <label>What can we help you with, User-name Subject?</label>
              <select class="form-control">
                <option>Account And Profile</option>
                <option>Billing And Payment</option>
                <option>Errors And Technical Issue</option>
              </select> -->

              <label>E-mail</label>
              <input type="email" class="form-control" placeholder="Your E-mail" required>
              
              <label>Course Name</label>
              <input type="text" class="form-control " placeholder="Your Course Name?" required>
              
              <label>Your Message</label>
              <textarea  class="form-control" required></textarea>

              <label>Attachments (optional)</label>
              <div class="form-group help-center-attchment">
                <div class='file'>
                  <label for='input-file'>
                    Add File or Drop File Here
                  </label>
                  <input id='input-file' type='file' accept=".pdf" />
                </div>
              </div>

              <div class="terms">
                <label class="custom-checkbox">
                  <input type="checkbox" checked>
                  <span class="checkmark"></span>
                </label>
                <p>
                  I Agree to inAct’s <a href="privacy-policy.html">Terms & Conditions</a> and <a href="privacy-policy.html">Privacy Policy</a> <br> 
                  and I agree to abide with the <a href="privacy-policy.html">Code of Conduct</a>.
                </p>
              </div>
           

              <a href="#" type="submit" class="btn btn-block">Submit</a>
            </form>
          </div>
          <div class="tab-pane fade" id="billing">
            <form action="">
              <h1>Submit A Request</h1>
              
              <!-- <label>What can we help you with, User-name Subject?</label>
              <select class="form-control">
                <option>Account And Profile</option>
                <option>Billing And Payment</option>
                <option>Errors And Technical Issue</option>
              </select> -->

              <label>E-mail</label>
              <input type="email" class="form-control" placeholder="Your E-mail" required>
              
              <label>Course Name</label>
              <input type="text" class="form-control " placeholder="Your Course Name?" required>
              
              <label>Your Message</label>
              <textarea  class="form-control" required></textarea>

              <label>Attachments (optional)</label>
              <div class="form-group help-center-attchment">
                <div class='file'>
                  <label for='input-file'>
                    Add File or Drop File Here
                  </label>
                  <input id='input-file' type='file' accept=".pdf" />
                </div>
              </div>
              
              <div class="terms">
                <label class="custom-checkbox">
                  <input type="checkbox" checked>
                  <span class="checkmark"></span>
                </label>
                <p>
                  I Agree to inAct’s <a href="privacy-policy.html">Terms & Conditions</a> and <a href="privacy-policy.html">Privacy Policy</a> <br> 
                  and I agree to abide with the <a href="privacy-policy.html">Code of Conduct</a>.
                </p>
              </div>

              <a href="#" type="submit" class="btn btn-block">Submit</a>
            </form>
          </div>
        </div>
      </div>

    </section>
    
  </main>
@endsection
