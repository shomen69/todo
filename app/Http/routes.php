<?php
Route::get('/', 'TodoController@index'); // Show home.blade.php

Route::post('/','TodoController@store');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
