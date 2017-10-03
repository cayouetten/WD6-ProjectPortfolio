<!--TITLE-->
<?php $__env->startSection('title'); ?>
  Shop at WD6I - Laravel
<?php $__env->stopSection(); ?>

<!--CONTENT-->
<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
			<h1>CHECKOUT</h1>
			<h3>Cart total: $<?php echo e($total); ?></h3>
			<div id="charge-error" class="alert alert-danger <?php echo e(!Session::has('error') ? 'hidden' : ''); ?>">
				<?php echo e(Session::get('error')); ?>

			</div>
			<form action="<?php echo e(route('checkout')); ?>" method="POST" id="checkout-form">
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
				<?php echo e(csrf_field()); ?>

				<button type="submit" class="btn btn-success">Checkout</button>
			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script type="text/javascript" src="<?php echo e(URL::to('src/js/checkout.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>