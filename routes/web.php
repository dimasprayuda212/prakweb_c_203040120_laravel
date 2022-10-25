<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Dimas Prayuda",
        "email" => "dimassprayuda212@gmail.com",
        "image" => "dimas.jpeg"
    ]);
});



Route::get('/blog', [PostController::class, 'index']);
// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);
