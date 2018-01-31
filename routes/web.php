<?php



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


Route::get('/Contact',[

'uses' => 'UserController@getContact',
'as' => 'home.comtact'

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











Route::get('/admin/login',[

  'uses' => 'AdminLoginController@getSignIn',
  'as' => 'adminsignin'
    
  

  ]);
Route::post('/admin/login',[
  'uses' => 'AdminLoginController@postSignIn',
  'as' => 'adminsignin'
  
  ]);
Route::get('/admin/signout',[

'uses' => 'AdminLoginController@getSignout',
'as' => 'admin.signout'

  ]);


Route::get('/admin',[
  'uses' => 'AdminController@getDashboard',
  'as' => 'dashboard',


  
 
  ]);

Route::get('/admin/user',[


'uses' =>'AdminController@getUser',
'as' => 'admin.user'

  ]);

Route::get('/admin/Category',[

 'uses' => 'CategoryController@getCategories',
 'as' => 'admin.category',
 'middleware' => 'auth:admin'

  ]);

Route::get('/admin/addCategory',[
'uses' =>'CategoryController@AddCategory',
'as' => 'admin.addCategory',
'middleware' => 'auth:admin'

  ]);

Route::post('/admin/addCategory',[

'uses' => 'CategoryController@postAddCategory',
'as' => 'admin.addCategory'

  ]);

Route::get('/admin/subCategory',[

'uses' => 'CategoryController@getSubCategory',
'as' =>'admin.subCategory',
'middleware' => 'auth:admin'

  ]);

Route::get('/admin/addsubCategory',[

'uses' => 'CategoryController@addSubCategory',
'as' =>'admin.addsubCategory',
'middleware' => 'auth:admin'

  ]);

Route::post('/admin/addsubCategory',[

'uses' => 'CategoryController@postaddSubCategory',
'as' =>'admin.addsubCategory'

  ]);

Route::get('/admin/product',[

'uses'=> 'ProductController@getProduct',
'as'=> 'admin.getproduct',
'middleware' => 'auth:admin'

  ]);

Route::get('/admin/feedbacks',[

'uses'=> 'UserController@getFeedback',
'as'=> 'admin.feedback',
'middleware' => 'auth:admin'

  ]);

  
Route::get('/admin/addProduct',[

'uses' => 'ProductController@addProduct',
'as' => 'admin.addProduct',
'middleware' => 'auth:admin'
  ]);

Route::post('/admin/addProduct',[
'uses' => 'ProductController@postaddProduct',
'as' => 'admin.addProduct'

  ]);

Route::get('/admin/order',[

'uses' => 'AdminController@getOrder',
'as' => 'admin.orders'

  ]);

Route::get('/contact',[

'uses' => 'UserController@getContact',
'as' => 'home.contact'

  ]);
  
  
  Route::post('/contact',[

'uses' => 'UserController@addContact',
'as' => 'home.contact'

  ]);
  
  
Route::get('/services',[

'uses' => 'UserController@getServices',
'as' => 'home.services'

  ]);
Route::get('/innovation',[

'uses' => 'UserController@getInnovation',
'as' => 'home.innovation'

  ]);
Route::get('/Support',[

'uses' => 'UserController@getSupport',
'as' => 'home.support'

  ]);

Route::get('/About',[

'uses' => 'UserController@getAbout',
'as' => 'home.about'

  ]);


Route::get('/PrivacyPolicy',[

'uses' => 'UserController@getPrivacyPolicy',
'as' => 'home.privacypolicy'

  ]);

Route::get('/ShippingPolicy',[

'uses' => 'UserController@getShippingPolicy',
'as' => 'home.shippingpolicy'

  ]);


Route::get('/Shop',[

'uses' => 'UserController@getShop',
'as' => 'home.shop'

  ]);

	

  
  Route::get('/Shop/{id}',[

   'uses' => 'UserController@getShopId',
   'as' => 'home.shopID'
  ]);

Route::get('/Shop/{cat_id}/{sub_cat_id}',[

   'uses' => 'UserController@getShopCId',
   'as' => 'home.shopCID'
  ]);