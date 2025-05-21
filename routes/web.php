<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\LiveReportController;
use App\Http\Controllers\SiswaController;



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

use App\Http\Controllers\LoginGuruController;
use App\Http\Controllers\LoginWaliController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('dashboard');
});

// Halaman login guru
Route::get('/login/guru', [LoginGuruController::class, 'showLoginForm'])->name('guru.login');
Route::post('/login/guru', [LoginGuruController::class, 'login']);

// Halaman login wali
Route::get('/login/wali', [LoginWaliController::class, 'showLoginForm'])->name('wali.login');
Route::post('/login/wali', [LoginWaliController::class, 'login']);

// Halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');



