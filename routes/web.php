<?php

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/trial/create', 'TrialController@create')->name('trial.create');
Route::get('/user/verifyEmail', 'UserController@verifyEmail')->name('user.verifyEmail')->middleware('notVerified');
