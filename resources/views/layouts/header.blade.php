<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
     <!--::header part start::-->
     <header class="header_area">
        <div class="sub_header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 col-xl-6">
                      <div id="logo">
                          <a href="/"><img src="assets/img/Logo1.png" alt="" title="" /></a>
                      </div>
                    </div>
                    <div class="col-md-8 col-xl-6">
                      <div class="sub_header_social_icon float-right">
                        <a href="#"><i class="flaticon-phone"></i>+62 896 4803 3807</a>
                        <a href="/Login" class="register_icon"><i class="ti-arrow-right"></i>Log In or Register</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link active" href="/ ">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/Product" class="nav-link">Product</a>
                                    </li>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/About" class="nav-link">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/sendemail" class="nav-link">Contact</a>
                                    <li class="nav-item">
                                        <a href="/Cart" class="nav-link">Cart</a>
                                    </li>
                                </ul>
                                <div class="header_social_icon d-none d-lg-block">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li>
                                            <a href="#"> <i class="ti-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        <li><a href="#"><i class="ti-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="header_social_icon d-block d-lg-none">
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li>
                                    <a href="#"> <i class="ti-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                                <li><a href="#"><i class="ti-skype"></i></a></li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 main-section">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-info" data-toggle="dropdown">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <div class="row total-header-section">
                                            <div class="col-lg-6 col-sm-6 col-6">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>
                                            </div>
                        
                                            <?php $total = 0 ?>
                                            @foreach(session('cart') as $id => $details)
                                                <?php $total += $details['price'] * $details['quantity'] ?>
                                            @endforeach
                        
                                            <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                                            </div>
                                        </div>
                        
                                        @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                                <div class="row cart-detail">
                                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                        <img src="{{ $details['photo'] }}" />
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                        <p>{{ $details['name'] }}</p>
                                                        <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->


    <!-- banner part start-->
        @yield('content')
    <!-- banner part start-->

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