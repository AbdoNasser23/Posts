@extends('layout.app')
@section('title')
View Post
@endsection
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h3>Post Details</h3>
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->description }}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Author:</strong> {{ $post->user->name }}</li>
                <li class="list-group-item"><strong>Created at:</strong> {{ $post->created_at }}</li>
                <li class="list-group-item"><strong>Updated at:</strong> {{ $post->updated_at }}</li>
            </ul>
            <div class="mt-3">
                <a href="{{ route('posts.index') }}" class="btn btn-primary">Back to all posts</a>
            </div>
        </div>
    </div>
</div>
@endsection
