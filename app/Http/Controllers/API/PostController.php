<?php

namespace App\Http\Controllers\API;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        return response()->json([
            $posts,
            'message' => 'Success'
        ], 200);
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $posts = Post::create($request->all());
        return response()->json([
            'data' => $posts,
            'message' => 'Post created successfully'
        ], 201);
    }

    public function update(Request $request, $id) {
        $post = Post::find($id);
        $post->update($request->all());
        return response()->json([
            'data' => $post,
            'message' => 'Post updated successfully'
        ], 200);
    }

    public function destroy($id) {
        $post = Post::find($id);
        $post->delete();
        return response()->json([
            'data' => null,
            'message' => 'Post deleted successfully'
        ], 204);
    }
}