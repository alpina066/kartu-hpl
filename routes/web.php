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
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::resource('kartu-hpl', KartuHplController::class);
    Route::get('/kartu-hpl', [KartuHplController::class, 'index'])->name('kartu.index');
    Route::get('/kartu-hpl/create', [KartuHplController::class, 'create'])->name('kartu.create');
    Route::post('/kartu-hpl', [KartuHplController::class, 'store'])->name('kartu.store');
    Route::post('/kartu-hpl', [KartuHplController::class, 'store'])->middleware('auth');
});

Route::resource('kartu-hpl', KartuHplController::class)
    ->middleware('auth');


require __DIR__.'/auth.php';
