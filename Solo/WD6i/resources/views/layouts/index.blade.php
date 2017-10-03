@extends('layouts/master')

<!--TITLE-->
@section('title')
  Shop at WD6I - Laravel
@endsection

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> wish-list
<?php
// Include stripe-php as you usually do, either with composer as shown,
// or with a direct require, as commented out.
require_once("../vendor/autoload.php");
// require_once("/path/to/stripe-php/init.php");

\Stripe\Stripe::setApiKey("sk_test_BQokikJOvBiI2HlWgH4olfQ2");
\Stripe\Stripe::$apiBase = "https://api-tls12.stripe.com";
try {
  \Stripe\Charge::all();
  echo "TLS 1.2 supported, no action required.";
} catch (\Stripe\Error\ApiConnection $e) {
  echo "TLS 1.2 is not supported. You will need to upgrade your integration.";
}

?>

<<<<<<< HEAD
=======
>>>>>>> checkout
=======
>>>>>>> wish-list
<!-- SPLASH ON FIRST LANDING -->
<div class="splash-wrap">
	<div id="carousel-wrap">
		<!-- BOOTSTRAP CAROUSEL -->
		<div id="my-carousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45" alt="Splash Image">
		      <div class="container">
		        <div class="carousel-caption">
			        <h1>WD6-International</h1>
					<h2><em>Academic Resources For All Levels</em></h2>
					<a href="{{ route('product/home') }}" class="btn btn-info go-to-content">Continue to Inventory</a>
					<a href="{{ route('users/signin') }}" class="btn btn-info go-to-content">Sign In</a>
		        </div>
		      </div>
		    </div>

		    <div class="item">
		      <img src="https://images.unsplash.com/photo-1431608660976-4fe5bcc2112c" alt="Splash Image">
					<div class="container">
		        <div class="carousel-caption">
			        <h1>WD6-International</h1>
							<h2><em>Guaranteed Buying and Selling Prices</em></h2>
							<a href="{{ route('product/home') }}" class="btn btn-info go-to-content">Continue to Inventory</a>
		        </div>
		      </div>    
		    </div>

		    <div class="item">
		      <img src="https://images.unsplash.com/photo-1485322551133-3a4c27a9d925" alt="Splash Image">
					<div class="container">
		        <div class="carousel-caption">
			        <h1>WD6-International</h1>
							<h2><em>Digital and Physical Formats Available</em></h2>
							<a href="{{ route('product/home') }}" class="btn btn-info go-to-content">Continue to Inventory</a>
		        </div>
		      </div>
		    </div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#my-carousel" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#my-carousel" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		 </div>
	</div>
</div>