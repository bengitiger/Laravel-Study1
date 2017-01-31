<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/proflie/{slug}', [
        'uses' => 'ProfilesController@index'
    ]);
});
