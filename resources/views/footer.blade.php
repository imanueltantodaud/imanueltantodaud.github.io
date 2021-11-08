<footer class="pt-4">

    <div class="container pb-4">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="inner-wrapper">
            <h5>About InAct</h5>
            <ul>
              <li>
                <a href="{{ route('About') }}">About InAct</a>
              </li>
              <li>
                <a href="{{ route('About') }}">InAct Mission</a>
              </li>
              <li>
                <a href="{{ route('About') }}">InAct Vision</a>
              </li>
              <li>
                <a href="{{ route('About') }}">InAct Core Values</a>
              </li>
            </ul>
          </div>
        </div>
        
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="inner-wrapper">
            <h5>Help & Support</h5>
            <ul>
              <li>
                <a href="{{ route('Faqs') }}">FAQS</a>
              </li>
              <li>
                <a href="{{ route('Contact') }}">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
        
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="inner-wrapper">
            <h5>Help Center</h5>
            <ul>
              <li>
                <a href="{{ route('HelpCenter') }}">Technical Queries</a>
              </li>
              <li>
                <a href="{{ route('HelpCenter') }}">Account & profile</a>
              </li>
              <li>
                <a href="{{ route('HelpCenter') }}">Billing & payments</a>
              </li>
            </ul>
          </div>
        </div>
        
        <div class="col-sm-6 col-md-6 col-lg-3">
          <div class="inner-wrapper">
            <h5>Privacy</h5>
            <ul>
              <li>
                <a href="{{ route('PrivacyPolicy') }}">Terms & Conditions</a>
              </li>
              <li>
                <a href="{{ route('PrivacyPolicy') }}">Code of Conduct</a>
              </li>
              <li>
                <a href="{{ route('PrivacyPolicy') }}">Privacy Policy</a>
              </li>
              <li>
                <a href="{{ route('PrivacyPolicy') }}">Abuse</a>
              </li>
              <li>
                <a href="{{ route('PrivacyPolicy') }}">Termination</a>
              </li>
              <li>
                <a href="{{ route('PrivacyPolicy') }}">Social Media</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="copyrights">
      <p>&copy; InAct 2021</p>
    </div>
  </footer>

  <script src="{{asset('assets/js/sweetalert2@11.js')}}"></script>
  <script src="{{asset('assets/js/custom-js.js')}}"></script>
  <script>
    $(".circle_percent").each(function() {
    var $this = $(this),
    $dataV = $this.data("percent"),
    $dataDeg = $dataV * 3.6,
    $round = $this.find(".round_per");
  $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)"); 
  $this.append('<div class="circle_inbox"><span class="percent_text"></span></div>');
  $this.prop('Counter', 0).animate({Counter: $dataV},
  {
    duration: 2000, 
    easing: 'swing', 
    step: function (now) {
            $this.find(".percent_text").text(Math.ceil(now)+"%");
        }
    });
  if($dataV >= 51){
    $round.css("transform", "rotate(" + 360 + "deg)");
    setTimeout(function(){
      $this.addClass("percent_more");
    },1000);
    setTimeout(function(){
      $round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
    },1000);
  } 
});
  </script>
</body>
</html>