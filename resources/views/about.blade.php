@extends('layouts.master')

@section('title')
    About Us
@endsection

@section('content')
    <!--====== Style css ======-->

    <div class="site-section" id="about-section" style="margin: 30px auto;">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <br><br><br>
                <h2 class="section-title mb-3" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">About Us</h2>
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
                <div class="col-lg-5 ml-auto pl-lg-5">
                    <h2 class="text-black mb-4" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Sekilas tentang kami</h2>
                    <p class="mb-4">Kami merupakan solusi kebutuhan IT Anda. Dengan komunikasi yang baik dengan client, kami yakin setiap sistem yang kami buat dapat berjalan dengan maksimal dan pastinya membantu mempermudah Anda dalam segala hal.</p>
                    <p class="mb-4">Alamat kantor kami : <a href="https://goo.gl/maps/d8yvjjRhFhWW7NUq7">Jalan HBR Motik Km8 B1-3, Karya Baru, Kec. Alang-Alang Lebar, Kota Palembang, Sumatera Selatan 30151</a></p>
                </div>
            </div><br><br>
        </div>
    </div>

@endsection
