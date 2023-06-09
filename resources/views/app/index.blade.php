@extends('layouts.base')

@section('title', 'All articles')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>All Articles</h1>
    <p class="fs-4 m-0">{{ $products->total() }} Products</p>
</div>



<div class="row container mx-auto p-0 pt-3">
    @foreach ($products as $product)
    <div class="col-sm-4 p-1" style="padding-right: 1rem">
        <a href="{{ route('products.show', $product->id) }}" style="text-decoration: none; color: #212529;">
            <img class="w-100" src="{{ $product->imageUrl }}" alt="product image">
            <div class="card-body">
                <h3 style='margin-top: 1rem'>{{ $product->name }}</h3>
                <p>{{ $product->desc }}</p>
                <p style='margin-bottom: 0'>{{ $product->price }} $</p>
                <p style='margin-bottom: 0'>{{ $product->category_id == 1 ? 'Men' : 'Women' }}</p>
                <p style='font-weight: bolder; '>{{ $product->state == 'promotion' ? 'DISCOUNT' : '' }}</p>
            </div>
        </a>
    </div>
    @endforeach
</div>



{{ $products->links() }}

@endsection