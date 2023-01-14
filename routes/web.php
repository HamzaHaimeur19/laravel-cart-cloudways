<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//create route for home and define route name called home
Route::get('/', [PagesController::class, 'index'])->name('home');

//create route to view products
Route::get('/shop', [ProductController::class, 'index'])->name('shop');

//create route to get a specific product
Route::get('/shop/{id}', [ProductController::class, 'show'])->name('product');

//create route te get our cart
Route::get('/cart', [CartController::class, 'cart'])->name('cart');

//add product to cart
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart'); // the name is used via hrefs in views

//delete product from cart
Route::get('delete-from-cart/{id}', [CartController::class, 'deleteFromCart'])->name('delete.from.cart');

//update quantity
Route::put('update-quantity/{id}', [CartController::class, 'updateQuantity'])->name('update.quantity');
