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

// Route::get('/Register', function () {
//     return view('register');
// });

// Route::get('/Login', function () {
//     return view('login');
// });

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/Contact', function () {
    return view('contact');
});

Route::get('/Product', function () {
    return view('product');
});

Route::get('/About', function () {
    return view('about');
});

Route::get('/sendemail','SendEmailController@index');

Route::post('/sendemail/send','SendEmailController@send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/checkout', function(){
    if(!auth::check()){
        return redirect('login');
    }
     $post = Session::get('cart');
     $post = $post[0];
     $post['user_id'] = auth::user()->id;
   
    return view('checkout', compact('post'));
});
   
Route::get("/Cart", function(){
    return view('cart');
});