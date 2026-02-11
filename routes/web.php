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

Route::get('/clear-cache', fn() => tap(Artisan::call('optimize:clear'), fn() => print('OK')));

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ✅ HANYA INI untuk kartu-hpl
    Route::get('/kartu-hpl', [KartuHplController::class, 'index'])->name('kartu-hpl.index');
    Route::get('/kartu-hpl/create', [KartuHplController::class, 'create'])->name('kartu-hpl.create');
    Route::post('/kartu-hpl', [KartuHplController::class, 'store'])->name('kartu-hpl.store');
    Route::get('/kartu-hpl/{id}/edit', [KartuHplController::class, 'edit'])->name('kartu-hpl.edit');
    Route::put('/kartu-hpl/{id}', [KartuHplController::class, 'update'])->name('kartu-hpl.update');
    Route::delete('/kartu-hpl/{id}', [KartuHplController::class, 'destroy'])->name('kartu-hpl.destroy');
});

require __DIR__.'/auth.php';
