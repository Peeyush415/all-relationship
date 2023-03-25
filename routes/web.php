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

Route::get('/sample-data',[HusbandController::class,'insertSampleRecord']);
Route::get('/husband-wife',[HusbandController::class,'index'])->name('husaband_wife_index');
// Route::get('/husband-wife/fake',[HusbandController::class,'seed'])->name('husaband_wife_index');
