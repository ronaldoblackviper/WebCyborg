<?php

Route::get('/', function () {
    return view('home');
});
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout','AuthController@logout');


Route::group(['middleware'=>'auth'] ,function(){

    Route::get('/dashboard', 'DashboardController@dashboard_index');
    Route::get('/admin', 'AdminController@admin_index');
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
