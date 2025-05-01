<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Signup;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('index');
});

// Route::get('/login', function() {
//     return view('login');
// })->name('login');

// Route::get('/dashboard', function() {
//     return view('dashboard');
// })->middleware('auth')->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// Route::resource('dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

/*
Route::get('/login', function() {
    return redirect()->action([AuthController::class, 'index']);
})->name('login');

*/

// Route::resource('/login', AuthController::class)->only(['index', 'store'])->name(['login.index','login.store'],'login');
Route::resource('signup', Signup::class)->only(['index', 'store']);


// Auth routes for the pages
Route::get('/login', [AuthController::class, 'index'])->name('login');
// Route::get('/login', [AuthController::class, 'index'])->name('login.index');
Route::post('/login', [AuthController::class, 'store'])->name('login.store');

// Logout route
Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');

// All the routes of user model
Route::resource('user', UserController::class);
