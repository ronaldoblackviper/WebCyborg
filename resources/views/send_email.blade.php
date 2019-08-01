@extends('layouts.app')

@section('content')
<div class="site-section bg-light" id="contact-section">
        <link rel="stylesheet" href="assets2/css/style.css">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h2 class="section-title mb-3">Contact Form</h2>
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
@endsection