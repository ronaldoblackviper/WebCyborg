@extends('layouts.layout')
 
@section('title', 'Products')
 
@section('content')
 
    <div class="container products">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-xs-18 col-sm-8 col-md-3">
                    <img src="{{$product->photo}}" width="500" height="300">
                    <div class="caption">
                        <h4>{{$product->name}}</h4>
                        <p>{{str_limit(strtolower($product->description),50)}}</p>
                        <p><strong>Price: </strong>Rp. {{$product->price}}</p>
                        <p class="btn-hoder"><a href="{{url('add-to-cart/'.$product->id)}}" class="btn bnt-warning btn-block text-center" role="button">Add to cart</a></p>
                    </div>
                </div>
            @endforeach
        </div><!-- End row -->
    </div>
 
@endsection