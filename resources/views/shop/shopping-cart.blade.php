@extends('layouts.master')

@section('title')
    Cart
@endsection

@section('content')

    <div class="container">
    @if (Session::has('cart'))
        <div class="row">
            <style type="text/css">
                .form{
                    width: 890px;
                    margin: 170px auto;
                }
            </style>
            <div class="form">
            <div class="col-sm-12 col-md-12 col-md-offset-6 col-sm-offset-6">
                <ul class="list-group">
                    @foreach ($products as $product)
                        <li class="list-group-item">
                            <p>Quantity : <strong>{{ $product['qty'] }} </strong> </p>
                            <hr>
                            <p>Apps Name : <strong> {{ $product['item']['title'] }}</strong></p>
                            <hr>    
                            <span class="label label-success">Price : <strong> Rp. {{ $product['price'] }} </strong></span>
                            <div class="btn-group">
                                <div style="padding-left: 20px">
                                    <a class="btn btn-primary" href="{{ route('product.reduceone', ['id' => $product['item']['id']]) }}">Reduce By 1</a>
                                    <a class="btn btn-primary" href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">Reduce By All</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        <br>
        <div class="row-6">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total : Rp. {{ $totalprice }}</strong>
            </div>
        </div>
        <hr>
        <div class="row-6">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
            </div>
        </div>
    @else
        <style type="text/css">
            .card{
                width: 400px;
                margin: 150px auto;
                padding-top: 20px;
                height: 350px;
                padding-bottom: 30px;
                align-items: center;
                justify-content: center;
                display: flex;  
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="card text-center shadow-lg">
                    {{-- <div class="col-md-1 col-md-offset-4"> --}}
                        <p style="font-size: 25px; color: orange; font-weight: 200; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">No Item in Cart!</p> 
                    {{-- </div> --}}
                </div>            
            </div>
        </div> 
    @endif
</div>
</div>
</div>
@endsection