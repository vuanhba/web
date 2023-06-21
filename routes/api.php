<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('admin')->group(function () {

    Route::prefix('products')->group(function () {
        Route::get('filter-by-price/{price}', [ProductController::class, 'filter_price']);
        Route::get('filter-by-cate/{cate}', [ProductController::class, 'filter_cate']);
        Route::get('filter-by-status/{status}', [ProductController::class, 'filter_status']);
    });    
});