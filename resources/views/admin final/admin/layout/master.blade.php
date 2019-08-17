<!DOCTYPE html>
<html lang="en">
<head>
 
<!-- Title Page-->
  <title>Admin page..</title>

  

  <!-- Main CSS-->
    <link href="{{asset('template/assets/css/theme.css')}}" rel="stylesheet" media="all">

  <!-- cool admin css -->
    <link href="{{asset('template/assets/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/assets/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/assets/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('template/assets/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('template/assets/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/assets/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/assets/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/assets/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/assets/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('template/assets/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('template/assets/css/theme.css')}}" rel="stylesheet" media="all">


  <!--css klorofil-->
  <link rel="stylesheet" href="{{asset('template/assets2/vendor/bootstrap/css/bootstrap.min.css')}}">

	
	

<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}
@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;
animation:chartjs-render-animation 0.001s;
}</style>
</head>

<body>

        @include('admin.layout._sidebar')
        @include('admin.layout._navbar')
        @yield('content')
        
  <script src="{{asset('template/assets2/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('template/assets2/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  
  <!-- Jquery JS-->
  <script src="{{asset('template/assets/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('template/assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('template/assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('template/assets/vendor/slick/slick.min.js')}}">
    </script>

    <script src="{{asset('template/assets/vendor/wow/wow.min.js')}}"></script>
    
    <!--problem-->
    <script src="{{asset('template/assets/vendor/animsition/animsition.min.js')}}"></script>

    <script src="{{asset('template/assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>

    <script src="{{asset('template/assets/vendor/counter-up/jquery.waypoints.min.j')}}s"></script>
    <script src="{{asset('template/assets/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>

    
    <script src="{{asset('template/assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
    
    <script src="{{asset('template/assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('template/assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    
    <script src="{{asset('template/assets/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('template/assets/js/main.js')}}"></script>
	
  
  

</body>
</html>