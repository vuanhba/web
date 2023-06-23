<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('page.client.index');
    }
    public function cart(){
        return view('page.client.cart');

    }
    public function shop(){
        return view('page.client.shop');

    }
    public function productDetail(){
        return view('page.client.productDetail');

    }
    
}
