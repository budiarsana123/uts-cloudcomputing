<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mobilController;
use App\Http\Controllers\sparepartController;


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
Route::get('/mobil', [mobilController::class, 'index']);
Route::get('/mobil/tambah', [mobilController::class, 'tambah']);
Route::post('/mobil/store', [mobilController::class, 'store']);
Route::get('/mobil/edit/{id}', [mobilController::class, 'edit']);
Route::post('/mobil/update/{id}', [mobilController::class, 'update']);
Route::get('/mobil/hapus/{id}', [mobilController::class, 'hapus']);
Route::get('/sparepart', [mobilController::class, 'sparepart']);
