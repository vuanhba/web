<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\Auth\LoginController;
use App\Http\Controllers\Client\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\User\UsersController;
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
Auth::routes();
//start routes clients
Route::get('/',[ClientController::class,'index'])->middleware('guest:account')->name('home');
Route::prefix('clients')->name('clients.')->group(function () {
    

    Route::get('/',[ClientController::class,'index'])->middleware('auth:account')->name('home2');
    

    // Route::get('cart',[ClientController::class,'cart'])->name('cart');
     Route::get('login',[LoginController::class,'login'])->middleware('guest:account')->name('login');
     Route::post('login',[LoginController::class,'postLogin'])->middleware('guest:account')->name('postLogin');
     Route::get('forgot-password',[ForgotPasswordController::class,'forgotPassword'])->middleware('guest:account')->name('forgot-password');
     
     Route::post('forgot-password',[ForgotPasswordController::class,'sendResetLinkEmail'])->middleware('guest:account')->name('LinkEmail');

     Route::post('logout',[LoginController::class,'logout'])->middleware('auth:account')->name('logout');


});

//end routes clients



//start routes admin

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {

Route::get('/',[HomeController::class,'index'])->name('dashboard');

Route::prefix('users')->name('user.')->group(function () {
Route::get('list',[UsersController::class,'index'])->name('list');
Route::get('create',[UsersController::class,'create'])->name('create');
Route::post('create',[UsersController::class,'store'])->name('store');
Route::get('edit/{id}',[UsersController::class,'edit'])->name('edit');
Route::put('edit/{id}',[UsersController::class,'update'])->name('update');
// Route::post('edit',[UsersController::class,'update'])->name('update');
Route::get('delete/{id}',[UsersController::class,'destroy'])->name('delete');

});


});


//end routes clients







