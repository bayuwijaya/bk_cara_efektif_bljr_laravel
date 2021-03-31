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

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\View\View as ViewView;

Route::get('/', function() {
	return View::make('hello');
});

Route::get('coffe', function() {
	return View::make('hello');
});

/*	BAB 3	*/
/*	Laravel menyediakan beberapa jenis metode request HTTP yang lebih tepat. 
	Beberapa methode request HTTP yang populer digunakan dalam aplikasi web 
	saat ini adalah :
	GET		POST	DELETE	  PUT	 PATCH    TRACE 	HEAD  	*/

// Route definition for showing the login page
Route::get('login', function() {
	// Display a placeholder text to the user
	return '<form action="login" method="POST">
				Username : <input type="text" name="username"/> <br />
				Password : <input type="password" name="password"/>
				<input type="submit" value="Submit">
			</form>'; 
});
// Route definition for processing the login form 
Route::post('login', function() {
	// Display a placeholder text to the user
	return 'Username : '.$_POST["username"].', Password : '.$_POST["password"];
});
// Passing Parameter Routing
Route::get('coffee/latte/grande', function() {
	return 'Kinds of Coffe : Latte, Size : Grande';	
});
// Menggunakan Routing Parameter
Route::get('coffee/{kind}', function($kind) {
	return 'Requested kind of coffee drink : '.$kind;
});
// Passing menggunakan lebih dari satu parameter
Route::get('coffee/{kind}/{size}', function($kind, $size) {
	return 'Kind of coffee drink : '.$kind.', Size : '.$size;
});
// Route Constraint
Route::get('kopi/{kind}/{size}', function($kind, $size) {
	return 'Kind of coffee drink : '.$kind.', Size : '.$size.' Ons';
})->where('size', '[0-9]+');
// Membuat Parameter Router Opsional
Route::get('juice/{kind}/{size?}', function($kind, $size=null) {
	return 'Kind of juice drink : '.$kind.', Size : '.$size;
});
// Optional Route Parameters With Defaults
Route::get('milk/{packing}/{animal?}', function($packing, $animal='cows') {
	return 'Packaging of milk drinks : '.$packing.' shaped, From Animal : '.$animal;
})->where('animal', '[A-Za-z]+');
// Passing An Array Of Wheres
Route::get('shirt/{kind}/{color}/{size}', function($kind, $color, $size) {
	return 'I want to purchase shirt with kind : '.$kind.', Color : '.$color.', Size : '.$size;
})->where(array('kind' => '[A-Za-z]+', 'color' => '[a-z]+', 'size' => '[0-9]+'));

/*	Routing menggunakan Filter Custom	*/
Route::get('jamu/{kind}/{size?}', 
	array('before'=>'checksize', function($kind, $size=null) {
		return 'Kind of Jamu drink : '.$kind.', Size : '.$size;
	})
);

Route::get('user', 
	array('before' => 'human_life_zone:35', function() {
    	return 'Anda Hidup di Zona Kerja, Selamat !!! ';
	})
);

/* 	Jenis Statement Return dalam Fungsi Routing 
		return View::make('contact');
		return 'Route Response';
		return Redirect::to('tea');		*/

// A) Routing Response tipe Return String Teks
Route::get('text', function() {
	return 'This is route response';
});
// B) Routing Response tipe Return HTML page
Route::get('html', function() {
	return '<b>This text is bold!</b>';
});
// C) Routing Response tipe Return View::make() yang membuat pemanggilan terhadap file2 di folder app/views
Route::get('view_call', function() {
	return View::make('page');
}); 

/* Redirects
   Laravel menyediakan beberapa cara untuk menggunakan teknik ini, yaitu :
	A) Redirect ulang ke URL lain dalam aplikasi.
	B) Redirect ke nama destination atau alamat routing
	C) Redirect fungsi di dalam kelas (controller)	*/

// A) Redirect URL ke dalam aplikasi
Route::get('hello', function() {
	return Redirect::to('login');
});
Route::get('login', function() {
	return View::make('page');
});

// B) Redirect ke nama routing
Route::get('beverage', function() {
	return Redirect::route('tea');	
});
Route::get('this-is-tea', array('as'=>'tea', function() {
	return 'I am the tea route';
}));

/*	Bab 4	*/
// Membuat dan Mengatur View
Route::get('log-in', function() {
	return View::make('auth.login');
});
Route::get('log-out', function() {
	return View::make('auth.logout');
});
Route::get('register', function() {
	return View::make('auth.register');	
});

