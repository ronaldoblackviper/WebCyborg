@extends('layouts.app')

@section('content')

  <link rel="stylesheet" href="discovershop/css/animate.css"/>
  <link rel="stylesheet" href="discovershop/css/style.css"/>

  <!-- product section -->
	<section class="product-section" id="halamanproduct">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img class="product-big-img" src="discovershop/img/single-product/1.jpg" alt="">
					</div>
					<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
						<div class="product-thumbs-track">
							<div class="pt active" data-imgbigurl="discovershop/img/single-product/1.jpg"><img src="discovershop/img/single-product/thumb-1.jpg" alt=""></div>
							<div class="pt" data-imgbigurl="discovershop/img/single-product/2.jpg"><img src="discovershop/img/single-product/thumb-2.jpg" alt=""></div>
							<div class="pt" data-imgbigurl="discovershop/img/single-product/3.jpg"><img src="discovershop/img/single-product/thumb-3.jpg" alt=""></div>
							<div class="pt" data-imgbigurl="discovershop/img/single-product/4.jpg"><img src="discovershop/img/single-product/thumb-4.jpg" alt=""></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title">Aplikasi Project Master</h2>
					<h3 class="p-price">$39.90</h3>
					<h4 class="p-stock">Available: <span>In Stock</span></h4>
					<div class="quantity">
						<p>Quantity</p>
						<div class="pro-qty"><input type="text" value="1"></div>
						<div>Year(s)</div>
                    </div>
					<a href="/Cart" class="site-btn">SHOP NOW</a>
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
									<p>Approx length 66cm/26" (Based on a UK size 8 sample)</p>
									<p>Mixed fibres</p>
									<p>The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 5'8"</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">care details </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<img src="./img/cards.png" alt="">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingThree">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">
									<h4>7 Days Returns</h4>
									<p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  <!-- product section end -->
  
  <!--====== Javascripts & Jquery ======-->
	<script src="discovershop/js/jquery-3.2.1.min.js"></script>
	<script src="discovershop/js/jquery.slicknav.min.js"></script>
	<script src="discovershop/js/owl.carousel.min.js"></script>
	<script src="discovershop/js/jquery.nicescroll.min.js"></script>
	<script src="discovershop/js/jquery.zoom.min.js"></script>
	<script src="discovershop/js/jquery-ui.min.js"></script>
	<script src="discovershop/js/main.js"></script>
@endsection