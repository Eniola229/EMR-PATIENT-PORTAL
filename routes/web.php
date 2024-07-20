<?php

use App\Http\Controllers\ProfileController;
//This is Hospital Controller
use App\Http\Controllers\Hospital\EcounterController;
use App\Http\Controllers\Hospital\PharmacyController;
//THis is for payments
use App\Http\Controllers\Payment\PaystackController;
use App\Http\Controllers\Payment\PaymentsController;
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

Route::get('/paymentpage', function () {
    return view('paymentpage');
})->middleware(['auth', 'verified'])->name('paymentpage');

Route::get('/payment', function () {
    return view('payment');
})->middleware(['auth', 'verified'])->name('payment');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Ecounter
    Route::get('/ecounter', [EcounterController::class, 'show'])->name('ecounter.show');

    //Pharmacy
    Route::get('/pharmacy', [PharmacyController::class, 'show'])->name('pharmacy.show');

    //Paymentgateway (PayStack)
    Route::get('callback', [PaystackController::class, 'callback'])->name('callback');
    Route::get('success', [PaystackController::class, 'success'])->name('success');
    Route::get('cancel', [PaystackController::class, 'cancel'])->name('cancel');
    //To view user payment records
    Route::get('payments', [PaymentsController::class, 'show'])->name('payments');
});

require __DIR__.'/auth.php';
