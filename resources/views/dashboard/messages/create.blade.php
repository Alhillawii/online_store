@extends('admin.admins')
@section('title', 'create')


@section('content')
    <div class="container">
        <h1>Create New Message</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dashboard.messages.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="name" name="name" id="name" class="form-control" value="{{ old('subject') }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('subject') }}" required>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control" value="{{ old('subject') }}" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="content" class="form-control" rows="5" required>{{ old('content') }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Create Message</button>
            <a href="{{ route('dashboard.messages.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
