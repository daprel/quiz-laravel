<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home',['title'=>'Home Page']);
});

Route::get('/inventory', function () {
    return view('inventory',['title'=>'Inventory']);
});

Route::get('/about', function () {
    return view('About',['title'=>'About']);
});

Route::get('/product', function () {
    return redirect()->route('products.index');
});

Route::resource('products', ProductController::class);
