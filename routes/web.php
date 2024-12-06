<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\NumberOperationsController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ManufactureController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\FeatureController;
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

Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
Route::post('/cars', [CarController::class, 'store'])->name('cars.store');
Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');
Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::put('/cars/{id}', [CarController::class, 'update'])->name('cars.update');
Route::delete('/cars/{id}', [CarController::class, 'destroy'])->name('cars.destroy');
Route::get('cars/{car}/add-features', [CarController::class, 'addFeatures'])->name('cars.add-features');
Route::post('cars/{car}/add-features', [CarController::class, 'storeFeatures'])->name('cars.store-features');

Route::get('/manufactures', [ManufactureController::class, 'index'])->name('manufactures.index');
Route::get('/manufactures/create', [ManufactureController::class, 'create'])->name('manufactures.create');
Route::post('/manufactures', [ManufactureController::class, 'store'])->name('manufactures.store');
Route::get('/manufactures/{id}', [ManufactureController::class, 'show'])->name('manufactures.show');
Route::get('/manufactures/{id}/edit', [ManufactureController::class, 'edit'])->name('manufactures.edit');
Route::put('/manufactures/{id}', [ManufactureController::class, 'update'])->name('manufactures.update');
Route::delete('/manufactures/{id}', [ManufactureController::class, 'destroy'])->name('manufactures.destroy');

Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews/{id}', [ReviewController::class, 'show'])->name('reviews.show');
Route::get('/reviews/{id}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
Route::put('/reviews/{id}', [ReviewController::class, 'update'])->name('reviews.update');
Route::delete('/reviews/{id}', [ReviewController::class, 'destroy'])->name('reviews.destroy');

Route::get('/features', [FeatureController::class, 'index'])->name('features.index');
Route::get('/features/create', [FeatureController::class, 'create'])->name('features.create');
Route::post('/features', [FeatureController::class, 'store'])->name('features.store');
Route::get('/features/{id}', [FeatureController::class, 'show'])->name('features.show');
Route::get('/features/{id}/edit', [FeatureController::class, 'edit'])->name('features.edit');
Route::put('/features/{id}', [FeatureController::class, 'update'])->name('features.update');
Route::delete('/features/{id}', [FeatureController::class, 'destroy'])->name('features.destroy');

