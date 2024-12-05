<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\NumberOperationsController;
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

Route::get('/hello', [HelloWorldController::class, 'hello']);
Route::get('/perkalian/{angka}', [NumberOperationsController::class, 'multiplication']);

Route::get('/operasi-bilangan', [NumberOperationsController::class, 'index']);
Route::get('/tambah', [NumberOperationsController::class, 'addition']);