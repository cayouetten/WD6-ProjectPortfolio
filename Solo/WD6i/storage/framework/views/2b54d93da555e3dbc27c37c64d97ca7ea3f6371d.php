<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
<<<<<<< HEAD:Solo/WD6i/storage/framework/views/2b54d93da555e3dbc27c37c64d97ca7ea3f6371d.php
      <a class="navbar-brand" href="<?php echo e(route('product/home')); ?>">WD6I</a>
=======
      <a class="navbar-brand" href="{{ route('product/home') }}">WD6I</a>
>>>>>>> wish-list:Solo/WD6i/resources/views/partials/header.blade.php
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="<?php echo e(route('product/shoppingCart')); ?>">
            <i class="fa fa-shopping-cart"></i> Cart
            <span class="badge"><?php echo e(Session::has('cart') ? Session::get('cart')->totalQty : ''); ?></span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(route('product/wishList')); ?>">
            <i class="fa fa-heart"></i> Wish List
            <span class="badge"><?php echo e(Session::has('wishList') ? Session::get('wishList')->totalQty : ''); ?></span>
          </a>
        </li>
        <li>
          <a href="{{ route('product/wishList') }}">
            <i class="fa fa-heart"></i> Wish List
            <span class="badge">{{ Session::has('wishList') ? Session::get('wishList')->totalQty : '' }}</span>
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <?php if(Auth::check()): ?>
            <li><a href="<?php echo e(route('users/profile')); ?>">Profile</a></li>
            <li><a href="<?php echo e(route('users/logout')); ?>">Logout</a></li>
          <?php else: ?>
            <li><a href="<?php echo e(route('users/signup')); ?>">Sign Up</a></li>
            <li><a href="<?php echo e(route('users/signin')); ?>">Sign In</a></li>
          <?php endif; ?>
            
            
            <?php echo e(csrf_field()); ?>

          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>