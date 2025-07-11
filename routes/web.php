<?php

use App\Http\Controllers\HomeController;
USE App\Http\Controllers\TrackingController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);
Route::get('/rastreamento', TrackingController::class);

