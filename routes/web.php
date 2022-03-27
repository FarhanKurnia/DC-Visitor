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
Route::get('bukuTamu/create', [App\Http\Controllers\BukuTamuDCController::class, 'create']);
Route::post('bukuTamu', [App\Http\Controllers\BukuTamuDCController::class, 'store']);
Route::get('bukuTamu/{id}/edit', [App\Http\Controllers\BukuTamuDCController::class, 'edit']);
Route::get('bukuTamu/{id}', [App\Http\Controllers\BukuTamuDCController::class, 'show']);
Route::put('bukuTamu/{id}', [App\Http\Controllers\BukuTamuDCController::class, 'update']);
Route::delete('bukuTamu/{id}', [App\Http\Controllers\BukuTamuDCController::class, 'destroy']);
