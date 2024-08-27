@extends('admin.admins')
@section('title', 'edit')


@section('content')
    <div class="container">
        <h1>Edit Product</h1>

        <form action="{{ route('dashboard.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}" required>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ old('image', $product->image) }}" required>
            </div>

            <div class="form-group">
                <label for="category_id">category_id</label>
                <input type="number" name="category_id" id="category_id" class="form-control" value="{{ old('category_id') }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ old('description', $product->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label>Upload Image</label>
                <input type="file" name="image" class="from-control" value="{{ old('image') }}" required>
            </div>

            <button type="submit" class="btn btn-success">Update Product</button>
            <a href="{{ route('dashboard.products.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection