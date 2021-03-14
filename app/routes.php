<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('coffe', function()
{
	return View::make('hello');
});

/*
	Laravel menyediakan beberapa jenis metode request HTTP yang lebih tepat. 
	Beberapa methode request HTTP yang populer digunakan dalam aplikasi web saat ini adalah :

	GET
	POST
	DELETE
	PUT
	PATCH
	TRACE
	HEAD
	
*/