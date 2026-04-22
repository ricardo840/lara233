<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;

Route::name('api.')->group(function () {
	Route::apiResource('categories', CategoryController::class);
	Route::apiResource('products', ProductController::class);
});