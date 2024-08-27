@extends('admin.admins')
@section('title', 'create')

@section('content')
    <div class="container">
        <h1>Create New Category</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dashboard.categories.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3">{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
                <label>Upload Image</label>
                <input type="file" name="image" class="from-control" value="{{ old('price') }}" required>
            </div>

            <button type="submit" class="btn btn-success">Create Category</button>
            <a href="{{ route('dashboard.categories.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
