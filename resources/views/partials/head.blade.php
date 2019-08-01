<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand mb-0 h1" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a class="nav-link" href="{{ route('product.home') }}">Home</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{ route('product.index') }}">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/About">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/sendemail">Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('product.shoppingCart') }}">
          <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
          <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user" aria-hidden="true"></i> User Account
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        @if(Auth::check())
          <a class="dropdown-item" href="{{ route('user.profile') }}">User Profile</a>
          <div class="dropdown-divider"></div> 
          <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
        @else
          <a class="dropdown-item" href="{{ route('user.login') }}">Login</a>
          <a class="dropdown-item" href="{{ route('user.signup') }}">Sign Up</a>  
        @endif
        </div>
      </li>
    </ul>
  </div>
</nav>