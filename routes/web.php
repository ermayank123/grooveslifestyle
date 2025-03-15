<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Route for the Home page
Route::get('/home', [HomeController::class, 'home']);

// Route for the Contact page
Route::get('/school', [HomeController::class, 'school']);