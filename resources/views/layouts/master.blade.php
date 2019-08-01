<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ URL::to('assets/img/favicon1.png')}}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/styleforall.css')}}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css')}}">

    @yield('styles')

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        .fixed-footer{
            width: 100%;
            background: #333;
            padding: 26px 0;
            height: 70px;
            text-align: center;
            color: #fff;
            display: block;
            align-items: center;
            align-content: center;
            position: relative;  
        }
        .fixed-header{
            top: 0;
        }
        .fixed-footer{
            bottom: 0;
        }
        </style>
</head>
<body background="{{ URL::to('assets/img/bodyback.jpg')}}" style="width: auto">
    
    @include('partials.head')
    
    @yield('content')
    
    @include('partials.footer')
        
<script src="{{ URL::to('assets/js/jquery-1.12.1.min.js')}}"></script>
<script src="{{ URL::to('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ URL::to('assets/js/popper.min.js')}}"></script>
<script src="{{ URL::to('assets/js/jquery.min.js')}}"></script>
@yield('scripts')
</body>
</html>