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

Route::get('/Register', function () {
    return view('register');
});

Route::get('/Login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/Contact', function () {
    return view('contact');
});

// Route::get('/Product', function () {
//     return view('product');
// });

Route::get('/About', function () {
    return view('about');
});

Route::get('/sendemail','SendEmailController@index');

Route::post('/sendemail/send','SendEmailController@send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/checkout', function(){
//     if(!auth::check()){
//         return redirect('login');
//     }
//      $post = Session::get('cart');
//      $post = $post[0];
//      $post['user_id'] = auth::user()->id;
   
//     return view('checkout', compact('post'));
// });
   
// Route::get("/Cart", function(){
//     if(!auth::check()){
//         return redirect('login');
//     }

//     return view('cart');
// });

// Route::get('/', 'ProductsController@index');

// Route::get('cart', 'ProductsController@cart');

// Route::get('add-to-cart/{id}', 'ProductsController@addToCart');

// Route::patch('update-cart', 'ProductsController@update');
 
// Route::delete('remove-from-cart', 'ProductsController@remove');

Route::get('/product', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);
Route::get('/signup', [
    'uses' => 'UserController@getSignup',
    'as' => 'user.signup',
    'middleware' => 'guest'
]);
Route::post('/signup', [
    'uses' => 'UserController@postSignup',
    'as' => 'user.signup',
    'middleware' => 'guest'
]);
Route::get('/login', [
    'uses' => 'UserController@getLogin',
    'as' => 'user.login',
    'middleware' => 'guest'
]);
Route::post('/login', [
    'uses' => 'UserController@postLogin',
    'as' => 'user.login',
    'middleware' => 'guest'
]);
Route::get('/profle', [
    'uses' => 'UserController@getProfile',
    'as' => 'user.profile',
    'middleware' => 'auth'
]);
Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'user.logout',
    'middleware' => 'auth'
]);
Route::get('/add-to-cart/{id}',[
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'    
]);
Route::get('/reduce/{id}', [
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reduceone'
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
Route::get('/',[
    'uses' => 'ProductController@getHome',
    'as' => 'product.home'
]);