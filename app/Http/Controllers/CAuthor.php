<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class CAuthor extends Controller
{
    public function user(User $user) {
        return view('posts', [
            "title" => "Author",
            "posts" => $user->post->load(['category','user']),
            "user" => $user->name,
            "judul" => "Post Author: $user->name "
        ]);
    }
}
