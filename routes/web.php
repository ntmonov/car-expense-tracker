<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

Route::prefix('cars')->group(function () {
    Route::get('/',[CarController::class, 'index'])->name('home.index');
    Route::get('/create',[CarController::class, 'create'])->name('cars.create.index');
    Route::post('/cars',[CarController::class, 'store'])->name('cars.create.store');
    Route::get('/{id}',[CarController::class, 'edit'])->name('cars.edit.index');
    Route::patch('/{id}',[CarController::class, 'update'])->name('cars.edit.update');
});
