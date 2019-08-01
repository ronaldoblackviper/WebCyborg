@extends('layouts.master')

@section('title')
    Profile
@endsection

@section('content')    
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>User Profile</h1>
            <hr>
            <h2>My Orders</h2>
            @foreach ($orders as $order)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-group">
                            @foreach ($order->cart->items as $item)
                                <li class="list-group-item">
                                <span class="badge">Rp. {{ $item['price'] }}</span>
                                {{ $item['item']['title']}} | {{ $item['qty'] }} Apps
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <strong>Total Proce : Rp. {{ $order->cart->totalprice }}</strong>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection