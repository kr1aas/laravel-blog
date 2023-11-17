<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class About extends Model
{

    public static function author()
    {

        return [
            "nama" => "I Gede Krisna Astika Nanda",
            "email" => "krisnaastika71@gmail.com",
            "foto" => "profile.jpeg",
            "title" => "about"
        ];
    }
}
