<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class CPost extends Controller
{
    public function index()
    {

        return view('posts', [
            "title" => "Posts",
            "posts" => Post::latest()->get(),
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

    public function category(Category $category) {
        return view('posts', [
            "title" => "Categories",
            "posts" => $category->post->load(['category','user']),
            "category" => $category->name,
            "judul" => "Post Category: $category->name"
        ]);
    }
}
