<?php

use App\Http\Controllers\PageController;
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

Route::get('dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('sekolah-insert', [PageController::class, 'insertSekolah'])->name('sekolah.insert');
Route::get('sekolah-update', [PageController::class, 'updateSekolah'])->name('sekolah.update');
