<?php
Route::get('/', 'TodoController@index'); 
Route::post('/','TodoController@store');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
