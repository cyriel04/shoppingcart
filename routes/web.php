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

Route::get('/home', [
		'uses' => 'ProductController@getHome',
		'as' => 'home'


]);


Route::resource('insert', 'InsertController');


Route::get('/add-to-cart/{id}',[
		'uses' => 'ProductController@getAddToCart',
		'as' => 'product.addToCart'

	]);


Route::get('/reduce/{id}', [
		'uses' => 'ProductController@getReduceByOne',
		'as' => 'product.reduceByOne'
	]);

Route::get('/remove/{id}', [
		'uses' => 'ProductController@getRemoveItem',
		'as' => 'product.remove'
	]);

Route::get('/shopping-cart',[
		'uses' => 'ProductController@getCart',
		'as' => 'product.shoppingCart'

	]);

Route::get('/checkout',[
		'uses' => 'ProductController@getCheckout',
		'as' => 'checkout',
		'middleware' => 'auth'

	]);

Route::post('/checkout',[
		'uses' => 'ProductController@postCheckout',
		'as' => 'checkout',
		'middleware' => 'auth'

	]);
 


Route::group(['middleware' => 'guest'], function(){
	Route::get('/signup', [
		'uses' => 'UserController@getSignup',
		'as' => 'user.signup'
]);

Route::post('/signup', [
		'uses' => 'UserController@postSignup',
		'as' => 'user.signup'
]);


	Route::get('/signin', [
		'uses' => 'UserController@getSignin',
		'as' => 'user.signin'
]);

Route::post('/signin', [
		'uses' => 'UserController@postSignin',
		'as' => 'user.signin'
]);
});


Route::group(['middleware' => 'auth'], function(){


Route::get('/profile', [
		'uses' => 'UserController@getProfile',
		'as' => 'user.profile'
]);


Route::get('/logout', [
		'uses' => 'UserController@getLogout',
	'as' => 'user.logout'
]);


}); 



// Auth::routes();
// Route::get('/home', 'HomeController@index');

// Route::post('/login/custom', [
// 	'uses' => 'LoginController@login',
// 	'as' => 'login.custom'

// ]);


// Route::group(['middleware' => 'auth'], function(){



// 	Route::get('/home', function(){
// 		return view('home');
// 	})->name('home');;


	Route::get('/dashboard', function(){
		return view('dashboard');
	})->name('dashboard');


	Route::get('/pdf', [
		'uses' => 'PDFController@pdf',
		'as' => 'pdf'
	]);


// });