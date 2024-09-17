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
Route::post('dashboard', [PageController::class, 'dashboardPilihTahun'])->name('dashboardPilihTahun');

Route::get('sd', [PageController::class, 'sekolah'])->name('sd');
Route::get('smp', [PageController::class, 'sekolah'])->name('smp');
Route::get('sma', [PageController::class, 'sekolah'])->name('sma');

Route::get('{jenjang}/{namaSekolah}', [PageController::class, 'detailSekolah'])->name('detailSekolah');

Route::get('pendaftaran-sekolah', [PageController::class, 'pendaftaranSekolah'])->name('pendaftaranSekolah');
Route::get('pendataan-sekolah', [PageController::class, 'pendataanSekolah'])->name('pendataanSekolah');
Route::get('tahun-ajaran', [PageController::class, 'tahunAjaran'])->name('tahun-ajaran');

Route::get('profile-page', [PageController::class, 'profile'])->name('profile');
Route::put('update-profile/{user}', [PageController::class, 'updateProfile'])->name('profile.update');

Route::post('tahun-ajaran', [TahunAjaranController::class, 'insertTahun'])->name('tahunAjaran.insert');
Route::post('set-tahun-ajaran/{tahun}', [TahunAjaranController::class, 'setStatus'])->name('tahunAjaran.setStatus');

Route::post('pendaftaran-sekolah', [SekolahController::class, 'pendaftaranSekolah'])->name('pendaftaranSekolah.create');
Route::post('pendataan-sekolah', [SekolahController::class, 'pendataanSekolah'])->name('pendataanSekolah.create');
