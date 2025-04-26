<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Signup;


Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function() {
    return view('dashboard');
});


/*
Route::get('/login', function() {
    return redirect()->action([AuthController::class, 'index']);
})->name('login');

*/

Route::resource('login', AuthController::class)->only(['index', 'store']);
Route::resource('signup', Signup::class)->only(['index', 'store']);
