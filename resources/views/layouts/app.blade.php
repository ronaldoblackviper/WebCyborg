<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Cyborg IT Center || Home</title>
    <link rel="icon" href="assets/img/favicon1.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <!-- style CSS -->
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div id="logo">
                    <a href="/"><img src="assets/img/Logo1.png" alt="" title="" /></a>
                </div>
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/product" class="nav-link">Product</a>
                                    </li>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/About" class="nav-link">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/sendemail" class="nav-link">Contact</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a href="/Cart" class="nav-link">Cart</a>
                                    </li> --}}
                                </ul>
                            </div>
                        </nav>
                    </ul>


                    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li> --}}
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('login') . '?previous=' . Request::fullUrl() }}">{{ __('Login') }}</a> --}}
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>

        
    @yield('content')
    
    </div>
       {{-- chat part start --}}
       <section class="container" >

            <button class="open-button" onclick="openform()">Live Chat</button>
            
            <div class="chat-popup" id="myform">
                <form action="" class="form-container">
                    <div class="chatbox" >
                        <button type="button" class="btn-cancel" onclick="closeform()">X</button>
    
                        <div class="chatlogs">
                
                            <div class="chat friend">
                                <div class="user-photo"></div>
                                <p id="user" class="chat-message">What's up, Brother..!!</p>
                            </div>
                            <div class="chat self">
                                <div class="user-photo"></div>
                                <p id="chatbot" class="chat-message">What's up..!!</p>
                            </div>
                        </div>
                
                        <div class="chat-form">
                            <textarea id="input" type="text" placeholder="say anything. . ."></textarea>
                            <button type="submit" class="button">Send</button>
                        </div>
                    </div>
                </form>
            </div>        
        </section>
        {{-- chat part end --}}
    
        <!-- footer part start-->
        <footer class="copyright_part">
            <div class="container">
                <div class="row align-items-center">
                    <p class="footer-text m-0 col-lg-8 col-md-12">
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Cyborg IT Center</p>
                    <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"> <i class="ti-twitter"></i> </a>
                        <a href="#"><i class="ti-instagram"></i></a>
                        <a href="#"><i class="ti-skype"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer part end-->
    
        <script>
            function openform(){
                document.getElementById("myform").style.display="block";
            }
            function closeform(){
                document.getElementById("myform").style.display="none";
            }
        </script>
    
    <script src="assets/js/chatbot.js"></script>
        
        <!-- jquery plugins here-->
        <!-- jquery -->
        <script src="assets/js/jquery-1.12.1.min.js"></script>
        <!-- popper js -->
        <script src="assets/js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- aos js -->
        <script src="assets/js/aos.js"></script>
        <!-- easing js -->
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <!-- swiper js -->
        <script src="assets/js/swiper.min.js"></script>
        <!-- swiper js -->
        <script src="assets/js/masonry.pkgd.js"></script>
        <!-- particles js -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- carousel js -->
        <script src="assets/js/swiper.min.js"></script>
        <!-- swiper js -->
        <script src="assets/js/swiper_custom.js"></script>
        <!-- custom js -->
        <script src="assets/js/custom.js"></script>
</body>
</html>
