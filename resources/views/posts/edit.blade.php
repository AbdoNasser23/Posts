@extends('layout.app')
@section('title')
Edit Post
@endsection
@section('content')
<div class="container mt-5">
    <h2>Edit Post</h2>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $post->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="Author" class="form-label">Author</label>
            <input type="text" class="form-control" id="Author" name="Author" value="{{ $post->Author }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
