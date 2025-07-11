<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/', function () {
    $posts=
    \App\Models\Post::latest()->take(5)->get();
    return view('home',compact('posts'));
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
