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
  'as' => 'product.index'
]);






Route::group(['middleware'=>'guest'],function(){


Route::get('/signup',[
'uses' => 'UserController@getSignUp',
'as' => 'user.signup'

	]);


Route::post('/signup',[
'uses' => 'UserController@postSignUp',
'as' => 'user.signup'

	]);


Route::get('/signin',[
'uses' => 'UserController@getSignIn',
'as' => 'user.signin'

	]);

Route::post('/signin',[
'uses' => 'UserController@postSignIn',
'as' => 'user.signin'

	]);


});

Route::group(['middleware'=>'auth'],function(){
	Route::get('/profile',[
'uses' => 'UserController@getProfile',
'as' => 'user.profile'

	]);

Route::get('/logout',[
'uses' => 'UserController@getLogout',
'as' => 'user.logout'

	]);

});




Route::get('/add-to-cart{id}',[

   'uses'  => 'ProductController@getAddtoCart',
   'as' => 'product.addToCart'


	]);



Route::get('/shopping-cart',[

   'uses'  => 'ProductController@getCart',
   'as' => 'product.shoppingCart'


	]);

Route::get('/reduce/{id}',[

   'uses' => 'ProductController@getReduceByOne',
   'as' => 'product.reduceByOne'
	]);

Route::get('/remove/{id}',[

   'uses' => 'ProductController@getRemoveItem',
   'as' => 'product.removeItem'
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










Route::get('/admin/signup',[

  'uses' => 'AdminController@getSignUp',
  'as' => 'adminsignup'
  
  

  ]);
Route::post('/admin/signup',[
  'uses' => 'AdminController@postSignUp',
  'as' => 'adminsignup'
  
  ]);
Route::get('/admin/signin',[

  'uses' => 'AdminController@getSignIn',
  'as' => 'adminsignin'
  

  ]);
Route::post('/admin/signin',[
  'uses' => 'AdminController@postSignIn',
  'as' => 'adminsignin'
  
  ]);



Route::get('/admin/dashboard',[
  'uses' => 'AdminController@getDashboard',
  'as' => 'dashboard',
  'middleware' => 'auth', 
  ]);




	

