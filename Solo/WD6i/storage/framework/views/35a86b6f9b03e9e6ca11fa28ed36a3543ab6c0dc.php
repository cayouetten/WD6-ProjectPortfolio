<!--TITLE-->
<?php $__env->startSection('title'); ?>
  Shop at WD6I - Laravel
<?php $__env->stopSection(); ?>

<!--CONTENT-->
<?php $__env->startSection('content'); ?>
	<?php if(Session::has('success')): ?>
		<div class="row">
			<div class="col-sm-6 col-md-4 col-sm-offset-6 col-md-offset-4">
				<div id="charge-message" class="alert alert-success">
					<?php echo e(Session::get('success')); ?>

				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php $__currentLoopData = $products->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="row">
			<?php $__currentLoopData = $p; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<img src="<?php echo e($product->imagePath); ?>" alt="..." class="image-responsive">
						<div class="caption">
							<h3><?php echo e($product->title); ?></h3>
							<p class="description"><?php echo e($product->description); ?></p>
							<div class="clearfix">
								<div class="pull-left price">$<?php echo e($product->price); ?></div>
								<a href="<?php echo e(route('product/addToCart', ['id'=> $product->id])); ?>" class="btn btn-success pull-right" role="button">Add to Cart</a>
								<a href="<?php echo e(route('product/addToWishList', ['id'=> $product->id])); ?>" class="btn btn-success pull-right" role="button">Add to Wish List</a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>