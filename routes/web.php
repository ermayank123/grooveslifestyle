<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Route for the Home page
Route::get('/desktop1', [HomeController::class, 'desktop1']);

// Route for the Contact page
Route::get('/desktop3', [HomeController::class, 'desktop3']);
Route::get('/desktop4', [HomeController::class, 'desktop4']);