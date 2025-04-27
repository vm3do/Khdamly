<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtisanController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/pprofile', function () {
    return view('user-profile');
})->name('user-profile');

Route::get('/chat', function () {
    return view('chat');
})->name('chat');
Route::get('/settings', function () {
    return view('artisan.settings');
})->name('artisan.settings.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/artisan-dashboard', function () {
    return view('artisan-dashboard');
})->name('artisan-dashboard');

Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('show.regsiter');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/artisans', [ArtisanController::class,'index'])->name('artisans');
Route::get('/artisan/{id}', [ArtisanController::class, 'show'])->name('artisan.show');
Route::put('/artisan/{id}', [ArtisanController::class, 'update'])->name('artisan.update');
Route::delete('/artisan/{id}', [ArtisanController::class, 'destroy'])->name('artisan.destroy');
Route::get('/artisan/{id}/portfolio', [ArtisanController::class, 'portfolio'])->name('artisan.portfolio');
Route::post('/artisan/{id}/portfolio', [ArtisanController::class, 'storePortfolio'])->name('artisan.portfolio.store');
Route::delete('/artisan/{id}/portfolio/{portfolioId}', [ArtisanController::class, 'destroyPortfolio'])->name('artisan.portfolio.destroy');

