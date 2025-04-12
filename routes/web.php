<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserHomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('home', UserHomeController::class);