@extends('layouts/master')

<!--TITLE-->
@section('title')
  Shop at WD6I - Laravel
@endsection

<!--CONTENT-->
@section('content')
	@if(Session::has('wishList'))
		<div class="row">
			<div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
				<ul class="list-group">
					@foreach($products as $product)
						<li class="list-group-item">
							<span class="badge">{{ $product['qty'] }}</span>
							<strong>{{ $product['item']['title'] }}</strong>
							<span class="label label-success">{{ $product['price'] }}</span>
							<div class="btn-group">
								<button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
								<ul class="dropdown-menu">
									<!-- ADD TO CART FROM WISH LIST -->
<<<<<<< HEAD
<<<<<<< HEAD
									<li><a href="{{ route('product/addToCart', ['id'=> $product['item']['id']]) }}" role="button">Add to Cart</a></li>
									<!-- REMOVE FROM WISH LIST -->
									<li><a href="{{ route('product/removeFromWishList', ['id'=> $product['item']['id']]) }}">Remove</a></li>
=======
									<li><a href="{{ route('product/addToCartFromWishlist', ['id'=> $product['item']['id']]) }}" role="button">Add to Cart</a></li>
									<!-- REMOVE FROM WISH LIST -->
									<li><a href="{{ route('product/removeFromWishList', ['id'=> $product['item']['id']]) }}">Remove</a></li>
									<li><a href="{{ route('product/removeAllWishlistItem', ['id'=> $product['item']['id']]) }}">Remove All</a></li>
>>>>>>> checkout
=======
									<li><a href="{{ route('product/addToCart', ['id'=> $product['item']['id']]) }}" role="button">Add to Cart</a></li>
									<!-- REMOVE FROM WISH LIST -->
									<li><a href="{{ route('product/removeFromWishList', ['id'=> $product['item']['id']]) }}">Remove</a></li>
>>>>>>> wish-list
								</ul>
							</div>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
				<strong>Total: ${{ $totalPrice }}</strong>
			</div>
		</div>
	@else
		<div class="row">
			<div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
				<h2>No items in wish list</h2>
			</div>
		</div>
	@endif
@endsection