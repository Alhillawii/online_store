@extends('admin.admins')

@section('titleFav' , "Dashboard")

@section('Head' , "messages")


@section('content')
    <div class="container">
        <h1>Messages</h1>
        <a href="{{ route('dashboard.messages.create') }}" class="btn btn-primary mb-3">Add New Message</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>email</th>
                    <th>Subject</th>
                    <th>Content</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                    <tr>
                        <td>{{ $message->id }}</td>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->message }}</td>
                        <td>{{ $message->subject }}</td>
                        <td>{{ Str::limit($message->content, 50) }}</td>
                        <td>
                            <form action="{{ route('dashboard.messages.destroy', $message->id) }}" method="POST" style="display:inline-block;">
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
