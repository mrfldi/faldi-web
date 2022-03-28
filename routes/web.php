<?php

use Illuminate\Support\Facades\Route;

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
        "name" => "Muhammad Rifaldi",
        "email" => "paldi@gmail.com",
        "image" => "img/pal.png",
        "title" => "About"
    ]);
});

Route::get('/post', function () {
    $blog_post = [
        [
            "title" => "Judul post pertama",
            "author" => "Muhammad Rifaldi",
            "body" => "Ini adalah tulisan pertamaku",
            "slug" => "judul-post-pertama"
        ],
        [
            "title" => "Judul post kedua",
            "author" => "Muhammad Rifaldi",
            "body" => "Ini adalah tulisan keduaku",
            "slug" => "judul-post-kedua"
        ],
    ];
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_post
    ]);
});

//halaman single post
Route::get('posts/{slug}', function ($slug) {
    return view('post', [
        "title" => "Single Post"
    ]);
});