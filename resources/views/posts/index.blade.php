@extends('layout.app')
@section('title')
index
@endsection
@section('container')

<div class="cont" style="text-align: center">

    <form action="{{route('posts.create')}}">
        @csrf
        <button type="submit" class="btn btn-secondary" style="width: 100px; height: 50px; text-align: center;">Create</button>
    </form>

    <table class="table table-striped mt-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">Posted_by</th>
                            <th scope="col">Created_at</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)

                        <tr>
                            <th scope="row">{{$post['id']}}</th>
                            <td>{{$post['title']}}</td>
                            <td>{{$post['Posted_by']}}</td>
                            <td>{{$post['Created_At']}}</td>
                            <td><button type="button" class="btn btn-success">View</button>
                                <button type="button" class="btn btn-warning">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
                @endsection
