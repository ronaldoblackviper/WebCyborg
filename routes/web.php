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

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/Contact', function () {
    return view('contact');
});

Route::get('/Product', function () {
    return view('product');
});

Route::get('/Register', function () {
    return view('register');
});

Route::get('/Login', function () {
    return view('login');
});

Route::get('/About', function () {
    return view('about');
});

Route::get('/Cart', function () {
    return view('cart');
});

Route::get('/sendemail','SendEmailController@index');

Route::post('/sendemail/send','SendEmailController@send');