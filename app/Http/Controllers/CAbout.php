<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CAbout extends Controller
{
   public function author(){
    return view('about')->with( \App\Models\About::author());
   }
}
