<?php

namespace App\Http\Controllers;

use App\Models\Post;

class  PostController extends Controller
{
    
    public function index()
    {
        return view('posts.index', [
            // calls scopeFilter() on Post model
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(9)->withQueryString(
            ),
        ]);
    }
    
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
    
}
