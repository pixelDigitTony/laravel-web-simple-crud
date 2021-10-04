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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/post/{id?}', [App\Http\Controllers\PostController::class, 'form'])->name('post.form');
Route::post('/post/save', [App\Http\Controllers\PostController::class, 'save'])->name('post.save');
Route::put('/post/update/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
Route::get('/post/delete/{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('post.delete');
