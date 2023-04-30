@extends('layouts.baseAdmin')

@section('content')

<div class="d-flex justify-content-end mb-3">
    <a class="btn btn-primary" href="{{ route('admin.createProduct') }}">+ New Product</a>
</div>


<div class="d-flex justify-content-between align-items-center">
    <h1>All Articles</h1>
    <p class="fs-4 m-0">{{ $products->total() }} Products</p>

</div>

@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    <strong>Success !</strong> {{ session('success') }}
</div>
@endif

<div class="row container mx-auto p-0 pt-3">
    @foreach ($products as $product)
    <div class="d-flex align-items-center border" style="margin: .5rem 0">
        <div class="card-body">
            <p style='margin: 0.2rem 0'>ID : {{ $product->id }}</p>
            <p style='margin-bottom: 0'>{{ $product->reference }}</p>
            <h3 style='margin: .5rem 0'>{{ $product->name }}</h3>
            <div class="d-flex">
                <p style='margin-right: .5rem'>{{ $product->price }} $ • </p>
                <p style='margin-right: .5rem'>{{ $product->size }} $ • </p>
                <p style='margin-right: .5rem'>{{ $product->category_id == 1 ? 'Men' : 'Women' }} • </p>
                <p style='margin-right: .5rem;font-weight: bolder; '>{{ $product->state == 'promotion' ? 'DISCOUNT' : 'No promotion' }} • </p>
                <p style='margin-right: .5rem'>{{ $product->isPublished == '1' ? 'PUBLISHED' : 'DRAFT' }}</p>
            </div>

        </div>
        <div class="d-flex">
            <a style="margin-right: .5rem" class="btn btn-warning" href="{{ route('admin.editProduct', $product->id) }} ">Edit</a>

            <form action="products/{{ $product->id }}/delete" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
</div>



{{ $products->links() }}

@endsection