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

Route::get('/', function () {
    return view('welcome');
});

/*Auth::routes();*/

Route::get('/home', [App\Http\Controllers\BukuTamuDCController::class, 'index'])->name('home');
Route::get('bukuTamu/check-in', [App\Http\Controllers\BukuTamuDCController::class, 'create']);
Route::post('bukuTamu/store', [App\Http\Controllers\BukuTamuDCController::class, 'store']);
Route::get('bukuTamu/{id}/edit', [App\Http\Controllers\BukuTamuDCController::class, 'edit']);
Route::get('bukuTamu/{id}/show', [App\Http\Controllers\BukuTamuDCController::class, 'show']);
Route::put('bukuTamu/{id}/update', [App\Http\Controllers\BukuTamuDCController::class, 'update']);
Route::delete('bukuTamu/{id}/delete', [App\Http\Controllers\BukuTamuDCController::class, 'destroy']);
