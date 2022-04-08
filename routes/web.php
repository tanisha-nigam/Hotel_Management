<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('home', function () {
    return view('home');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('about', function () {
    return view('about');
});
Route::get('destination', function () {
    return view('destination');
});
Route::get('hottel', function () {
    return view('hottel');
});
Route::get('meals', function () {
    return view('meals');
});
Route::get('pricing', function () {
    return view('pricing');
});
Route::get('room', function () {
    return view('room');
});
Route::get('/posts',[PostController::class, 'getAllPost'])->name('post.getAllpost');
Route::get('/add-post',[PostController::class,'addPost'])->name('post.add');
Route::post('/add-post',[PostController::class,'addPostSubmit'])->name('post.addsubmit');
Route::get('posts/{id}',[PostController::class,'getPostById'])->name('post.getById');
Route::get('/edit-post/{id}', [PostController::class,'editPost'])->name('post.edit');
Route::post('update-post', [PostController::class,'updatePost'])->name('post.update');
Route::get('/delete-post/{id}',[PostController::class,'deletePost'])->name('post.delete');
