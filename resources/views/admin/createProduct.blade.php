@extends('layouts.baseAdmin')

@section('content')

<form action="" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="name">Name of the product</label>
        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
        <span class="form-text" style='color: red'>@error('name'){{ $message }}@enderror</span>

    </div>

    <div class="mb-3">
        <label class="form-label" for="desc">Description</label>
        <input class="form-control" type="text" name="desc" value="{{ old('desc') }}">
        <span class="form-text" style='color: red'>@error('desc'){{ $message }}@enderror</span>
    </div>

    <div class="mb-3">
        <label class="form-label" for="price">Price</label>
        <input class="form-control" type="number" name="price" min="1" step="any" value="{{ old('price') }}">
        <span class="form-text" style='color: red'>@error('price'){{ $message }}@enderror</span>
    </div>

    <div class="mb-3">
        <label class="form-label" for="imageUrl">Image</label>
        <input class="form-control" type="file" name="imageUrl" value="{{ old('imageUrl') }}">
        <span class="form-text" style='color: red'>@error('imageUrl'){{ $message }}@enderror</span>
    </div>

    <div class="mb-3">
        <label class="form-label" for="size">Size</label>
        <select class="form-control" name="size">
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>
        <span class="form-text" style='color: red'>@error('size'){{ $message }}@enderror</span>
    </div>

    <div class="mb-3">
        <label class="form-label" for="state">State</label>
        <select class="form-control" name="state">
            <option value="standard">standard</option>
            <option value="promotion">promotion</option>
        </select>
        <span class="form-text" style='color: red'>@error('state'){{ $message }}@enderror</span>
    </div>

    <div class="mb-3">
        <label class="form-label" for="category_id">Category</label>
        <select class="form-control" name="category_id">
            @foreach ($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>
        <span class="form-text" style='color: red'>@error('category_id'){{ $message }}@enderror</span>
    </div>

    <div class="mb-3">
        <label class="form-label" for="isPublished">Publication</label>
        <select class="form-control" name="isPublished">
            <option value="0">Draft</option>
            <option value="1">Published</option>
        </select>
        <span class="form-text" style='color: red'>@error('isPublished'){{ $message }}@enderror</span>
    </div>

    <div class="mb-3">
        <label class="form-label" for="reference">Reference</label>
        <input class="form-control" type="text" name="reference" value="{{ old('reference') }}">
        <span class="form-text" style='color: red'>@error('reference'){{ $message }}@enderror</span>
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection