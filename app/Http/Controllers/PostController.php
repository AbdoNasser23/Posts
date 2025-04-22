<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = [
            ["id"=>1,"title"=>"PHP","Posted_by"=>"Abdo","Created_At"=>"2025:5:5"],
            ["id"=>2,"title"=>"JS","Posted_by"=>"Mohamed","Created_At"=>"2025:5:5"],
            ["id"=>3,"title"=>"CSS","Posted_by"=>"Ali","Created_At"=>"2025:5:5"],
            ["id"=>4,"title"=>"HTML","Posted_by"=>"Amr","Created_At"=>"2025:5:5"],
        ];
        return view('posts.index',['posts'=>$allPosts]);
    }


    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        return to_route('posts.index');
    }
}
