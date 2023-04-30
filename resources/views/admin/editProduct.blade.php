@extends('layouts.baseAdmin')

@section('content')

<h1>Product Edition : {{ $product->name }}</h1>

<form action="" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="name">Name of the product</label>
        <input class="form-control" type="text" name="name" value="{{ old('name', $product->name) }}">
        <span class="form-text" style='color: red'>@error('name'){{ $message }}@enderror</span>

    </div>

    <div class="mb-3">
        <label class="form-label" for="desc">Description</label>
        <input class="form-control" type="text" name="desc" value="{{ old('desc', $product->desc) }}">
        <span class="form-text" style='color: red'>@error('desc'){{ $message }}@enderror</span>
    </div>

    <div class="mb-3">
        <label class="form-label" for="price">Price</label>
        <input class="form-control" type="number" name="price" min="1" step="any" value="{{ old('price',$product->price) }}">
        <span class="form-text" style='color: red'>@error('price'){{ $message }}@enderror</span>
    </div>

    <div class="mb-3">
        <label class="form-label" for="imageUrl">Image</label>
        <input class="form-control" type="file" name="imageUrl" value="{{ old('imageUrl', $product->imageUrl) }}">
        <span class="form-text" style='color: red'>@error('imageUrl'){{ $message }}@enderror</span>
    </div>

    <div class="mb-3">
        <label class="form-label" for="size">Size</label>
        <?php $selected= $product->size ?>
        <select class="form-control" name="size">
            <option <?php if($selected == 'XS'){echo("selected");}?> value="XS">XS</option>
            <option <?php if($selected == 'S'){echo("selected");}?> value="S">S</option>
            <option <?php if($selected == 'M'){echo("selected");}?> value="M">M</option>
            <option <?php if($selected == 'L'){echo("selected");}?> value="L">L</option>
            <option <?php if($selected == 'XL'){echo("selected");}?> value="XL">XL</option>
        </select>
        <span class="form-text" style='color: red'>@error('size'){{ $message }}@enderror</span>
    </div>

    <div class="mb-3">
        <label class="form-label" for="state">State</label>
        <?php $selected= $product->state ?>
        <select class="form-control" name="state" value="{{ old('state', $product->state) }}">
            <option <?php if($selected == 'standard'){echo("selected");}?> value="standard">standard</option>
            <option <?php if($selected == 'promotion'){echo("selected");}?> value="promotion">promotion</option>
        </select>
        <span class="form-text" style='color: red'>@error('state'){{ $message }}@enderror</span>
    </div>

    <div class="mb-3">
        <label class="form-label" for="category_id">Category</label>
        <?php $selected= $product->category_id ?>
        <select class="form-control" name="category_id" value="{{ old('category_id', $product->category_id) }}">
            @foreach ($categories as $cat)
            <option <?php if($selected == $cat->id){echo("selected");}?> value="{{$cat->id}}">{{$cat->name}}</option>
            @endforeach
        </select>
        <span class="form-text" style='color: red'>@error('category_id'){{ $message }}@enderror</span>
    </div>

    <div class="mb-3">
        <label class="form-label" for="isPublished">Publication</label>
        <?php $selected= $product->isPublished ?>
        <select class="form-control" name="isPublished" value="{{ old('isPublished', $product->isPublished) }}">
            <option <?php if($selected == '0'){echo("selected");}?> value="0">Draft</option>
            <option <?php if($selected == '1'){echo("selected");}?> value="1">Published</option>
        </select>
        <span class="form-text" style='color: red'>@error('isPublished'){{ $message }}@enderror</span>
    </div>
    <div class="mb-3">
        <label class="form-label" for="reference">Reference</label>
        <input class="form-control" type="text" name="reference" value="{{ old('reference', $product->reference) }}">
        <span class="form-text" style='color: red'>@error('reference'){{ $message }}@enderror</span>
    </div>

    <button type="submit" class="btn btn-primary">Confirm edition</button>
</form>

@endsection