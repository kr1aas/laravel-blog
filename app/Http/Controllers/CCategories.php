<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CCategories extends Controller
{
    public function categories()
    {

        return view('categories', [
            "title" => "categories",
            "category" => Category::get(),
            "cat" => Category::get(),
            "judul" => "Categories"
        ]);
    }
}
