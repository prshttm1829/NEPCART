<?php

use App\Http\Controllers\Customer\ProductPurchaseController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard',function(){
    return view('customer.dashboard');
})->name('dashboard');
Route::post('productPurchase/{product:slug}',[ProductPurchaseController::class,'productPurchase'])->name('productPurchase');
