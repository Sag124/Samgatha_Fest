<?php

Route::get('/', ['uses' => 'PageController@getWelcome',
				  'as'  => 'pages.index'
	]);
Route::get('/about', ['uses' => 'PageController@getAbout',
				  'as'  => 'pages.about'
	]);
Route::get('/contact', ['uses' => 'PageController@getContact',
				  'as'  => 'pages.contact'
	]);


Route::get('/verifyEmailFirst', 'Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');
Route::get('/verify/{email}/{verifyToken}', 'Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');


