<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['auth','check_type:admin'])->group(function () {

    Route::get('/', [DashboardController::class, 'index']);
});
