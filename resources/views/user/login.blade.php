@extends('layouts.master')

@section('title')
    Log In
@endsection

@section('content') 
<div class="container">   
    <div class="row">
        <style type="text/css">
            .login{
                margin: 180px auto;
                width: 370px;
                
            }
        </style>
        <div class="login">
        <div class="col-md-10 col-md-offset-4">
            <h1>Login</h1>
            @if (count($errors) > 0)
                <div class="laert alert-danger">
                    @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            
            <form action="{{ route('user.login') }}" method="POST">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                {{ csrf_field() }}
            </form>
            <p>Don't have an account? <a href="{{ route('user.signup') }}">Sign Up</a></p>
        </div>
    </div>
</div>
</div>

@endsection