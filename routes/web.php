<?php

use App\Http\Controllers\JurusansController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'role' => 'admin'])->group(function () {
    Route::get('/tahun/index', [App\Http\Controllers\TahunsController::class, 'index'])->name('tahun.index');
    Route::get('/tahun/create', [App\Http\Controllers\TahunsController::class, 'create'])->name('tahun.create');
    Route::post('/tahun/store', [App\Http\Controllers\TahunsController::class, 'store'])->name('tahun.store');
    Route::delete('/tahun/{id}', [App\Http\Controllers\TahunsController::class, 'destroy'])->name('tahun.destroy');
    Route::resource('jurusan', JurusansController::class);
    Route::resource('kelas', KelasController::class);
    Route::resource('siswa', SiswasController::class);
});

Route::get('/errors/403', function () {
    return view('errors.403');
})->name('error.403');

    
require __DIR__.'/auth.php';
