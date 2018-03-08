@extends('app.layouts.main')
@section('content')
<div class="widget-user-header bg-black" style="background: url('/theme/dist/img/photo1.png') center center;">
  &nbsp;
</div>
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Merchant Name</h1>
    <p class="lead text-muted">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
      <p>
        &nbsp;
      </p>
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="text-center">Please choose gift certificate 
          amount &amp; quantity</p><br />
        </div>
        <div class="form-wrapper col-md-12">
          <form>
            <div class="form-group row">
              <label for="amount" class="col-sm-6 col-form-label text-center">
                <h5>P500</h5>
              </label>
              <div class="col-sm-4">
                <input type="text" class="text-center form-control" value="0" placeholder="1">
              </div>
            </div>
            <div class="form-group row">
              <label for="amount" class="col-sm-6 col-form-label text-center">
                <h5>P1000</h5>
              </label>
              <div class="col-sm-4">
                <input type="text" class="text-center form-control" value="0" placeholder="1">
              </div>
            </div>
            <div class="form-group row">
              <label for="amount" class="col-sm-6 col-form-label text-center">
                <h5>Lunch for 2</h5>
              </label>
              <div class="col-sm-4">
                <input type="text" class="text-center form-control" value="0" placeholder="1">
              </div>
            </div>
            <br />
            <div class="form-group text-center">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                &nbsp;&nbsp;
              <button type="button" class="btn btn-primary">Add to cart</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <section class="jumbotron text-center">
  <div class="container">
    <p class="lead text-muted">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni
      <p>
        &nbsp;
      </p>
    </div>
  </section>
@endsection
@include('app.blocks.modal-vouchers')