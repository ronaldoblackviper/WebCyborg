@extends('layouts.app')

@section('content')

{{-- <div id="parallax" class="header-content d-flex align-items-center">    --}}
  <div class="container">
      <div class="row align-items-center">
          <div class="col-xl-5 col-lg-6">
              <div class="header-content-right">
                  <h4 class="sub-title">Hello, We are</h4>
                  <h1 class="title">Cyborg IT Center</h1>
                  <p>Kami hadir untuk mendigitalkan usaha anda</p>
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
