<?php

use Illuminate\Support\Facades\Route;
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