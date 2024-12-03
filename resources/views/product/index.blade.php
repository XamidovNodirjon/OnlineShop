@extends('layouts.layout')
@section('content')
<h2>Products</h2>

<button>
    <a href="{{route('product.create')}}">Add Product</a>
</button>

<div class="container">
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="Product Image">
                    <div class="container">
                        <h4><b>{{ $product->name }}</b></h4>
                        <p>{{ $product->description }}</p>
                        <p><strong>Price:</strong> ${{ $product->price }}</p>
                        <p><strong>Status:</strong> {{ $product->is_active ? 'Active' : 'Inactive' }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
