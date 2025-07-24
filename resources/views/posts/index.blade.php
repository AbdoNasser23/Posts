@extends('layout.app')

@section('title', 'All Posts')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">All Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Create New
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->user->name ?? 'unknown'}}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->updated_at}}</td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-info">
                                        <i class="fas fa-eye">View</i>
                                    </a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit">Edit</i>
                                    </a>
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                            <i class="fas fa-trash">Delete</i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
