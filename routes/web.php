<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;

use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\Auth\LoginController;
use App\Http\Controllers\Client\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\User\UsersController;

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandsController;

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








Route::prefix('admin')->group(function () {
        Route::get('/',[homecontroller::class,'index']);

        Route::prefix('products')->group(function () {
                Route::get('sanpham',[ProductController::class,'getlist']);
                Route::get('add',[ProductController::class,'formAdd']);
                Route::post('addProducts',[ProductController::class,'add']);
                Route::get('editProduct/{id}',[ProductController::class,'editProduct']);
                Route::post('updateProduct/{id}',[ProductController::class,'updateProduct']);
                Route::delete('deleteProduct/{id}',[ProductController::class,'deleteProduct']);

                // danh sách danh mục
                Route::get('categories', [CategoryController::class, 'getCategoryList'])->name('admin.categories.list');
                // thêm danh mục sản phẩm mới
                Route::get('categories/add', [CategoryController::class, 'showAddForm'])->name('categories.add-form');
                Route::post('categories/addCategories', [CategoryController::class, 'addCategory'])->name('categories.add');
                Route::get('categories/edit/{id}', [CategoryController::class, 'editCategory']);
                Route::post('categories/update/{id}', [CategoryController::class, 'updateCategory']);
                Route::delete('categories/delete/{id}',[CategoryController::class,'delete']);

                // danh sách thương hiệu
                Route::get('brands', [BrandsController::class, 'getBrandsList'])->name('admin.brands.list');
                // thêm danh mục sản phẩm mới
                Route::get('brands/add', [BrandsController::class, 'showAddForm'])->name('brands.add-form');
                Route::post('brands/addBrands', [BrandsController::class, 'addBrands'])->name('brands.add');
                Route::get('brands/edit/{id}', [BrandsController::class, 'edit']);
                Route::post('brands/update/{id}', [BrandsController::class, 'update']);
                Route::delete('brands/delete/{id}',[BrandsController::class,'delete']);
        });    
});

