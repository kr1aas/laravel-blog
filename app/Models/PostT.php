<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    private static $blog_posts = [
        [
            "title" => "Judul Blog Krisna",
            "slug" => "judul-1",
            "author" => "author",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint magni quidem modi, excepturi quisquam aut sequi odio repellendus illo ducimus, deserunt necessitatibus repellat itaque facilis, aperiam eius dolorum ab laborum."

        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "author 2",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ullam, itaque in blanditiis quam quaerat vitae eum asperiores ipsam sapiente quia cupiditate mollitia ad id rerum molestias veritatis eos. Fugit aut id ullam illo, aspernatur labore mollitia quis veritatis repellat ut, voluptates quisquam! Quis molestiae at aliquam dolore, voluptates in."
        ],
    ];

    public static function semua()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $post = static::semua();

       
        // foreach ($post as $p) {
        //     if ($p["slug"] == $slug) {
        //         $post = $p;
        //     }
        // }

        return $post->firstWhere('slug', $slug);
    }
}
