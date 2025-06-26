@extends('layout')
@section('title', 'Blog')
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

    <section class="blog-banner">
      <div class="overlay">
        <h1>Blog</h1>
      </div>
    </section>


    <section class="blogsec px-3">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="owl-carousel owl-theme blog-slider">
                @foreach($blogcategories as $blogcategory)
                <div class="item">
                  <a href="#inAct-blog"><h3>{{ $blogcategory->category_title }}</h3></a>
                </div>
                @endforeach
              
                </div>
              </div>
            </div>
    </section>

    <section class="blogs-wrapper">
      <div class="search-results-bar mb-5">
        <span></span>

        <form action="">
          <div class="input-group">
            <input type="search" class="form-control" placeholder="Search Our Blog" id="">
            <div class="input-group-append">
              <button class="btn" type="button"><i class="uil uil-search"></i></button>
            </div>
          </div>
        </form>
      </div>


    @foreach($blogcategories as $blogcategory)
    <div class="row mx-0" id="inAct-blog">
      <div class="col-12 text-center ">
          <span class = "blog-heading">{{ $blogcategory->category_title }}</span>
      </div>
    </div>
    
  
    <div class="blog-cards-wrapper  px-3"> 
  @foreach($blogs as $blog)
  @if($blog->blog_category == $blogcategory->id)
  
    <div class="card more-card">
      <div class="card-body">
        <div class="img-box">
          @if($blog->blog_thumbnail)
            <img src="{{ $blog->blog_thumbnail }}" class="img-fluid">
          @else
          <img src="assets/images/2.jpg" class="img-fluid">
          @endif
          <span class="tag">Topic</span>
        </div>
        <p>
          <span><i class="uil uil-user"></i> Jack Wilson</span>
          <span><i class="uil uil-calender"></i> 22 April, 2021</span>
        </p>
        <a href="{{ route('BlogSingle', [$blog->id]) }}" class="card-title">{{ $blog->blog_title }}</a>
      </div>
    </div>
    
    @endif
    @endforeach
    </div>
    @endforeach

    </section>

  </main>

@endsection

@section('script')

  <script>

    /*$(document).ready(function() {
        document.title = 'Blog | InAct';
    });*/
  </script>

@endsection
