<?php

use App\Http\Controllers\PostController;
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

Route::get('/posts', [PostController::class, 'index'])->name('post.home');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/posts/store', [PostController::class, 'store'])->name('post.store');
Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::post('/posts/update', [PostController::class, 'update'])->name('post.update');
Route::post('/posts/destroy/{id}', [PostController::class, 'destroy'])->name('post.destroy');
