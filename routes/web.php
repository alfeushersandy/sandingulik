<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Landing\ArtikelController;
use App\Http\Controllers\Landing\LandingController;
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

Route::get('/', LandingController::class)->name('landing');

Route::get('/artikel', ArtikelController::class);
Route::resource('/admin', DashboardController::class);
