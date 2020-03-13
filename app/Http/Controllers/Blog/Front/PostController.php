<?php

namespace App\Http\Controllers\Blog\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('blog.front.post.index',['posts' => $posts]);
    }
}
