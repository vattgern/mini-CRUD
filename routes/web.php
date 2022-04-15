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

Route::get('/create',[PostController::class,'create'])->name('post.create');
Route::post('/store',[PostController::class,'store'])->name('post.store');
Route::get('/',[PostController::class,'index'])->name('post.index');
Route::get('/post/{id}',[PostController::class,'show'])->name('post.show');
Route::delete('/destroy/{id}',[PostController::class,'delete'])->name('post.delete');
Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
Route::patch('/post/edit/{id}',[PostController::class,'update'])->name('post.update');
