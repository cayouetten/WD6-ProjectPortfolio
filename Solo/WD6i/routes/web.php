<?php

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

Route::get('/', [
	'uses' => 'ProductController@getIndex',
	'as' => 'product/index'
]);

Route::get('/home', [
	'uses' => 'ProductController@getHome',
	'as' => 'product/home'
]);

Route::get('/add-to-cart/{id}', [
	'uses' => 'ProductController@getAddToCart',
	'as' => 'product/addToCart'
]);

Route::get('/remove-from-cart/{id}', [
	'uses' => 'ProductController@getRemoveFromCart',
	'as' => 'product/removeFromCart'
]);

<<<<<<< HEAD
<<<<<<< HEAD
=======
Route::get('/remove-all-cart-item/{id}', [
	'uses' => 'ProductController@getRemoveAllCartItem',
	'as' => 'product/removeAllCartItem'
]);

>>>>>>> checkout
=======
>>>>>>> wish-list
Route::get('/shopping-cart', [
	'uses' => 'ProductController@getCart',
	'as' => 'product/shoppingCart'
]);

Route::get('/checkout', [
	'uses' => 'ProductController@getCheckout',
	'as' => 'checkout',
	'middleware' => 'auth'
]);

Route::post('/checkout', [
	'uses' => 'ProductController@postCheckout',
	'as' => 'checkout',
	'middleware' => 'auth'
]);

Route::get('/add-to-wish-list/{id}', [
	'uses' => 'ProductController@getAddToWishList',
	'as' => 'product/addToWishList'
]);

<<<<<<< HEAD
<<<<<<< HEAD
=======
Route::get('/add-to-cart-from-wish-list/{id}', [
	'uses' => 'ProductController@getAddToCartFromWishlist',
	'as' => 'product/addToCartFromWishlist'
]);

>>>>>>> checkout
=======
>>>>>>> wish-list
Route::get('/remove-from-wish-list/{id}', [
	'uses' => 'ProductController@getRemoveFromWishList',
	'as' => 'product/removeFromWishList'
]);

<<<<<<< HEAD
<<<<<<< HEAD
=======
Route::get('/remove-all-wishlist-item/{id}', [
	'uses' => 'ProductController@getRemoveAllWishlistItem',
	'as' => 'product/removeAllWishlistItem'
]);

>>>>>>> checkout
=======
>>>>>>> wish-list
Route::get('/wish-list', [
	'uses' => 'ProductController@getWishList',
	'as' => 'product/wishList'
]);

Route::group(['prefix' => 'users'], function(){
	Route::group(['middleware' => 'guest'], function() {
		Route::get('/signup', [
		'uses' => 'UserController@getSignup',
		'as' => 'users/signup'
		]);

		Route::post('/signup', [
			'uses' => 'UserController@postSignup',
			'as' => 'users/signup'
		]);

		Route::get('/signin', [
			'uses' => 'UserController@getSignin',
			'as' => 'users/signin'
		]);

		Route::post('/signin', [
			'uses' => 'UserController@postSignin',
			'as' => 'users/signin'
		]);
	});

	Route::group(['middleware' => 'auth'], function() {
		Route::get('/profile', [
			'uses' => 'UserController@getProfile',
			'as' => 'users/profile'
		]);

		Route::get('/logout', [
			'uses' => 'UserController@getLogout',
			'as' => 'users/logout'
		]);
	});
});