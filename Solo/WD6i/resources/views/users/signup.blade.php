@extends('layouts/master')

<!--TITLE-->
@section('title')
  Shop at WD6I - Laravel
@endsection

<!--CONTENT-->
@section('content')
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1>Sign Up</h1>
			
			@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $error)
						<p>{{ $error }}</p>
					@endforeach
				</div>
			@endif

			<form action="{{ route('users/signup') }}" method="post">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" id="email" name="email" class=form-control>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" id="password" name="password" class=form-control>
				</div>
				<button class="btn btn-primary" type="submit">Sign Up</button>
				{{ csrf_field() }}
			</form>
		</div>
	</div>
@endsection