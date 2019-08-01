@extends('layouts.master')

@section('title')
    Cart
@endsection

@section('content')
    @if (Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach ($products as $product)
                        <li class="list-group-item">
                            <span class="badge">Quantity : {{ $product['qty'] }}</span>
                            <hr>
                            <strong>Apps Name : {{ $product['item']['title'] }}</strong>
                            <hr>    
                            <span class="label label-success">Price : Rp. {{ $product['price'] }}</span>
                            {{-- <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toogle" data-toogle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Reduce By 1</a>
                                    <a class="dropdown-item" href="#">Reduce By All</a>
                                </div>
                            </div> --}}
                            <div class="btn-group">
                                <div>
                                    <a class="btn btn-primary" href="{{ route('product.reduceone', ['id' => $product['item']['id']]) }}">Reduce By 1</a>
                                    <a class="btn btn-primary" href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">Reduce By All</a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total : Rp. {{ $totalprice }}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
            </div>
        </div>
    @else    
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Cart!</h2>
            </div>
        </div>
    @endif
        
@endsection