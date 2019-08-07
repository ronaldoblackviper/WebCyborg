@extends('layouts.master')

@section('title')
    Product Direct
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
{{-- @foreach ($products->chunk(3) as $productChunk) --}}
    {{-- @foreach ($products as $product) --}}
        {{-- @if ($productChunk->id == $product->$id) --}}
            <div class="container">
                <div class="row">
                    <div class="card mx-auto shadow-lg">
                        <img class="card-img-top" src="/{{ $products->imagePath }}" alt="Card image top">
                        <div class="card-body">
                            <h3 class="card-title" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">{{ $products->title }}</h3><br>
                            <h4 class="card-subtitle" style="font-family: Arial, Helvetica, sans-serif">{{ $products->description }}</h4><br>
                            <p class="card-text" style="font-size: 17px">Rp. {{ $products->price }}</p><br>
                            <a href="{{ $products->docPath }}" class="btn btn-primary" download>Download Dokumen</a><br><br>
                            <a href="{{ route('product.addToCart', ['$id' => $products->id]) }}" class="btn btn-success">Add to cart</a>
                        </div>
                    </div>   
                </div>
            </div>
        {{-- @endif --}}
    {{-- @endforeach --}}
{{-- @endforeach --}}

@foreach ($products1->chunk(3) as $productChunk)
    @foreach ($productChunk as $product1)
        <div class="container">
            <div class="row">
                <div class="card mx-auto shadow-lg">
                    <img class="card-img-top" src="/{{ $product1->imagePath }}" alt="Card image top">
                    <div class="card-body">
                        <h3 class="card-title" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">{{ $product1->title }}</h3><br>
                        <h4 class="card-subtitle" style="font-family: Arial, Helvetica, sans-serif">{{ $product1->description }}</h4><br>
                        <p class="card-text" style="font-size: 17px">Rp. {{ $product1->price }}</p><br>
                        <a href="{{ $product1->docPath }}" class="btn btn-primary" download>Download Dokumen</a><br><br>
                        <a href="{{ route('product.addToCart', ['$id' => $product1->id]) }}" class="btn btn-success">Add to cart</a>
                    </div>
                </div>   
            </div>
        </div>
    @endforeach
@endforeach
@endsection