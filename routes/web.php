<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\HomeAdminController;
use App\Http\Controllers\HomeUserController;
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


//Admin
Route::get('/', [HomeAdminController::class, 'index']);

//User
route::get('/u', [HomeUserController::class, 'index']);
Route::get('/sanphams', [SanPhamController::class, 'index'])->name('sanphams.index');
Route::get('/sanphams/{id}', [SanPhamController::class, 'show'])->name('sanphams.show');
