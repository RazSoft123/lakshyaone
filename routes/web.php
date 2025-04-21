<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
});

Route::resource('login', AuthController::class)->only(['index', 'store']);
