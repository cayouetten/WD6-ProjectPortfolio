<!--TITLE-->
<?php $__env->startSection('title'); ?>
  Shop at WD6I - Laravel
<?php $__env->stopSection(); ?>

<!--CONTENT-->
<?php $__env->startSection('content'); ?>
	<?php if(Session::has('wishList')): ?>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
				<ul class="list-group">
					<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="list-group-item">
							<span class="badge"><?php echo e($product['qty']); ?></span>
							<strong><?php echo e($product['item']['title']); ?></strong>
							<span class="label label-success"><?php echo e($product['price']); ?></span>
							<div class="btn-group">
								<button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
								<ul class="dropdown-menu">
									<!-- ADD TO CART FROM WISH LIST -->
									<li><a href="<?php echo e(route('product/addToCart', ['id'=> $product['item']['id']])); ?>" role="button">Add to Cart</a></li>
									<!-- REMOVE FROM WISH LIST -->
									<li><a href="#">Remove One</a></li>
									<li><a href="#">Remove All</a></li>
								</ul>
							</div>
						</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
				<strong>Total: $<?php echo e($totalPrice); ?></strong>
			</div>
		</div>
	<?php else: ?>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
				<h2>No items in wish list</h2>
			</div>
		</div>
	<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>