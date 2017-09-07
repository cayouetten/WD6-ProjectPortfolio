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
      <a class="navbar-brand" href="{{ route('product/index') }}">WD6I</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="{{ route('product/shoppingCart') }}">
            <i class="fa fa-shopping-cart"></i> Cart
            <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> User <span class="caret"></span></a>
          <ul class="dropdown-menu">
          @if(Auth::check())
            <li><a href="{{ route('users/profile') }}">Profile</a></li>
            <li><a href="{{ route('users/logout') }}">Logout</a></li>
          @else
            <li><a href="{{ route('users/signup') }}">Sign Up</a></li>
            <li><a href="{{ route('users/signin') }}">Sign In</a></li>
          @endif
            
            
            {{ csrf_field() }}
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>