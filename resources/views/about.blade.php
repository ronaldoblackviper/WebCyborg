@extends('layouts.app')

@section('content')
      <!--====== Favicon Icon ======-->
      <link rel="shortcut icon" href="landing_v1/images/favicon.png" type="image/png">

      <!--====== Bootstrap css ======-->
      <link rel="stylesheet" href="landing_v1/css/bootstrap.min.css">

      <!--====== Line Icons css ======-->
      <link rel="stylesheet" href="landing_v1/css/LineIcons.css">

      <!--====== Magnific Popup css ======-->
      <link rel="stylesheet" href="landing_v1/css/magnific-popup.css">

      <!--====== Default css ======-->
      <link rel="stylesheet" href="landing_v1/css/default.css">

      <!--====== Style css ======-->
      <link rel="stylesheet" href="landing_v1/css/style.css">

    <link rel="stylesheet" href="assets2/fonts/icomoon/style.css">

    <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/css/jquery-ui.css">
    <link rel="stylesheet" href="assets2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets2/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets2/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="assets2/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="assets2/gcss/bootstrap-datepicker.css">


    <link rel="stylesheet" href="assets2/css/aos.css">

    <link rel="stylesheet" href="assets2/css/style.css">

    <div class="site-section bg-light" id="about-section">
        <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
            <h2 class="section-title mb-3">About Us</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-6">
                <div class="contact-map ">
                    <div class="gmap_canvas">
                        <iframe id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.583312842122!2d104.70799901453913!3d-2.935399540475509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75dcab69a601%3A0x29b6ddf68bd31b6b!2sCYBORG+IT+CENTER+(OFFICE)!5e0!3m2!1sen!2sid!4v1563175821726!5m2!1sen!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>                            
                    </div>
                </div> <!-- contact map -->
            </div>
            {{-- <div class="col-lg-6">
            <img src="assets2/images/about.jpg" alt="Image" class="img-fluid mb-5 mb-lg-0 rounded shadow">
            </div> --}}
            <div class="col-lg-5 ml-auto pl-lg-5">
            <h2 class="text-black mb-4">Sekilas tentang kami</h2>
            <p class="mb-4">Kami merupakan solusi kebutuhan IT Anda. Dengan komunikasi yang baik dengan client, kami yakin setiap sistem yang kami buat dapat berjalan dengan maksimal dan pastinya membantu mempermudah Anda dalam segala hal.</p>
            <p class="mb-4">Alamat kantor kami : <a href="https://goo.gl/maps/d8yvjjRhFhWW7NUq7">Jalan HBR Motik Km8 B1-3, Karya Baru, Kec. Alang-Alang Lebar, Kota Palembang, Sumatera Selatan 30151</a></p>
        </div>
        </div>
        
        </div>
    </div>

    <div class="form-group">
        @if (Request::has('previous'))
            <input type="hidden" name="previous" value="{{ Request::get('previous') }}">
        @else
            <input type="hidden" name="previous" value="{{ URL::previous() }}">
        @endif
    </div>

@endsection
