<?php

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/trial/create', 'TrialController@create')->name('trial.create');
Route::post('/trial', 'TrialController@store');

Route::get('/user/verifyEmail', 'UserController@verifyEmail')->name('user.verifyEmail');
Route::get('/user/{user}/activate/{token}', 'UserController@activate')->name('user.activate');
Route::get('/user/resendEmail', 'UserController@resendEmail')->name('user.resendEmail');
