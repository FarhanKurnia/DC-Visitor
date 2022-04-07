<?php

use App\Http\Controllers\LoginController;
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

//Home
Route::get('/', function () {
    return view('visitor.home');
});

//Admin
Route::get('/dashboard', [App\Http\Controllers\BukuTamuDCController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/{id}/edit', [App\Http\Controllers\BukuTamuDCController::class, 'edit'])->middleware('auth');
Route::get('/{id}/show', [App\Http\Controllers\BukuTamuDCController::class, 'show'])->middleware('auth')->name('show');
Route::put('/{id}/update', [App\Http\Controllers\BukuTamuDCController::class, 'update'])->middleware('auth')->name('update');
Route::delete('/{id}/delete', [App\Http\Controllers\BukuTamuDCController::class, 'destroy'])->middleware('auth');

//Client
Route::get('/home', [App\Http\Controllers\BukuTamuDCController::class, 'home'])->name('home');
Route::post('/store', [App\Http\Controllers\BukuTamuDCController::class, 'store'])->name('store');
Route::get('/check-in', [App\Http\Controllers\BukuTamuDCController::class, 'create'])->name('create');
Route::get('/{id}/checkout', [App\Http\Controllers\BukuTamuDCController::class, 'editlogout']);
Route::put('/{id}/update-checkout', [App\Http\Controllers\BukuTamuDCController::class, 'updatelogout']);
Route::get('/search', [App\Http\Controllers\BukuTamuDCController::class, 'search'])->name('search');

//Login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
