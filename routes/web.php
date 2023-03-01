<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/post', [PostsController::class, 'index'])->name('post.index');
Route::get('/post/show/{post}', [PostsController::class, 'show'])->name('post.show');
Route::delete('/post/delete/{id}', [PostsController::class, 'destroy'])->name('post.destroy');
Route::get('/post/update/{id}', [PostsController::class, 'update'])->name('post.update');
Route::put('/post/edit/{id}', [PostsController::class, 'edit'])->name('post.edit');
Route::get('/post/create', [PostsController::class, 'create'])->name('post.create');
Route::post('/post/store', [PostsController::class, 'store'])->name('post.store');

Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/show/{user}', [UserController::class, 'show'])->name('user.show');



