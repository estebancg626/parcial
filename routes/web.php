<?php

Route::get('/','ParcialController@index');
Route::resource('parcial','ParcialController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
