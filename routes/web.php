<?php
<<<<<<< HEAD
require 'admin.php';
=======

>>>>>>> d2a2a1c8eeade263e34c4c30efb94b56f50bd1dc
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

<<<<<<< HEAD


Route::get('/', 'Site\PageController@homepage')->name('home');
Route::get('/shop', 'Site\PageController@shoppage')->name('shop');
Route::get('/category/{slug}', 'Site\CategoryController@show')->name('category.show');
Route::get('/product/{slug}', 'Site\ProductController@show')->name('product.show');
Route::post('/cart/add/product', 'Site\CartController@addToCart')->name('addTocart');
Route::post('/cart/update/product', 'Site\CartController@updateCart')->name('updateCart');
Route::get('/cart', 'Site\CartController@getCart')->name('checkout.cart');
Route::get('/cart/item/{id}/remove', 'Site\CartController@removeItem')->name('checkout.cart.remove');
Route::get('/cart/clear', 'Site\CartController@clearCart')->name('checkout.cart.clear');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout', 'Site\CheckoutController@getCheckout')->name('checkout.index');
    Route::post('/checkout/order', 'Site\CheckoutController@placeOrder')->name('checkout.place.order');
});
Auth::routes();
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> d2a2a1c8eeade263e34c4c30efb94b56f50bd1dc
