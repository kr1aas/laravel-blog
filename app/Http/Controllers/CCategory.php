<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CCategory extends Controller
{
    public function category(Category $category) {
        return view('posts', [
            "title" => "Categories",
            "posts" => $category->post->load(['category','user']),
            "category" => $category->name,
            "judul" => "Post Category: $category->name"
        ]);
    }
}