// Passing Data ke View
Route::get('passingdataview', function() {
	return View::make('bab_4.native_page');
});

// Menggunakan View::make()
Route::get('common-pass-data', function() {
	$data = array('currentDateTime' => date('Y-m-d H:i:s'));
	return View::make('bab_4.login_common_passing_data', $data);
});

// Menggunakan with()
Route::get('using-with', function() {
	$date = date('Y-m-d');
	$time = date('H:i:s');
	return View::make('bab_4.login_using_method_with')->with('tanggal', $date)->with('waktu', $time);
});

/* Blade Template Engine 
	A)	Common View (.php)				  		Blade Views (.blade.php)
			<?php echo(date('Y')); ?>				{{ date('Y') }}
	B) 	Looping data menggunakan PHP			Looping data menggunakan Blade
			<?php foreach($users as $user) { ?>		@foreach($users as $user)
			<p>										<p>
			<?php echo($user->name); ?> <br />		{{ $user->name }} <br />
			<?php echo($user->address); ?>			{{ $user->address }}
			</p>									</p>
	C)	Pernyataan kondisional dengan PHP 		Pernyataan kondisional dengan Blade
			<?php if($category == 'blog') { ?>		@if($category == 'blog')
			...										...
			<?php } else { ?>						@else
			...										...
			<?php } ?>								@endif
*/

// Output Data and Escapping Data
Route::get('output-escapping-data', function() {
	$name = 'John';
	return View::make('bab_4.output_using_blade')->with('name', $name);	
});

// Conditional Statement di Views dengan PHP biasa
Route::get('conditional-statement-native', function() {
	$currentTime = date('a');
	return View::make('bab_4.conditional_statement_native')->with('timeOfDay', $currentTime);
});

// Conditional Statement di Views dengan Blade Engine
Route::get('conditional-statement-blade', function() {
	// Get the current time of day, 'am' or 'pm'
	$waktuSkrg = date('a');
	return View::make('bab_4.conditional_statement_blade')->with('janiWaktu', $waktuSkrg);
});

Route::get('count-records-using-blade', function() {
	$jurusan = array('Teknik Sipil', 'Teknik Mesin', 'Teknik Elektro', 'Teknologi Informasi');
	return View::make('bab_4.count_records_using_blade')->with('departemen', $jurusan);
});

Route::get('conditional-statement-unless', function() {
	$client = array('Agus Mahardika', 'Ari Saputra', 'Edy Erawan', 'Awin Surya', 'Yogi Swanjaya');
	return View::make('bab_4.conditional_statement_unless')->with('user', $client);
});

/* Looping Statement di Views dengan Blade Engine	*/
// foreach(array_or_object as $value)
Route::get('looping-foreach-asvalue', function() {
	$pengguna = array('User 1', 'User 2', 'User 3', 'User 4');
	return View::make('bab_4.looping_foreach_asvalue')->with('users', $pengguna);
}); 

// foreach(array_or_object as $key => $value)
Route::get('looping-foreach-askey-value', function() {
	$mahasiswa = array("Peter" => 35,
					   "Ben"   => 37,
					   "Joe"   => 43);
	return View::make('bab_4.looping_foreach_askey_value')->with('student', $mahasiswa);
});

// for(expression1, expression2, expression3)
Route::get('looping-for', function() {
	return View::make('bab_4.looping_for');	
});

// while(expression)
Route::get('looping-while', function() {
	return View::make('bab_4.looping_while');
});

Route::get('looping-forelse', function() {
	$karyawan = array("Pipit Candra" 	=> "Bidan",
					  "Ema Rindayani" 	=> "Risk Management",
					  "Silvi Ariani"  	=> "Balinese Chef", 
					  "Ayu Yuniantari"	=> "Perawat");
	return View::make('bab_4.looping_forelse')->with('employees', $karyawan);
});

/* Blade Layout di Views dengan Blade Engine	*/
Route::get('blade-layout-home', function() {
	return View::make('bab_4.blade_layout.pages.home');
});

Route::get('blade-layout-portodetails', function() {
	return View::make('bab_4.blade_layout.pages.portfolio_details');
});

Route::get('blade-layout-innerpage', function() {
	return View::make('bab_4.blade_layout.pages.inner_page');
});

/*	Bab 5	*/
// Default Controller Laravel
Route::get('default-controller', 'HomeController@showWelcome');

// Controller Aplikasi Simple Login 
Route::get('login-use-controller', 'LoginController@showLogin');
Route::post('login-use-controller', 'LoginController@processLogin');

// Controller Aplikasi Simple Counting
