<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\notificationController;
use App\Http\Controllers\experienceController;
use App\Http\Controllers\educationController;
use App\Http\Controllers\portfolioController;
use App\Http\Controllers\displayController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [displayController::class, "index"]);

Route::redirect('home', 'dashboard');

Route::get('/auth', [authController::class,"index"])->name('login')->middleware('guest');
Route::get('/auth/redirect', [authController::class,"redirect"])->middleware('guest');
Route::get('/auth/callback',[authController::class,"callback"])->middleware('guest');
Route::get('/auth/logout', [authController::class,"logout"]);

Route::prefix('/dashboard')->middleware('auth')->group(
    function() {
        Route::get('/', [notificationController::class, "index"]);
        Route::resource('notification', notificationController::class);
        Route::resource('experience', experienceController::class);
        Route::resource('education', educationController::class);
        Route::resource('portfolio', portfolioController::class);
    }
);