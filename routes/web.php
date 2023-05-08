<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('posts.index');

Route::get('/detail.html/1-{id}-5', [PostController::class, 'detail'])->name('posts.show');

Route::get('posts/create.html-post', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts/store.html',[PostController::class, 'store'])->name('posts.store');

Route::get('posts/1-{id}-7-edit.html', [PostController::class, 'edit'])->name('posts.edit');

Route::patch('posts/{id}/', [PostController::class, 'update'])->name('posts.update');

Route::delete('posts/delete/{id}', [PostController::class, 'delete'])->name('posts.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('welcome');
// });