@extends('app.layouts.main')
@section('content')
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">LivEver</h1>
    <p class="lead text-muted">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
      <p>
        &nbsp;
      </p>
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">

      @if( $merchants )
      <div class="row">
        @foreach ($merchants as $merchant)
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <a href="{{ url('merchants/slug') }}">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
              </a>
              <div class="card-body">
                <a href="{{ url('merchants/slug') }}">
                  <h4>{{ $merchant->name }}</h4>
                </a>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <button data-mid="{{ $merchant->id }}" id="cart-add-popup-{{ $merchant->id }}" type="button" class="btn app-btn app-btn-loading btn-primary my-2 cart-add-popup cart-add-popup-{{ $merchant->id }}">
                    <span class="default">Add to cart</span>
                    <span class="loading">Please wait...</span>
                  </button>
                  <small class="text-muted">&nbsp;</small>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      @else

      @endif
    </div>
  </div>
  @endsection
  @include('app.blocks.modal-vouchers')