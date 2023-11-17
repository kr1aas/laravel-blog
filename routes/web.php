<?php

use App\Models\Post;
use App\Models\About;
use App\Http\Controllers\CHome;
use App\Http\Controllers\CPost;
use App\Http\Controllers\CAbout;
use App\Http\Controllers\CAuthor;
use App\Http\Controllers\CCategory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[CHome::class,'home']);
//halaman about
Route::get('/about',[CAbout::class,'author'] );
//halaman blog
Route::get('/posts', [CPost::class,'index']);
//halaman single post 
Route::get('/posts/{post:slug}', [CPost::class,'single']);
//halaman category
Route::get('/category/{category:slug}', [CCategory::class,'category']);
//halaman author
Route::get('/author/{user:username}', [CAuthor::class,'user']);