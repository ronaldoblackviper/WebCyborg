@extends('layouts.header')

@section('content')
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">

    <link rel="stylesheet" href="assets4/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets4/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets4/fonts/law-icons/font/flaticon.css">

    <link rel="stylesheet" href="assets4/fonts/fontawesome/css/font-awesome.min.css">


    <link rel="stylesheet" href="assets4/css/slick.css">
    <link rel="stylesheet" href="assets4/css/slick-theme.css">

    <link rel="stylesheet" href="assets4/css/helpers.css">
    <link rel="stylesheet" href="assets4/css/style.css">
    <link rel="stylesheet" href="assets4/css/landing-2.css">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <form action="#".. class="bg-white rounded pb_form_v1">
          <h2 class="mb-4 mt-0 text-center">Login</h2>
          <div class="form-group">
            <input type="email" name="email" id="email" class="form-control pb_height-50 reverse" placeholder="Email address" required autofocus>
          </div>
          <div class="form-group">
            <input type="password" name="inputpassword" id="inputpassword" class="form-control pb_height-50 reverse" placeholder="Password" required>
          </div>
          <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
          </div>
          <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="Login">
          </div>
        </form>
      </div>
    </div>

@endsection