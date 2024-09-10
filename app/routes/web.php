<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\TahunAjaranController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('pendaftaran-sekolah', [PageController::class, 'pendaftaranSekolah'])->name('pendaftaranSekolah');
Route::get('sekolah-update', [PageController::class, 'updateSekolah'])->name('sekolah.update');
Route::get('tahun-ajaran', [PageController::class, 'tahunAjaran'])->name('tahun-ajaran');

Route::post('tahun-ajaran', [TahunAjaranController::class, 'insertTahun'])->name('tahunAjaran.insert');

Route::post('pendaftaran-sekolah', [SekolahController::class, 'pendaftaranSekolah'])->name('pendaftaranSekolah.create');
