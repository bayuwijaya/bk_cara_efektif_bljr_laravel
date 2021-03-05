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

/* Routing Bab Controller */
Route::get('gambarupload', 'HitungController@uploadgambar');
Route::post('gambarupload', 'HitungController@prosesgambar');


Route::get('/', 'HitungController@menuHitung');
Route::get('jumlah', 'HitungController@showHitung');
Route::post('jumlah', 'HitungController@processHitung');

Route::get('kali', 'HitungController@viewKali');
Route::post('kali', 'HitungController@processKali');


/*Bab Tentang Pengenalan Form*/
Route::get('useform', 'BuatController@register');
Route::post('useform', 'BuatController@prosesInput');

Route::get('validate', 'ValidateController@utama');
Route::post('validate', 'ValidateController@process');
Route::get('userresults', function()
{
	return dd(Input::old());
});


Route::get('upload', function() 
{
  return View::make('fileform');
});
Route::post('upload', 'ValidateController@upload');


/*Bab Pengenalan Operasi Database*/
Route::get('shows', function()
{
	$shows = new Shows();
	$shows_by_rating = $shows->allShows('rating', 'DESC');
	dd($shows_by_rating);
});

Route::get('shows_1', function()
{
	$shows = new Shows();
	$shows_by_rating = $shows->allShows('rating', 'DESC');
	dd($shows_by_rating);
});


Route::get('shows_2', 'ValidateController@showData');
Route::get('showtop', 'ValidateController@showTopData');

/*Bab Tentang Sistem Authentikasi*/
Route::get('login', 'RegistrationController@login');
Route::post('login', 'RegistrationController@authenticate');

Route::get('register', 'RegistrationController@register'); 
Route::post('register', 'RegistrationController@store');

Route::group(array('before' => 'auth'), function()
{
	Route::get('tambah', 'CrudController@tambahdata');
	Route::post('tambah', 'CrudController@store');
	Route::get('profile', 'CrudController@tampildata');
	Route::get('book/edit/{id}', 'CrudController@edit');
	Route::post('book/update', 'CrudController@update');
	Route::get('book/delete/{id}', 'CrudController@delete');

	Route::get('book/viewdata/{id}', 'CrudController@viewdata');
	
	Route::get('logout', array('uses' => 'RegistrationController@logout'));
});


//Route::get('registration', 'RegistrationController@index');
//Route::post('registration', 'RegistrationController@store');
/*

Route::get('abc', function()
{
 
	$abc = new Abc;
	dd( $abc->all() ); // Output: Showing all shows :/
 
});
*/
/*
Route::get('users', function()
{
    $users = user::all();

    return View::make('user')->with('user', $users);
});
*/
//Route::post('menampilkan', 'ValidateController@greensand');

/*
Route::get('shows', function()
{
	$shows = new Show();
	$shows_by_rating = $shows->allShows('rating', 'DESC');
	dd($shows_by_rating);
});
*/
/*
Route::get('users', function()
{
    $users = Show::all();

    return View::make('users')->with('users', $users);
});
*/

/*

//Route::get('fileform', 'ValidateController@inputFile');
//Route::post('fileform', 'ValidateController@processFile');

//Route::get('fileform', 'FileController@fileinput');
//Route::post('fileform', 'FileController@fileprocess');
*/
/*



/*
Route::get('userform', function()
{
	return View::make('userform');
});
Route::post('userform', function()
{
	$rules = array(
	'email' => 'required|email|different:username',
	'username' => 'required|min:6',
	'password' => 'required|same:password_confirm'
	);
	$validation = Validator::make(Input::all(), $rules);
	if ($validation->fails())
	{
		return Redirect::to('userform')->withErrors($validation)->withInput();
	}
	return Redirect::to('userresults')->withInput();
});
Route::get('userresults', function()
{
	return dd(Input::old());
});
*/
/*
Route::get('account/login', function()
{
   return View::make('log');
});
Route::post('account/login', 'AccountController@login');


*/
/*
Route::get('register', 'UserController@register'); 
Route::post('store', 'UserController@store');

Route::get('login', 'UserController@login');
Route::post('authenticate', 'UserController@authenticate');

Route::get('dashboard', 'DashboardController@index');
Route::get('logout', 'UserController@logout');
Route::get('input', 'BookController@inputBook');
Route::post('book/insert', 'BookController@store');
*/
//Route::get('tampil', 'BookController@tampil');

/*
Route::get('/', function()
{
  return View::make('hello');
});
*/
// File app/routes.php
/*
Route::get('/', 'HomeController@showWelcome');
Route::get('login', 'LoginController@showLogin');
Route::post('login', 'LoginController@processLogin');
*/