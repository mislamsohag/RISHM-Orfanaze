<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'Home']);
Route::get('/home', [HomeController::class, 'Home']);
Route::get('/admission', [HomeController::class, 'admission']);
