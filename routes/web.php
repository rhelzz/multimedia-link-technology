<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserHomeController;

Route::resource('/', UserHomeController::class);