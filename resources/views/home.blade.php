@extends('layouts.app')

@section('content')
<!--====== Favicon Icon ======-->
<link rel="shortcut icon" href="landing_v1/images/favicon.png" type="image/png">

<!--====== Bootstrap css ======-->
<link rel="stylesheet" href="landing_v1/css/bootstrap.min.css">

<!--====== Line Icons css ======-->
<link rel="stylesheet" href="landing_v1/css/LineIcons.css">

<!--====== Magnific Popup css ======-->
<link rel="stylesheet" href="landing_v1/css/magnific-popup.css">

<!--====== Default css ======-->
<link rel="stylesheet" href="landing_v1/css/default.css">

<!--====== Style css ======-->
<link rel="stylesheet" href="landing_v1/css/style.css">

{{-- <div id="parallax" class="header-content d-flex align-items-center">    --}}
  <div class="container">
      <div class="row align-items-center">
          <div class="col-xl-5 col-lg-6">
              <div class="header-content-right">
                  <h4 class="sub-title">Hello, I’m</h4>
                  <h1 class="title">Mark Parker</h1>
                  <p>A Freelance UI Designer & Web Developer</p>
                  <a class="main-btn" href="/Product">View Our Product</a>
              </div> <!-- header content right -->
          </div>
          <div class="col-lg-6 offset-xl-1">
              <div class="header-image d-none d-lg-block">
                  <img src="landing_v1/images/banner/hero.png" alt="hero">
              </div> <!-- header image -->
          </div>
      </div> <!-- row -->
  </div> <!-- container -->
@endsection
