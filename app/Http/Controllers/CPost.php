<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CPost extends Controller
{
    public function index()
    {

        return view('posts', [
            "title" => "Posts",
            "posts" => Post::with(['user','category'])->latest()->get(),
            "judul" => "Halaman Post"
        ]);
    }

    public function single(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
