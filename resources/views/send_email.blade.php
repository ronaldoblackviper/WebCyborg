@extends('layouts.header')

@section('content')
<div class="site-section bg-light" id="contact-section">
        <link rel="stylesheet" href="assets2/fonts/icomoon/style.css">

        <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets2/css/jquery-ui.css">
        <link rel="stylesheet" href="assets2/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets2/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets2/css/owl.theme.default.min.css">

        <link rel="stylesheet" href="assets2/css/jquery.fancybox.min.css">

        <link rel="stylesheet" href="assets2/css/bootstrap-datepicker.css">

        <link rel="stylesheet" href="assets2/fonts/flaticon/font/flaticon.css">

        <link rel="stylesheet" href="assets2/css/aos.css">

        <link rel="stylesheet" href="assets2/css/style.css">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h3 class="section-sub-title">Contact Form</h3>
              <h2 class="section-title mb-3">Get In Touch</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-7 mb-5">
  
            @if(count($errors)>0)
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">x</button>
                  <strong>{{ $message }}</strong>
                </div>
            @endif

            <form method="POST" action="{{ url('sendemail/send')}}" class="p-5 bg-white">

              {{ csrf_field() }}
                <div class="row form-group">
                    <div class="col-md-12">
                      <label class="text-black" for="email">Name</label> 
                      <input type="name" name="name" id="name" class="form-control rounded-0" placeholder="input your name...">
                    </div>
                  </div>
  
                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="email">Email</label> 
                    <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="input your email...">
                  </div>
                </div>

                <div class="row form-group">
                    <div class="col-md-12">
                      <label class="text-black" for="subject">Phone</label> 
                      <input type="text" name="phone" id="phone" class="form-control rounded-0" placeholder="input your phone number...">
                    </div>
                  </div>
  
                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="text-black" for="message">Message</label> 
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Write your notes or questions here..."></textarea>
                  </div>
                </div>
  
                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" name="send" value="Send" class="btn btn-info">
                  </div>
                </div>
  
    
              </form>
            </div>
          
          </div>
          
        </div>
      </div>
      <script src="assets2/js/jquery-3.3.1.min.js"></script>
      <script src="assets2/js/jquery-migrate-3.0.1.min.js"></script>
      <script src="assets2/js/jquery-ui.js"></script>
      <script src="assets2/js/popper.min.js"></script>
      <script src="assets2/js/bootstrap.min.js"></script>
      <script src="assets2/js/owl.carousel.min.js"></script>
      <script src="assets2/js/jquery.stellar.min.js"></script>
      <script src="assets2/js/jquery.countdown.min.js"></script>
      <script src="assets2/js/bootstrap-datepicker.min.js"></script>
      <script src="assets2/js/jquery.easing.1.3.js"></script>
      <script src="assets2/js/aos.js"></script>
      <script src="assets2/js/jquery.fancybox.min.js"></script>
      <script src="assets2/js/jquery.sticky.js"></script>
@endsection