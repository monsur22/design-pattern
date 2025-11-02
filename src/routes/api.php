<?php

use App\Http\Controllers\BurgerController;
use App\Http\Controllers\CoffeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/coffee', [CoffeeController::class, 'index']);
