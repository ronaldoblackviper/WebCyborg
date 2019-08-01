@extends('layouts.master')

@section('title')
    Product
@endsection

@section('content')
<style>
.thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
    }

    .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
    }
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>
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
        <div class="row">
            @foreach ($productChunk as $product)    
                <div class="card col-sm-6 col-md-4" style="width: 18rem;">
                <img class="card-img-top" src="{{ $product->imagePath }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->title }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                        <p>Rp. {{ $product->price }}</p>
                    <a href="{{ route('product.addToCart', ['$id' => $product->id]) }}" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
            @endforeach
        </div>        
    @endforeach

    <div class="row text-center">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{ $product->imagePath }}" class="w3-image w3-greyscale-min" style="width:100%">
                    <p><strong>{{ $product->title}}</strong></p>
                    <p>{{ $product->description }}</p>
                    <p>Rp. {{ $product->price }}</p>
                    <a href="{{ route('product.addToCart', ['$id' => $product->id]) }}" class="btn btn-success">Add to cart</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="{{ $product->imagePath }}"  width="400" height="300">
                    <p><strong>San Francisco</strong></p>
                    <p>Yes, San Fran is ours</p>
                </div>
            </div>
        </div>
    </div>
@endsection