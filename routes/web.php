<?php

// use App\Http\Controllers\HomeController;

use App\Http\Controllers\GetFileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes 
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('files', GetFileController::class)->name('get-file');
Route::resource('posts', PostController::class);
require 'auth.php';
require 'admin.php';

