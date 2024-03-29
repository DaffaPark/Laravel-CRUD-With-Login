<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/barang',[BarangController::class, 'index']);
Route::get('/create',[BarangController::class, 'create']);
Route::post('/store',[BarangController::class, 'store']);
Route::get('/edit/{id}',[BarangController::class, 'edit']);
Route::post('/update/{id}',[BarangController::class, 'update']);
Route::get('/hapus/{id}',[BarangController::class, 'delete']);