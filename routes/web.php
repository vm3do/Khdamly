<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/artisans', function () {
    return view('artisans');
})->name('artisan');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/pprofile', function () {
    return view('user-profile');
})->name('user-profile');

Route::get('/chat', function () {
    return view('chat');
})->name('chat');

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