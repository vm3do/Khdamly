<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\UserController;

Route::get('/pprofile', function () {
    return view('user-profile');
})->name('user-profile');

// Route::get('/chat', function () {
//     return view('chat');
// })->name('chat');

//authentification
Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('show.regsiter');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/pending', [ArtisanController::class, 'pending'])->name('artisan.pending');

Route::get('/', [ArtisanController::class,'homepage'])->name('homepage');


Route::middleware(['auth', 'pending', 'banned'])->group(function(){


    Route::middleware('auth')->group(function(){
        //users
        Route::put('/user/{id}/update-personal-info', [UserController::class, 'updateInfo'])->name('user.update.info');
        Route::put('/user/{id}/update-password', [UserController::class, 'updatePassword'])->name('user.update.password');
        Route::put('/user/{id}/update-profile', [UserController::class, 'updateProfile'])->name('user.update.profile');
        Route::get('settings', [UserController::class, 'settings'])->name('settings');

        //artisans
        Route::get('/artisans', [ArtisanController::class,'index'])->name('artisans');
        Route::get('/artisan/{id}', [ArtisanController::class, 'show'])->name('artisan.show');


        //requests
        Route::post('/artisan/{id}/request', [RequestController::class, 'store'])->name('artisan.request');
        //reviews
        Route::post('/review/{id}', [ReviewController::class, 'store'])->name('review.store');

        // requests & messages ( chat system )
        Route::post('/artisan/{id}/request', [RequestController::class, 'store'])->name('request.store');

        Route::middleware('artisan')->group(function(){

            Route::put('/artisan/{id}/request', [RequestController::class, 'update'])->name('request.update');  
            Route::delete('/artisan/{id}/request', [RequestController::class, 'destroy'])->name('request.destroy');
            Route::get('/artisan/{id}/request', [RequestController::class, 'show'])->name('request.show');
            Route::put('/artisan/{id}/request/approve', [RequestController::class, 'approve'])->name('request.approve');
            Route::put('/artisan/{id}/request/refuse', [RequestController::class, 'refuse'])->name('request.refuse');
            Route::get('/artisan-dashboard', [ArtisanController::class, 'dashboard'])->name('artisan.dashboard');
        });

        Route::get('/chats', [RequestController::class, 'chats'])->name('request.chats');
        Route::get('/chat/{id}', [RequestController::class, 'showChat'])->name('request.show.chat');

        // messages 
        Route::post('/chat/{id}/message', [MessageController::class, 'store'])->name('message.store');
    });


});


//admin
Route::middleware(['admin'])->group(function(){

    Route::get('/dashboard', [AdminController::class,'index'])->name('dashbaord');
    Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::put('/user/{id}', [UserController::class, 'manage'])->name('user.manage');
    Route::delete('/artisan/{id}', [ArtisanController::class, 'destroy'])->name('artisan.destroy');
    Route::put('/artisan/{id}/refuse', [ArtisanController::class, 'refuse'])->name('artisan.refuse');
    Route::put('/artisan/{id}/approve', [ArtisanController::class, 'approve'])->name('artisan.approve');

    //sub categories
    Route::post('/subcategory}', [SubCategoryController::class, 'store'])->name('subcategory.store');
    Route::put('/subcategory/{id}', [SubCategoryController::class, 'update'])->name('subcategory.update');
    Route::delete('/subcategory/{id}', [SubCategoryController::class, 'destroy'])->name('subcategory.destroy');

    // categories
    Route::post('/category}', [CategoryController::class, 'store'])->name('category.store');
    Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    // portfolios
    Route::get('/artisan/{id}/portfolio', [PortfolioController::class, 'show'])->name('portfolio.show');
    
});

