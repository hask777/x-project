<?php

use App\Http\Controllers\FixtureController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/', [FixtureController::class,'fixtures']);
Route::get('/store', [FixtureController::class,'store'])->name('store');
Route::get('/rounds', [TestController::class,'rounds']);
Route::get('/table', [TestController::class,'table']);
Route::get('/show/{id}', [TestController::class,'show'])->name('show');
Route::get('/predict/{id}', [TestController::class,'predict'])->name('predict');
