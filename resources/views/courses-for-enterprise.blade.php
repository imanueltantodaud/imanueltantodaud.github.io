@extends('layout')
@section('title', 'Courses for Enterprise')
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

    <section class="workforce">
      <div class="custom-row row-1">
        <div class="overlay">
          <div class="inner-wrapper">
            <div class="column">
              <div class="heading">
                <h1>Accelerate Your Workforce </h1>
                <div class="box">
                  <ul>
                    <li class="item-1">Skills</li>
                    <li class="item-2">Mindset</li>
                    <li class="item-3">Productivity</li>
                    <li class="item-3">Performance</li>
                    <li class="item-3">Efficiency</li>
                  </ul>
                </div>
              </div>
              <!-- <h2>InAct is your strategic learning partner to help your workforce for moving forward and getting a head in the competitive global climate by aligning our learning strategy with your training and business priorities. </h2> -->
              <h2>inAct is  your strategic learning partner to help the workforce for moving forward and getting a head in the competitive global climate by aligning our learning strategy with your training and business priorities. </h2>
            </div>
          </div>
        </div>
      </div>
      <div class="custom-row row-2">
        <div class="inner-wrapper">
          <div class="column">
            <h2>Unlock your employees potential and transform their knowledge with <br> inAct for Enterprise. </h2>
  
            <div class="keypoints">
              <div class="point">
                <div class="img-box">
                  <img src="assets/images/lack-skills.png" class="img-fluid">
                </div>
                <p data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                  79% <br> 
                  Of CEOS Say Lack Of Key Skills Is Threatening Future Growth Of Their Organizations.
                </p>
              </div>
              <div class="point">
                <div class="img-box">
                  <img src="assets/images/leadership.png" class="img-fluid">
                </div>
                <p data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                  76% <br> 
                  Of business leaders do not believe they can quickly hire the talent they need.
                </p>
              </div>
              <div class="point">
                <div class="img-box">
                  <img src="assets/images/learning-environment.png" class="img-fluid">
                </div>
                <p data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                  62% <br> 
                  Of hight growth organizations believe their workforce can be trained to have the skills they require.
                </p>
              </div>
            </div>
          </div>
          <div class="column">
            <div class="form-wrapper">
              <form action="" class="contact-form">
                <h2>Possibilities starts here with <br> inAct for Enterprise </h2>
                <div class="form-group">
                  <label for="corporateName">Corporate Name *</label>
                  <input class="form-control" type="text" placeholder="Corporate Name" name="corporateName" id="corporateName" required>
                </div>
                <div class="form-group">
                  <label for="corporateEmail">Corporate Email *</label>
                  <input class="form-control" type="email" placeholder="Corporate Email" name="corporateEmail" id="corporateEmail" required>
                </div>
                <div class="form-group">
                  <label for="corporateRole">Corporate Role *</label>
                  <input class="form-control" type="email" placeholder="Corporate Role" name="corporateRole" id="corporateRole" required>
                </div>
                <div class="form-group"  data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                  <label for="corporatePhoneNumber">Corporate Phone Number *</label>
                  <input class="form-control" type="number" placeholder="Corporate Phone Number" name="corporatePhoneNumber" id="corporatePhoneNumber" required>
                </div>
                <div class="form-group"  data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                  <label for="interestedIn">I'm Interested In</label>
                  <select name="interestedIn" id="interestedIn" class="form-control">
                    <option value="Please Select">Please Select</option>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
                <div class="form-group course-details-fileds" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                  <label for="corporateRole">Course Name *</label>
                  <input class="form-control" type="text" placeholder="Write Course Name" name="corporateRole" id="corporateRole" required="">
                </div>
                <div class="form-group" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1500">
                  <div class=""><label for="comment">Course Details *</label> <textarea style="padding: 20px;" placeholder="Write Course Details" name="corporateRole" id="corporateRole" class="form-control" rows="5" id="comment" required=""></textarea></div>
                              </div>
                <button type="submit" class="btn" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1500">Request Info</button>
                <h3 data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1500">We will contact you after reviewing your application within 24-hours.</h3>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
@endsection
