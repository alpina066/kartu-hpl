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
    Route::get('/kartu-hpl', [KartuHplController::class, 'index']);
    Route::get('/kartu-hpl/create', [KartuHplController::class, 'create']);
    Route::post('/kartu-hpl', [KartuHplController::class, 'store']);

    Route::get('/kartu-hpl/edit', [KartuHplController::class, 'edit']);
    Route::put('/kartu-hpl/update', [KartuHplController::class, 'update']);
    Route::delete('/kartu-hpl/delete', [KartuHplController::class, 'destroy']);
});

require __DIR__.'/auth.php';
