<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // List all posts
    public function index()
    {
        return Post::all();
    }

    // Create a post
    public function store(Request $request)
    {
        $post = Post::create($request->only('title', 'content'));
        return response()->json($post, 201);
    }

    // Search posts (Elasticsearch)
    public function search(Request $request)
    {
        $query = $request->input('q');
        $results = Post::search($query)->get();
        return response()->json($results);
    }
}


/// http://localhost:8000/api/posts/search?q=laravel
