@extends('base')

@section('title', $product->name)

@section('content')

    <article>

        <h1>{{ $product->name }}</h1>
        <p>{{ $product->desc }}</p>

    </article>

@endsection