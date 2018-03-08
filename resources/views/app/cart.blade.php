@extends('app.layouts.main')
@section('content')
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Shopping Cart</h1>
    <p class="lead text-muted">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      <p>
        &nbsp;
      </p>
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">
      <div style="display: none;" class="alert" id="add-cart-alert" role="alert">
        &nbsp;
      </div>
      @if (\Session::has('error'))
      <div class="alert alert-danger" role="alert">
        {!! \Session::get('error') !!}
      </div>
      @endif
      @if( count(Cart::content()) > 0 )
      <div class="row">
        <div class="col-md-12">
          <p class="text-center">Please choose gift certificate 
          amount &amp; quantity</p><br />
        </div>
        <div class="form-wrapper col-md-12">
          <form id="update-all-cart-form" class="update-all-cart-form">
            {{ csrf_field() }}
            @foreach (Cart::content() as $denomination => $item)
            <div class="form-group row">
              <label for="amount" class="col-sm-5 col-form-label text-center">
                <h5><small data-name="{{ $item->name }}" data-rid="{{ $denomination }}" style="cursor: pointer;" class="remove-cart remove-cart-{{ $denomination }} oi oi-circle-x text-danger" title="Remove" aria-hidden="true"></small> 
                  {{ $item->name }}</h5>
                </label>
                <div class="col-sm-2">
                  <input type="text" name="cart-qty[{{ $denomination }}]" class="text-center form-control" value="{{ $item->qty }}" placeholder="1">
                </div>
                <label for="amount" class="col-sm-5 col-form-label text-center">
                  <h5>P{{ number_format($item->price, 2) }}</h5>
                </label>
              </div>
              @endforeach
              <div class="form-group row">
                <label for="amount" class="col-sm-5 col-form-label text-center">
                  <h5>&nbsp;</h5>
                </label>
                <div class="col-sm-2 text-right col-form-label">
                  <h5 class="">TOTAL</h5>
                </div>
                <label for="amount" class="col-sm-5 col-form-label text-center">
                  <h5>P{{ Cart::subtotal() }}</h5>
                </label>
              </div>
              <br />
              <div class="form-group text-center">
                <button type="button" id="cart-shopping" class="btn app-btn-loading app-btn btn-secondary" data-dismiss="modal">Continue Shopping</button>
                &nbsp;&nbsp;
                <button type="button" id="cart-checkout" class="btn app-btn-loading app-btn btn-primary">Proceed to Checkout</button>
              </div>
            </form>
          </div>
        </div>
        @else
        <div class="text-center">
          <p class="text-danger  text-center">Oops! No Vouchers added to cart as of this moment.</p>
          <a href="{{ url('') }}">
            <button  type="button" class="btn btn-primary my-2 cart-add-popup cart-add-popup-1">
              Continue Shopping
            </button>
          </a>
        </div>
        @endif
      </div>
    </div>
    @endsection
    @include('app.blocks.modal-delete-cart')