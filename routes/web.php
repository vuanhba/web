<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('admin')->group(function () {
        Route::get('/',[homecontroller::class,'index'])->name('dashboard');
});

