@extends('layouts.header')

@section('content')

    <link rel="stylesheet" href="register_v1/css/style.css">

    <div class="wrapper">
        <div class="inner">
            <div class="image-holder">
                <img src="register_v1/images/registration-form-4.jpg" alt="">
            </div>
        <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <h3>Sign Up</h3>
                <div class="form-holder active">
                    <input type="text" name="name" id="inputname" placeholder="Please input your name" class="form-control">
                </div>
                <div class="form-holder">
                    <input type="text" name="email" id="inputemail" placeholder="e-mail" class="form-control">
                </div>
                <div class="form-holder">
                    <input type="password" name="password" id="inputpassword" placeholder="Password" class="form-control" style="font-size: 15px;">
                </div>
                <div class="form-holder">
                    <input type="password" name="password_confirmation" id="inputpassword" placeholder="Password" class="form-control" style="font-size: 15px;">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" checked> I agree all statement in <a href="#">Terms & Conditions</a>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="form-login">
                    <button type="submit">Sign up</button>
                    <p>Already Have account? <a href="/Login">Login</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="register_v1/js/jquery-3.3.1.min.js"></script>
    <script src="register_v1/js/main.js"></script>

@endsection