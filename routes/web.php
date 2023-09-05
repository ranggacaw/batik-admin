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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Users
Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/user-add', [App\Http\Controllers\UserController::class, 'add']);
Route::post('/user-add-store', [App\Http\Controllers\UserController::class, 'addStore']);
Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'edit']);
Route::post('/user/{id}', [App\Http\Controllers\UserController::class, 'update']);
Route::delete('/user/{id}', [App\Http\Controllers\UserController::class, 'delete']);

// Barangs
Route::get('/barang', [App\Http\Controllers\BarangController::class, 'index']);
Route::get('/barang-add', [App\Http\Controllers\BarangController::class, 'add']);
Route::post('/barang-add-store', [App\Http\Controllers\BarangController::class, 'addNew']);
Route::get('/barang/{id}', [App\Http\Controllers\BarangController::class, 'edit']);
Route::delete('/barang/{id}', [App\Http\Controllers\BarangController::class, 'delete']);
Route::post('/barang/{id}', [App\Http\Controllers\BarangController::class, 'update'])->name('barang.update.post');
