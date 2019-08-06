@extends('layouts.master')

@section('title')
    Product
@endsection

@section('content')
<style type="text/css">
    .card{
        width: 890px;
        margin: 50px auto;
        justify-content: center;
        display: flex;  
    }
</style>
@if (Session::has('success'))
<div class="row text-center" style="justify-content: center;">
    <div class="col-sm-12 col-md-12 col-md-offset-12 col-sm-offset-12">
        <div id="charge-message" class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    </div>
</div>
@endif
@foreach ($products->chunk(3) as $productChunk)
    @foreach ($productChunk as $product)
        <div class="container">
            <div class="row">
                <div class="card mx-auto shadow-lg">
                    <img class="card-img-top" src="{{ $product->imagePath }}" alt="Card image top">
                    <div class="card-body">
                        <h3 class="card-title" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">{{ $product->title }}</h3><br>
                        <h4 class="card-subtitle" style="font-family: Arial, Helvetica, sans-serif">{{ $product->description }}</h4><br>
                        <p class="card-text" style="font-size: 17px">Rp. {{ $product->price }}</p><br>
                        <a href="{{ $product->docPath }}" class="btn btn-primary" download>Download Dokumen</a><br><br>
                        <a href="{{ route('product.addToCart', ['$id' => $product->id]) }}" class="btn btn-success">Add to cart</a>
                    </div>
                </div>   
            </div>
        </div>
    @endforeach
@endforeach
@endsection