@extends('layouts.base')

@section('title', 'All articles')

@section('content')

<h1>All Articles</h1>

<div class="articlesList">
    @forelse($products as $product)

    <article>
        <a href="{{ route('products.show',['id' => $product->id]) }}">
            <img src="{{ $product->imageUrl }}" alt="product image">
            <div class="infos">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->desc }}</p>
                <p>{{ $product->price }} €</p>
                <p>{{ $product->category_id == 1 ? 'Men' : 'Women' }}</p>
                <p>{{ $product->state == 'promotion' ? 'DISCOUNT' : '' }}</p>
            </div>

        </a>

    </article>

    @empty
    <p>No products available</p>

    @endforelse
</div>



{{ $products->links() }}

@endsection