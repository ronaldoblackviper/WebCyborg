@extends('layouts.master')

@section('title')
    Profile
@endsection

@section('content')  

<div class="container">
    <div class="row">
        <style type="text/css">
            .form{
                margin: 180px auto;
                width: 370px;
            }
        </style>
        <div class="form">
        <div class="col-md-12 col-md-offset-6">
            <h1>User Profile</h1>
            <hr>
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
                        <strong>Total Proce : Rp. {{ $order->cart->totalprice }}</strong>
                    </div>
                    <hr>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</div>
@endsection