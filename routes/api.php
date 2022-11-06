<?php

use App\Http\Controllers\{ProductController, CategoryController, TokenApiController};
use Illuminate\Support\Facades\Route;

// Route::resource('/product', ProductController::class);

Route::apiResource('/product', ProductController::class);
Route::apiResource('/category', CategoryController::class);
Route::post('token-api', TokenApiController::class);
