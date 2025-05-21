<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('layouts.dashboard'); // sesuaikan jika dashboard.blade.php ada di root views
});

// Route::get('/dosen', function () {
//     return view('layouts.dosen');
// });

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

// Jika pakai controller
Route::get('/dashboard', [DashboardController::class, 'index']);
// Route::get('/dashboard', [MainController::class, 'index']);

Route::resource('dosen', DosenController::class);
// Route::get('/dosen/create', [DosenController::class, 'create'])->name('dosen.create');
// Route::post('/dosen', [DosenController::class, 'store'])->name('dosen.store');

Route::resource('mahasiswa', MahasiswaController::class);

