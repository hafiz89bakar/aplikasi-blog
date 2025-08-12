<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('blog');
})->name('blog');

route::get('/tentang-blog', [
    App\Http\Controllers\AboutController::class, 'index'
])->name('about');


route::get('/hubungi', function () {
    return view('contact');
})->name('contact');


Route::get('/blog-post', [PostController::class, 'index'])->name('posts');



