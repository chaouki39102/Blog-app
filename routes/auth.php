<?php

use App\Http\Controllers\auth\LoginController;
use Illuminate\Support\Facades\Route;

route::name('auth.')->group(function () {
    Route::get('login', [LoginController::class, 'index'])->name('login');
});
