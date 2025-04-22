@extends('layout.app')
@section('title')
Create
@endsection
@section('container')
<form action="{{route('posts.index')}}">
    @csrf
        <div class="row mb-3">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" required class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" required id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <select class="form-select mb-3" aria-label="Default select example">
                <option value="1">Abdo</option>
                <option value="2">Mohamed</option>
            </select>
        </div>
            <button type="submit" class="btn btn-success" style="width: 100px; height: 50px; text-align: center;">Create</button>
    </form>
@endsection
