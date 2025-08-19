<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

route::get('/tentang-blog', [
    App\Http\Controllers\AboutController::class, 'index'
])->name('about');


route::get('/hubungi', function () {
    return view('contact');
})->name('contact');


Route::get('/blog-post', [PostController::class, 'index'])->name('posts.index');

Route::get('/blog-post/{slug}', [PostController::class, 'show'])->name('posts.show');

Route::get('/create', function () {
    return view('posts.create');
})->name('posts.create');

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/{slug}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::put('/posts/{slug}', [PostController::class, 'update'])->name('posts.update');





