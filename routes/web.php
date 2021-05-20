<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetProducts;


Route::get('/', [GetProducts::class, 'getProductsMain']);
Route::get('/category', [GetProducts::class, 'getProductsCategory']);
Route::get('/profile', [UserController::class, 'getProfile']);
Route::post('/profile', [UserController::class, 'postProfile']);
