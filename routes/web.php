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
Route::get('DC-Visitor/search', function () {
    return view('visitor.cari');
});

/*Auth::routes();*/

Route::get('DC-Visitor/dashboard', [App\Http\Controllers\BukuTamuDCController::class, 'index'])->name('dashboard');
Route::get('DC-Visitor/check-in', [App\Http\Controllers\BukuTamuDCController::class, 'create'])->name('create');
Route::get('DC-Visitor/home', [App\Http\Controllers\BukuTamuDCController::class, 'home'])->name('home');
Route::post('DC-Visitor/store', [App\Http\Controllers\BukuTamuDCController::class, 'store'])->name('store');
Route::get('DC-Visitor/{id}/edit', [App\Http\Controllers\BukuTamuDCController::class, 'edit']);
Route::get('DC-Visitor/{id}/checkout', [App\Http\Controllers\BukuTamuDCController::class, 'editlogout']);
Route::get('DC-Visitor/{id}/show', [App\Http\Controllers\BukuTamuDCController::class, 'show'])->name('show');
Route::put('DC-Visitor/{id}/update', [App\Http\Controllers\BukuTamuDCController::class, 'update'])->name('update');
Route::put('DC-Visitor/{id}/update-checkout', [App\Http\Controllers\BukuTamuDCController::class, 'updatelogout']);
Route::delete('DC-Visitor/{id}/delete', [App\Http\Controllers\BukuTamuDCController::class, 'destroy']);
Route::get('DC-Visitor/search', [App\Http\Controllers\BukuTamuDCController::class, 'search'])->name('search');
