<?php

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/trial/create', 'TrialController@create')->name('trial.create');
Route::post('/trial', 'TrialController@store')->name('trial.store');
Route::get('/trial/{trial}/delete', 'TrialController@delete')->name('trial.delete');

Route::get('/user/verifyEmail', 'UserController@verifyEmail')->name('user.verifyEmail');
Route::get('/user/{user}/activate/{token}', 'UserController@activate')->name('user.activate');
Route::get('/user/resendEmail', 'UserController@resendEmail')->name('user.resendEmail');
