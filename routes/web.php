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

Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home1');

Route::get('/admin-page', [App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/admin-page/menu', [App\Http\Controllers\DashboardController::class, 'menu']);

Route::get('/admin-page/obat', [App\Http\Controllers\ObatController::class, 'index'])->name('obat_index');
Route::get('/admin-page/obat/add', [App\Http\Controllers\ObatController::class, 'create'])->name('obat_add');
Route::post('/admin-page/obat/store', [App\Http\Controllers\ObatController::class, 'store'])->name('obat_store');
Route::get('/admin-page/obat/edit/{id}', [App\Http\Controllers\ObatController::class, 'edit'])->name('obat_edit');
Route::put('/admin-page/obat/update/{id}', [App\Http\Controllers\ObatController::class, 'update'])->name('obat_update');
Route::delete('/admin-page/obat/delete/{id}', [App\Http\Controllers\ObatController::class, 'destroy'])->name('obat_delete');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
