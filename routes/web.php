<?php

use App\Http\Controllers\UserInterface\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserInterface\HomeController;



Route::get('/404', function () {
    return view('pageNotFound.pageNotFound');
})->name('force.redirect');

Route::fallback(function () {
    return redirect()->route('force.redirect');
});


// Frontend Routes
Route::get('/login', [AuthController::class, 'userLogin'])->name('login');
Route::get('/registration', [AuthController::class, 'userRegistration'])->name('register');
Route::get('/send-otp', [AuthController::class, 'userSendOtp'])->name('sendOtp');
Route::get('/verify-otp', [AuthController::class, 'userVerifyOtp'])->name('verifyOtp');
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/category/{id}/products', [HomeController::class, 'categoryProducts'])->name('category.products');
Route::middleware('tokenVerify')->group(function () {
    Route::get('/reset-password', [AuthController::class, 'userResetPassword']);
});
