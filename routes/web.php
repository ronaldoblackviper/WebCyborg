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

Route::get('/About', function () {
    return view('about');
});

Route::get('/sendemail','SendEmailController@index');

Route::post('/sendemail/send','SendEmailController@send');

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
Route::get('/profile', [
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

// Route::get('/admin', function () {
//     return view('home');
// });
Route::get('/loginadmin',[
    'uses' => 'AuthController@login',
    'as' => 'login.admin'
]);
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logoutadmin','AuthController@logout');

// Route::group(['middleware'=>'auth'] ,function(){
//     Route::get('/dashboard', [
//         'uses' => 'DashboardController@dashboard_index',
//         'as' => 'dashboard.admin'
//     ]);
//     // Route::get('/admin', 'AdminController@admin_index');
//     Route::get('/user', 'UserController@user_index');
//     Route::get('/user/{id}/edit','UserController@edit');
//     Route::post('/user/{id}/update','UserController@update');
//     Route::get('/user/{id}/delete','UserController@delete');
//     Route::get('/aplikasi', 'AplikasiController@aplikasi_index');
//     Route::get('/aplikasi/{id}/edit','AplikasiController@edit');
//     Route::post('/aplikasi/{id}/update','AplikasiController@update');
//     Route::get('/aplikasi/{id}/delete','AplikasiController@delete');
//     Route::post('/aplikasi/create','AplikasiController@create');
// });
Route::get('/dashboard', [
    'uses' => 'DashboardController@dashboard_index',
    'as' => 'dashboard.admin',
    'middleware' => 'auth'
]);
Route::group(['middleware'=>'auth'] ,function(){
    // Route::get('/admin', 'AdminController@admin_index');
    Route::get('/user', 'UserController@user_index');
    Route::get('/user/{id}/edit','UserController@edit');
    Route::post('/user/{id}/update','UserController@update');
    Route::get('/user/{id}/delete','UserController@delete');
    Route::get('/aplikasi', 'AplikasiController@aplikasi_index');
    Route::get('/aplikasi/{id}/edit','AplikasiController@edit');
    Route::post('/aplikasi/{id}/update','AplikasiController@update');
    Route::get('/aplikasi/{id}/delete','AplikasiController@delete');
    Route::post('/aplikasi/create','AplikasiController@create');
});

