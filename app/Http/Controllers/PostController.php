<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
        {
            Post::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'Author' => $request->input('Author')
            ]);

            return to_route('posts.index');
        }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = Post::all();
        $post = collect($posts)->firstWhere('id',$id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = Post::all();
        $post = collect($posts)->firstWhere('id',$id);
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());

        return to_route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::destroy($id);
        return to_route('posts.index');
    }
}
