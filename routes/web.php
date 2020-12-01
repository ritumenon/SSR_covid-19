<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimaryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[PrimaryController::Class,'index']);
Route::get('products',[PrimaryController::Class,'products']);
Route::get('about',[PrimaryController::Class,'about']);
Route::get('contact',[PrimaryController::Class,'contact']);
Route::get('prod_des/{id}',[ProductController::Class,'prod_des']);
Route::get('login',[AccountController::Class,'get_account'])->name('login');
Route::post('login',[AccountController::Class,'post_login']);
Route::post('register',[AccountController::Class,'post_register']);
Route::get('add_to_cart/{id}',[CartController::Class,'get_add_to_cart']);
Route::get('cart',[CartController::Class,'get_cart']);
Route::get('delete_from_cart/{id}',[CartController::Class,'delete_item']);
Route::get('order_confirm',[OrderController::Class,'get_order'])->middleware('auth');
Route::post('/payment/status', [OrderController::Class,'paymentCallback'])->name('status');