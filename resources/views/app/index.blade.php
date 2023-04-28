@extends('base')

@section('title', 'All articles')

@section('content')

    <h1>All Articles</h1>

    @forelse($products as $product)

        <article>
            <a href="{{ route('products.show',['id' => $product->id]) }}">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->desc }}</p>
                <p>{{ $product->id }}</p>
            </a>

        </article>

    @empty 
        <p>No products available</p>

    @endforelse

    {{ $products->links() }}

@endsection