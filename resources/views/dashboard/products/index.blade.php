@extends('admin.admins')

@section('titleFav' , "Dashboard")

@section('Head' , "Products")


@section('content')
    <div class="container">
        <h1>Products</h1>
        <a href="{{ route('dashboard.products.create') }}" class="btn btn-primary">Add New Product</a>
        

        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>category_id</th>
                    <th>description</th>
                    <th>image</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category_id }}</td>
                        <td>{{ $product->description }}</td>
                       <td> <img src = "{{asset ($product->image)}}" style="width:70px; height:70px; " alt="" ></td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td>
                            <a href="{{ route('dashboard.products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('dashboard.products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
