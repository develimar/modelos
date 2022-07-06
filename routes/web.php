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
    return view('welcome');
});

Route::get('posts/trashed',[\App\Http\Controllers\PostController::class, 'trashed'])->name('posts.trashed');
Route::get('posts/{post}/restore',[\App\Http\Controllers\PostController::class, 'restore'])->name('posts.restore');
Route::delete('posts/{post}/forceDelete',[\App\Http\Controllers\PostController::class, 'forceDelete'])->name('posts.forceDelete');

Route::resource('/posts',\App\Http\Controllers\PostController::class);
