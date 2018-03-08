<div class="modal-content-inner">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">{{ $merchant->name }}</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <form method="POST" class="add-cart-form" action="{{ url('/cart/add') }}">
    <input type="hidden" name="mid" value="{{ $merchant->id }}">
    <div class="modal-body">
      <div style="display: none;" class="alert" id="add-cart-alert" role="alert">
        &nbsp;
      </div>
      @if( count($merchant->vouchers) > 0 )
      <p class="text-center">Please choose gift certificate 
      amount &amp; quantity</p><br />
      {{ csrf_field() }}
      @foreach ($merchant->vouchers as $vouchers)
      @if( $vouchers->denominations )
      @foreach ($vouchers->denominations as $denomination)
      <div class="form-group row">
        <label for="amount" class="col-sm-6 col-form-label text-center">
          <h5>{{ $denomination->display_name }}</h5>
        </label>
        <div class="col-sm-4">
          <input autocomplete="off" type="text" name="cart-qty[{{ $denomination->id }}]" class="text-center form-control" value="0" placeholder="1">
        </div>
      </div>
      @endforeach
      @else
      <p class="text-danger">Oops! No available vouchers as of this moment.</p>
      @endif
      @endforeach
      
      @else
      <p class="text-danger">Oops! No available vouchers as of this moment.</p>
      @endif
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      <button type="submit" id="modal-vouchers-add" class="btn app-btn app-btn-loading btn-primary add-cart">
        <span class="default">Add to cart</span>
        <span class="loading">Please wait...</span>
      </button>
    </div>
  </form>
</div>