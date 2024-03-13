<?php

use App\Http\Controllers\AdminstratorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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

Route::middleware('guest')->get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login-cek', [AdminstratorController::class, 'login'])->name('cek');
Route::middleware('auth')->get('/dashboard', [AdminstratorController::class, 'dashboard'])->name('dashboard');
Route::get('/logout', [AdminstratorController::class, 'logout'])->name('logout'); 
Route::get('/produk', [ProdukController::class, 'produk'])->name('produk');
