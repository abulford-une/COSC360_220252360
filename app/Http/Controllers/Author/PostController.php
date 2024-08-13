<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Auth::user()->posts;
        return view('posts.index', compact('posts'));
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
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($request->all());
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Post $post)
    {
        if(Auth::id() != $post->user_id) {
            abort(403);
        }
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $post = Post::find($id);
        if(Auth::id() != $post->user_id) {
            abort(403);
        }
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        $request->validate([
            'id' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);
        $post->update($request->all());
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
