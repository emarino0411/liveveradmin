@extends('app.layouts.main')
@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Checkout</h1>
        <p class="lead text-muted">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        <p>
            &nbsp;
        </p>
    </div>
</section>
<form action="{{ route('checkout.process') }}" method="post">
{{ csrf_field() }}
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 text-center">
                <h5 class="text-center">Enter Recipient Details</h5>
                <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</small>
                <br />
                <br />
            </div>
            <div class="form-wrapper col-md-6">
                
                    <div class="form-group row">
                        <label for="recipient-name">Recipient's Name</label>
                        <input type="text" class="form-control" id="recipient-name" name="recipient_name">
                    </div>
                    <div class="form-group row">
                        <label for="message">Message for recipient</label>
                        <textarea class="form-control" id="message" rows="3"></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="exampleFormControlTextarea1">How do you want us to send this eVoucher?</label>
                        <div class="form-control">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="delivery_method" id="delivery_email" value="email">
                                <label class="form-check-label" for="inlineRadio1">Email</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="delivery_method" id="delivery_sms" value="sms">
                                <label class="form-check-label" for="inlineRadio2">SMS</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="delivery_method" id="both" value="both">
                                <label class="form-check-label" for="inlineRadio3">Both</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="recipient-email">Recipient's Email</label>
                        <input type="email" class="form-control" id="recipient-email" name="recipient_email">
                    </div>
                    <div class="form-group row">
                        <label for="recipient-mobile">Recipient's Mobile</label>
                        <input type="text" class="form-control" id="recipient-mobile" name="recipient_mobile">
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="album py-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 text-center">
                <h5 class="text-center">Enter Sender Details</h5>
                <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</small>
                <br />
                <br />
            </div>
            <div class="form-wrapper col-md-6">
                <div class="form-group row">
                    <label for="sender-name">Sender's Name</label>
                    <input type="text" class="form-control" id="sender-name" name="biller_name">
                </div>
                <div class="form-group row">
                    <label for="sender-email">Sender's Email</label>
                    <input type="text" class="form-control" id="sender-email" name="biller_email">
                </div>
                <div class="form-group row">
                    <label for="sender-mobile">Sender's Mobile</label>
                    <input type="text" class="form-control" id="sender-mobile" name="biller_mobile">
                </div>
                <div class="form-group row">
                    <label for="inputState">Country</label>
                    <select id="inputState" class="form-control" name="biller_country">
                        <option value="PH" selected>Philippines</option>
                        <option>...</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h5 class="text-center">Review Order</h5>
                <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</small>
                <br />
                <br />
            </div>
            <div class="form-wrapper col-md-12">
                    <div class="form-group row">
                        <label for="amount" class="col-sm-5 col-form-label text-center">
                            <h5>Maxs P500</h5>
                        </label>
                        <div class="col-sm-2 text-center">
                            <h6>2</h6>
                        </div>
                        <label for="amount" class="col-sm-5 col-form-label text-center">
                            <h5>P1000.00</h5>
                        </label>
                    </div>
                    <div class="form-group row">
                        <label for="amount" class="col-sm-5 col-form-label text-center">
                            <h5>Pancake House P500</h5>
                        </label>
                        <div class="col-sm-2 text-center">
                            <h6>1</h6>
                        </div>
                        <label for="amount" class="col-sm-5 col-form-label text-center">
                            <h5>P1000.00</h5>
                        </label>
                    </div>
                    <div class="form-group row">
                        <label for="amount" class="col-sm-5 col-form-label text-center">
                            <h5>Yakimix Lunch for 2</h5>
                        </label>
                        <div class="col-sm-2 text-center">
                            <h6>5</h6>
                        </div>
                        <label for="amount" class="col-sm-5 col-form-label text-center">
                            <h5>P1000.00</h5>
                        </label>
                    </div>
                    <div class="form-group row">
                        <label for="amount" class="col-sm-5 col-form-label text-center">
                            <h5></h5>
                        </label>
                        <label class="col-sm-2 col-form-label text-center">
                            <h5>TOTAL</h5>
                        </label>
                        <label for="amount" class="col-sm-5 col-form-label text-center">
                            <h5>P3000.00</h5>
                        </label>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="album py-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-12 text-center">
                <h5 class="text-center">Payment Details</h5>
                <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</small>
                <br />
                <br />
            </div>
            <div class="form-wrapper col-md-6">
                    <div class="form-group row">
                        <label for="exampleFormControlTextarea1">Choose a Payment method</label>
                        <div class="form-control">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="delivery_email" value="visa_mastercard">
                                <label class="form-check-label" for="inlineRadio1">Visa/Mastercard</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="delivery_sms" value="711">
                                <label class="form-check-label" for="inlineRadio2">7-11</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="delivery_both" value="payoneer">
                                <label class="form-check-label" for="inlineRadio3">Payoneer</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="delivery_both" value="paymaya">
                                <label class="form-check-label" for="inlineRadio3">Pay Maya</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" id="delivery_both" value="paypal">
                                <label class="form-check-label" for="inlineRadio3">Pay Pal</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="form-control">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="payment_method" id="delivery_both" value="paypal">
                                <label class="form-check-label" for="inlineRadio3">I agree with the Terms &amp; Conditions.</label>
                            </div>
                        </div>
                    </div>
                    <br />
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary col-md-12">Proceed to Payment</button>
                    </div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
@include('app.blocks.modal-vouchers')