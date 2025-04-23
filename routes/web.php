<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/artisans', function () {
    return view('artisans');
})->name('artisan');
