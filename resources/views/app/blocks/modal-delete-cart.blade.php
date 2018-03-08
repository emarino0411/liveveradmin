<div class="modal fade" id="modal-cart-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-content-inner">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-cart-delete-title">&nbsp;</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" id="delete-cart-form" class="delete-cart-form" action="{{ url('cart/delete') }}">
          <input type="hidden" name="rowId" id="delete-rowId" value="">
          {{ csrf_field() }}
          <div class="modal-body">
            Are you sure you want to delete this voucher?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" id="modal-cart-delete-action" class="btn app-btn app-btn-loading btn-primary add-cart">
              <span class="default">Confirm</span>
              <span class="loading">Please wait...</span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>