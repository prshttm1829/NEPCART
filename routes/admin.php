<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DeliveryChargeController;
use App\Http\Controllers\Admin\OfficeSettingController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard',function()
{
    return view('dashboard');
})->name('dashboard');

Route::resource('deliveryCharge',DeliveryChargeController::class);
Route::resource('officeSetting',OfficeSettingController::class);
Route::resource('productCategory',ProductCategoryController::class);
Route::resource('product',ProductController::class);
Route::get('profile',[LoginController::class,'profilePage'])->name('profile');
Route::put('updateProfile/{user}',[LoginController::class,'updateProfile'])->name('updateProfile');
Route::post('logout',[LoginController::class,'logout'])->name('logout');
Route::get('productPurchase',[DashboardController::class,'order'])->name('productPurchase');
Route::put('productPurchase/{productPurchase}',[DashboardController::class,'productStatus'])->name('productPurchase.productStatus');