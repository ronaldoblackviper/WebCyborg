@extends('layouts.header')

@section('content')

  <link rel="icon" type="image/png" href="login_v1/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="login_v1/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login_v1/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="login_v1/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="login_v1/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="login_v1/css/util.css">
	<link rel="stylesheet" type="text/css" href="login_v1/css/main.css">
  
  <!--================Login Box Area =================-->
	<div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="login_v1/images/img-01.png" alt="IMG">
        </div>

      <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          <span class="login100-form-title">
            Member Login {{ config('app.name') }}
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" type="text" name="email" id="inputemail" placeholder="Email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Password is required">
            <input class="input100" type="password" name="password" id="inputpassword" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>
          
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">
              Login
            </button>
          </div>

          <div class="text-center p-t-12">
            <span class="txt1">
              Forgot
            </span>
            <a class="txt2" href="#">
              Username / Password?
            </a>
          </div>

          <div class="text-center p-t-136">
            <a class="txt2" href="/Register">
              Create your Account
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="login_v1/vendor/bootstrap/js/popper.js"></script>
  <script src="login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="login_v1/vendor/select2/select2.min.js"></script>
  <script src="login_v1/vendor/tilt/tilt.jquery.min.js"></script>
  <script >
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>
  <script src="js/main.js"></script>
@endsection