<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StoreRegistrationController;

// Page routes
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/index', [PageController::class, 'index'])->name('index');
Route::get('/register5', [PageController::class, 'register5'])->name('register5');

// Store registration routes
Route::group(['prefix' => 'store'], function () {
    Route::post('/register', [StoreRegistrationController::class, 'store'])
        ->name('store-registration');
    
    Route::get('/email-confirmation', [StoreRegistrationController::class, 'showEmailConfirmation'])
        ->name('email-confirmation');
    
    Route::post('/send-email-confirmation', [StoreRegistrationController::class, 'sendEmailConfirmation'])
        ->name('send-email-confirmation');
    
    Route::get('/verify-email/{token}', [StoreRegistrationController::class, 'verifyEmail'])
        ->name('verify-email');
    
    // Additional routes you might need
    Route::get('/verification-success', [StoreRegistrationController::class, 'verificationSuccess'])
        ->name('verification-success');
    
    Route::get('/invalid-token', [StoreRegistrationController::class, 'invalidToken'])
        ->name('invalid-token');
});