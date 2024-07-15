<?php

use App\Http\Controllers\ProfileController;
//This is Hospital Controller
use App\Http\Controllers\Hospital\EcounterController;
use App\Http\Controllers\Hospital\PharmacyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/ecounter', function () {
    return view('ecounter');
})->middleware(['auth', 'verified'])->name('ecounter');

Route::get('/pharmacy', function () {
    return view('pharmacy');
})->middleware(['auth', 'verified'])->name('pharmacy');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Ecounter
    Route::get('/ecounter', [EcounterController::class, 'show'])->name('ecounter.show');

    //Pharmacy
    Route::get('/pharmacy', [PharmacyController::class, 'show'])->name('pharmacy.show');
});

require __DIR__.'/auth.php';
