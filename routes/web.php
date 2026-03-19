<?php

use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Customer\ProductPurchaseController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/',[FrontendController::class,'index'])->name('welcome');
Route::get('product/{product:slug}',[FrontendController::class,'productDetail'])->name('productDetail');
Route::get('about',[FrontendController::class,'about'])->name('about');
Route::get('contact',[FrontendController::class,'contact'])->name('contact');
Route::get('category',[FrontendController::class,'category'])->name('category');
Route::get('category/{productCategory:slug}',[FrontendController::class,'categoryProduct'])->name('category.product');
Route::get('items',[FrontendController::class,'items'])->name('items');





Route::get('login',[LoginController::class,'loginPage'])->name('login');
Route::post('login',[LoginController::class,'login'])->name('login');
Route::get('customerRegister',[CustomerController::class,'customerRegisterPage'])->name('customerRegister');
Route::post('customerRegister',[CustomerController::class,'customerRegister'])->name('customerRegister');
Route::get('customerLogin',[CustomerController::class,'customerLoginPage'])->name('customerLogin');
Route::post('customerLogin',[CustomerController::class,'customerLogin'])->name('customerLogin');
Route::get('productPurchase/{product:slug}',[ProductPurchaseController::class,'productPurchasePage'])->name('productPurchase');


