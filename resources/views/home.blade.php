@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Products</h1>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-4">
                <div class="card mb-3">
                    <img class="card-img-top" src="{{ asset('img/default-product.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">{{ $product->name }}</h4>
                        <p class="card-text">{{ $product->description }}</p>
                        <h3>$ {{ $product->price }} </h3>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('cart.add', $product->id) }}" class="btn btn-success">Add to cart</a>
                    </div>
                </div>
            </div>            
        @endforeach
    </div>
</div>
@endsection
