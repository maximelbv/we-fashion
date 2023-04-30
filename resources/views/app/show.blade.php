@extends('layouts.base')

@section('title', $product->name)

@section('content')

<article class="d-flex">

    <img src="/{{ $product->imageUrl }}" alt="product image" style='width: 50%'>

    <div class="m-3">
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->desc }}</p>
        <p style='margin-bottom: 0'>{{ $product->price }} $</p>
        <p style='margin-bottom: 0'>{{ $product->category_id == 1 ? 'Men' : 'Women' }}</p>
        <p style='font-weight: bolder; '>{{ $product->state == 'promotion' ? 'DISCOUNT' : '' }}</p>
        <select>
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>
        <a class="btn btn-primary" href="{{ URL::route('products.filter'); }}">Buy</a>
    </div>


</article>

@endsection