@extends('layouts/master')

<!--TITLE-->
@section('title')
  Shop at WD6I - Laravel
@endsection

<!--CONTENT-->
@section('content')
	<div class="row">
		<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
			<h1>CHECKOUT</h1>
			<h3>Cart total: ${{ $total }}</h3>
			<div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">
				{{ Session::get('error') }}
			</div>
			<form action="{{ route('checkout') }}" method="POST" id="checkout-form">
				<div class="row">
					<div class="col-xs-12">
						<div class="form-group">
							<label for="name">Name</label>
							<input name="name" type="text" id="name" class="form-control" required>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="address">Address</label>
							<input name="address" type="text" id="address" class="form-control" required>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="card-name">Card Holder Name</label>
							<input type="text" id="card-name" class="form-control" required>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="form-group">
							<label for="card-number">Credit Card Number</label>
							<input type="text" id="card-number" class="form-control" required>
						</div>
					</div>
					<div class="col-xs-12">
						<div class="row">
							<div class="col-xs-4">
								<div class="form-group">
									<label for="card-expire-month">Expire MM</label>
									<input type="text" id="card-expire-month" class="form-control" required>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="form-group">
									<label for="card-expire-year">YYYY</label>
									<input type="text" id="card-expire-year" class="form-control" required>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="form-group">
									<label for="card-cvc">CVC</label>
									<input type="text" id="card-cvc" class="form-control" required>
								</div>
							</div>
						</div>
					</div>
				</div>
				{{ csrf_field() }}
				<button type="submit" class="btn btn-success">Checkout</button>
			</form>
		</div>
	</div>
@endsection

@section('scripts')
	<script type="text/javascript" src="https://js.stripe.com/v3/"></script>
	<script type="text/javascript" src="{{ URL::to('src/js/checkout.js') }}"></script>
@endsection