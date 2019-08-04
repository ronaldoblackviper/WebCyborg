@extends('layouts.master')

@section('title')
    Sign Up
@endsection

@section('content')
<style type="text/css">
    .card{
        width: 400px;
        margin: 140px auto;
        padding-top: 20px;
        padding-bottom: 30px;
        align-items: center;
        justify-content: center;
        display: flex;  
    }
</style>   
<div class="container">
    <div class="row">
        <div class="card text-center shadow-lg">
        <div class="col-md-10 col-md-offset-4">
            <h1 style="font-family: Arial, Helvetica, sans-serif">Sign Up</h1><hr>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('user.signup') }}" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input style="text-align: center" type="text" name="name" id="name" class="form-control" placeholder="input your name ...">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input style="text-align: center" type="text" name="email" id="email" class="form-control" placeholder="input your email ...">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input style="text-align: center" type="password" name="password" id="password" class="form-control" placeholder="input your password ...">
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
    </div>
</div>
@endsection