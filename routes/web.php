<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HusbandController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/husband-wife',[HusbandController::class,'index'])->name('husband-wife.index');
Route::get('/husband-wife/create',[HusbandController::class,'create'])->name('husband-wife.create');
Route::post('/husband-wife/store',[HusbandController::class,'store'])->name('husband-wife.store');
Route::get('/husband-wife/{id}/edit',[HusbandController::class,'edit'])->name('husband-wife.edit');
Route::patch('/husband-wife/{id}/update',[HusbandController::class,'update'])->name('husband-wife.update');
Route::delete('/husband-wife/{id}/delete',[HusbandController::class,'destroy'])->name('husband-wife.destroy');


Route::get('/post-comments',[PostController::class,'index'])->name('post-comments.index');
Route::get('/post-comments/create-post',[PostController::class,'create'])->name('post-comments.create-post');
Route::post('/post-comments/create-post',[PostController::class,'store'])->name('post-comments.store-post');
Route::post('/post-comments/create-comment',[CommentController::class,'store'])->name('post-comments.store-comment');
