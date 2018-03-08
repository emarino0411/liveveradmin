<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <a href="{{ url('cart') }}">
            <h5 class="text-white">My Cart <sup style="display: {{ ( Cart::count() > 0 ) ? 'inline-block' : 'none' }};" id="cart-count" class="cart-count badge badge-danger"><small>{{ Cart::count() }}</small></sup></h5>
          </a>  
          <a href="{{ url('checkout') }}">
           <h5 class="text-white">Checkout</h5>
          </a>
          <a href="{{ url('') }}">
           <h5 class="text-white">Vouchers</h5>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark box-shadow">
    <div class="container d-flex justify-content-between">
      <a href="{{ url('') }}" class="navbar-brand d-flex align-items-center">
        <strong>LivEver</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>