<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\PortfolioController;

Route::get('/pprofile', function () {
    return view('user-profile');
})->name('user-profile');

Route::get('/chat', function () {
    return view('chat');
})->name('chat');
Route::get('/settings', function () {
    return view('artisan.settings');
})->name('artisan.settings.update');

Route::get('/artisan-dashboard', function () {
    return view('artisan-dashboard');
})->name('artisan-dashboard');

//authentification
Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('show.regsiter');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//admin
Route::get('/dashboard', [AdminController::class,'index'])->name('dashbaord');



//artisans
Route::get('/', [ArtisanController::class,'homepage'])->name('homepage');
Route::get('/artisans', [ArtisanController::class,'index'])->name('artisans');
Route::get('/artisan/{id}', [ArtisanController::class, 'show'])->name('artisan.show');
Route::put('/artisan/{id}', [ArtisanController::class, 'update'])->name('artisan.update');
Route::delete('/artisan/{id}', [ArtisanController::class, 'destroy'])->name('artisan.destroy');
Route::get('/artisan/{id}/portfolio', [ArtisanController::class, 'portfolio'])->name('artisan.portfolio');
Route::post('/artisan/{id}/portfolio', [ArtisanController::class, 'storePortfolio'])->name('artisan.portfolio.store');
Route::delete('/artisan/{id}/portfolio/{portfolioId}', [ArtisanController::class, 'destroyPortfolio'])->name('artisan.portfolio.destroy');

//requests
Route::post('/artisan/{id}/request', [RequestController::class, 'store'])->name('artisan.request');

//reviews
Route::post('/review/{id}', [ReviewController::class, 'store'])->name('review.store');

// categories
Route::post('/category}', [CategoryController::class, 'store'])->name('category.store');
Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

//sub categories
Route::post('/subcategory}', [SubCategoryController::class, 'store'])->name('subcategory.store');
Route::put('/subcategory/{id}', [SubCategoryController::class, 'update'])->name('subcategory.update');
Route::delete('/subcategory/{id}', [SubCategoryController::class, 'destroy'])->name('subcategory.destroy');

// portfolios
Route::get('/artisan/{id}/portfolio', [PortfolioController::class, 'show'])->name('portfolio.show');


