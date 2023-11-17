<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CHome extends Controller
{
    public function home(){
        return view('home', [
            "title" => "home"
        ]);
    }
}
