<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KartuHplController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Kartu HPL routes
    Route::prefix('kartu-hpl')->name('kartu-hpl.')->group(function () {
        Route::get('/', [KartuHplController::class, 'index'])->name('index');
        Route::get('/create', [KartuHplController::class, 'create'])->name('create');
        Route::post('/', [KartuHplController::class, 'store'])->name('store');
        Route::get('/{kartu_hpl}', [KartuHplController::class, 'show'])->name('show');
        Route::get('/{kartu_hpl}/edit', [KartuHplController::class, 'edit'])->name('edit');
        Route::put('/{kartu_hpl}', [KartuHplController::class, 'update'])->name('update');
        Route::delete('/{kartu_hpl}', [KartuHplController::class, 'destroy'])->name('destroy');
    });
});

require __DIR__.'/auth.php';