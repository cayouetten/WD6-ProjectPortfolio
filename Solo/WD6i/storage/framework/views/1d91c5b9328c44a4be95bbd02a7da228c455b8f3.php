<!--TITLE-->
<?php $__env->startSection('title'); ?>
  Shop at WD6I - Laravel
<?php $__env->stopSection(); ?>

<!--CONTENT-->
<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1>Sign Up</h1>
			
			<?php if(count($errors) > 0): ?>
				<div class="alert alert-danger">
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<p><?php echo e($error); ?></p>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			<?php endif; ?>

			<form action="<?php echo e(route('users/signup')); ?>" method="post">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" id="email" name="email" class=form-control>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" id="password" name="password" class=form-control>
				</div>
				<button class="btn btn-primary" type="submit">Sign Up</button>
				<?php echo e(csrf_field()); ?>

			</form>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>