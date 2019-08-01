@extends('layouts.master')

@section('title')
    Product
@endsection

@section('content')
<div class="container">
    @if (Session::has('success'))
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <div id="charge-message" class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
    @endif
    @foreach ($products->chunk(3) as $productChunk)
        @foreach ($productChunk as $product)
        
        <div class="container">
            <div class="row mt-5 ">
                    <div class="">
                        <img class="" src="{{ $product->imagePath }}">
                    </div>
                    <div class="col-6">
                        <h5 class="card-title" style="font-size: 25px">{{ $product->title }}</h5>
                        <br>
                        <p class="card-text" style="font-size: 18px">{{ $product->description }}</p>
                        <br>
                        <p>Rp. {{ $product->price }}</p>
                        <br>
                        <a href="{{ route('product.addToCart', ['$id' => $product->id]) }}" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
            </div>
            </div>
        @endforeach
    @endforeach
    <br><br>
</div>
@endsection