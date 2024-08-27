@extends('admin.admins')

@section('titleFav' , "Dashboard")

@section('Head' , "categories")


@section('content')
    <div class="container">
        <h1>Categories</h1>
        <a href="{{ route('dashboard.categories.create') }}" class="btn btn-primary mb-3">Add New Category</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td> <img src = "{{asset ($category->image)}}" style="width:70px; height:70px; " alt="" ></td>
                        <td>
                            <a href="{{ route('dashboard.categories.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('dashboard.categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
