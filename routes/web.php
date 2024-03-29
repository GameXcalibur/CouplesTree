<?php

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


Route::get('/', [App\Http\Controllers\EngravingsController::class, 'index'])->name('engravings.index');

//Route::get('/engravings/view', [App\Http\Controllers\EngravingsController::class, 'index'])->name('engravings.index');
Route::get('/engravings/create', [App\Http\Controllers\EngravingsController::class, 'create'])->name('engravings.create');
Route::post('/engravings/store', [App\Http\Controllers\EngravingsController::class, 'store'])->name('engravings.store');
Route::post('/engravings/preview', [App\Http\Controllers\EngravingsController::class, 'getPreview'])->name('engravings.preview');


