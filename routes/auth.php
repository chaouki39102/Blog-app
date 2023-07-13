<?php

use App\Http\Controllers\auth\ForgetController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;

route::name('auth.')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::get('reset-password', [ResetPasswordController::class, 'index'])->name('reset-password');
    Route::get('forget', [ForgetController::class, 'index'])->name('forget');
});
