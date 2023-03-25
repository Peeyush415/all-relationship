<?php

use App\Http\Controllers\HusbandController;
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
