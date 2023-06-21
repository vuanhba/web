<?php
use Illuminate\Support\Facades\Route;
use Modules\Products\Controllers\Products;

Route::get('Products', [Products::class , 'index']);