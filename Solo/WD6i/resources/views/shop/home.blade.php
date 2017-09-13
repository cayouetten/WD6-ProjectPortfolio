@extends('layouts/master')

<!--TITLE-->
@section('title')
  Shop at WD6I - Laravel
@endsection

<!--CONTENT-->
@section('content')
	<div>
		@foreach($products->chunk(3) as $p)
			<div class="row">
				@foreach($p as $product)
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img src="{{ $product->imagePath }}" alt="..." class="image-responsive">
							<div class="caption">
								<h3>{{ $product->title }}</h3>
								<p class="description">{{ $product->description }}</p>
								<div class="clearfix">
									<div class="pull-left price">${{ $product->price }}</div>
									<a href="{{ route('product/addToCart', ['id'=> $product->id]) }}" class="btn btn-success pull-right" role="button">Add to Cart</a>
									<a href="{{ route('product/addToWishList', ['id'=> $product->id]) }}" class="btn btn-success pull-right" role="button">Add to Wish List</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		@endforeach
	</div>
@endsection