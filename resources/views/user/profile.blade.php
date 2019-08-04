@extends('layouts.master')

@section('title')
    Order
@endsection

@section('content')  
<style type="text/css">
    .card{
        width: 600px;
        height: auto;
        margin: 150px auto;
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
        <div class="col-md-10 col-md-offset-4">
            <h2>My Orders</h2>
            <hr>
            @foreach ($orders as $order)
                <div class="panel panel-default">
                    <div class="panel-body expand">
                        <ul class="list-group">
                            @foreach ($order->cart->items as $item)
                            <li class="list-group-item" style="font-size: 18px">
                                <span class="badge">Rp. {{ $item['price'] }}</span>
                                {{ $item['item']['title']}} | {{ $item['qty'] }} Apps
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <br>
                    <div class="panel-footer">
                        <strong>Total Price : Rp. {{ $order->cart->totalprice }}</strong>
                    </div>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</div>
@endsection