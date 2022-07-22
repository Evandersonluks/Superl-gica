<?php

use App\Http\Controllers\ArrayController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
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

Route::get('/teste/1', [CustomerController::class, 'index'])->name('first-test');
Route::get('/teste/1/create', [CustomerController::class, 'create'])->name('first-test-create');
Route::post('/teste/1/store', [CustomerController::class, 'store'])->name('first-test-store');

Route::get('/teste/2', [ArrayController::class, 'index'])->name('second-test');
Route::get('/teste/2/regenerate-array', [ArrayController::class, 'regenerateArray'])->name('second-test-regenerate');
Route::get('/teste/2/reduce-array', [ArrayController::class, 'reduceArray'])->name('second-test-reduce');

Route::get('/teste/3', [UserController::class, 'index'])->name('third-test');
