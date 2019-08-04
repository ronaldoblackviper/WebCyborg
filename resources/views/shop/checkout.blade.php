@extends('layouts.master')

@section('title')
    Checkout
@endsection

@section('content')
<style type="text/css">
    .card{
        width: 500px;
        margin: 50px auto;
        padding-top: 20px;
        padding-bottom: 30px;
        align-items: center;
        justify-content: center;
        display: flex;  
    }
</style>
<div class="container"> 
    <div class="row">
        <div class="card text-center shadow-lg">
            <div class="col-sm-6 col-md-12 col-md-offset-12 col-sm-offset-6">
                <h1 style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Checkout</h1><hr>
            <h4 style="font-family: Arial, Helvetica, sans-serif">Your Total : Rp. {{ $total }}</h4><br>
            @if (Session::has('error'))
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                        <div id="charge-message" class="alert alert-error">
                            {{ Session::get('error') }}
                        </div>
                    </div>
                </div>
            @endif
            {{-- <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">
                    {{ Session::get('error') }}
                </div> --}}
            <form action="{{ route('checkout') }}" method="POST" id="checkout-form">
                    <div class="row" style="justify-content: center">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="name">Name</label>
                            <input style="text-align: center" type="text" id="name" class="form-control" required name="name" placeholder="input your name ...">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input style="text-align: center" type="text" id="address" class="form-control" required name="address" placeholder="input your address ...">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="card-name">Card Holder Name</label>
                            <input style="text-align: center" type="text" id="card-name" class="form-control" required placeholder="input your card holder name ...">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="card-number">Credit Card Number</label>
                            <input style="text-align: center" type="text" id="card-number" class="form-control" required placeholder="input your credit card number ...">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="card-expiry-month">Expiration Month</label>
                                    <input style="text-align: center" type="text" id="card-expiry-month" class="form-control" required placeholder="input your expiration month ...">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="card-expiry-year">Expiration Year</label>
                                    <input style="text-align: center" type="text" id="card-expiry-year" class="form-control" required placeholder="input your expiration year ...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="card-cvc">CVC</label>
                            <input style="text-align: center" type="text" id="card-cvc" class="form-control" required placeholder="input your CVC ...">
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">Buy Now</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript" src="{{ URL::to('assets/js/checkout.js')}}"></script>
@endsection