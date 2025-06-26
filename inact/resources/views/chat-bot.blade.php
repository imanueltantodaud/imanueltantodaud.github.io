<div class="chat-bot">
    <div class="card-wrapper">
        <div class="card chat-card" id="hideo">
          <div class="card-header">
            <a href="#"><img src="{{ asset('assets/images/logo-white.png') }}" class="img-fluid"></a>
            <h4>WELCOME TO inAct <img src="{{ asset('assets/images/waving-hand.png') }}" class="img-fluid"></h4>
            <p>Ask Here Anything, Or Share Your Feedback Our Team Will Connect To You In Nearest Time.</p>
            <div class="icon-box">
              <a href="#" class="linkedin"><img src="{{ asset('assets/images/social-linkedin.svg') }}" class="img-fluid"></a>
              <a href="#" class="instagram"><img src="{{ asset('assets/images/social-instagram.svg') }}" class="img-fluid"></a>
              <a href="#" class="facebook"><img src="{{ asset('assets/images/social-facebook.svg') }}" class="img-fluid"></a>
            </div>
          </div>
          <div class="card-body">
            <form id="chatBot">
                @csrf
              <div class="form-group">
                <label for="email" class="sr-only">email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="axample@gmail.com" required>
              </div>
              <div class="form-group">
                <label for="message" class="sr-only">You Message</label>
                <textarea class="form-control" name="message" id="message" placeholder="Write Your Message... " required></textarea>
              </div>
              <button type="submit" class="btn">Send Message ... <i class="fas fa-paper-plane"></i></button>
            </form>
          </div>
        </div>
      </div>

      <a href="#" class="btn chatbot-button">
        <img src="{{ asset('assets/images/chat-icon.png') }}" class="img-fluid close-img">
        <img src="{{ asset('assets/images/chat-icon-open.png') }}" class="img-fluids open-img hide">
      </a>

</div>

<script>
    
    $("#chatBot").submit(function(e) {

        e.preventDefault();

        var email = $('#email').val();
        var message = $('#message').val();

        $.ajax({
            url: '{{ route("ChatBox") }}',
            type: 'POST',
            data: {
                _token: "{{ csrf_token() }}",
                'email': email,
                'message': message,
                
            },
            dataType: 'JSON',
            success: function () {
                alert('Send');
            },
        });

        $('#hideo').removeClass('show');
        alert('Thank you sending query to us');
    });
    
</script>
