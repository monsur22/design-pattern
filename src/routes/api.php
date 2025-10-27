<?php

use App\Http\Controllers\BurgerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/burger/make', [BurgerController::class, 'makeBurger']);
