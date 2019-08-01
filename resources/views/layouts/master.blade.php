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
    
    @yield('styles')
</head>
<body>
@include('partials.head')

<div class="container">
    @yield('content')
</div>

@include('partials.footer')

<script src="{{ URL::to('assets/js/jquery-1.12.1.min.js')}}"></script>
<script src="{{ URL::to('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ URL::to('assets/js/popper.min.js')}}"></script>
<script src="{{ URL::to('assets/js/jquery.min.js')}}"></script>
@yield('scripts')
</body>
</html>