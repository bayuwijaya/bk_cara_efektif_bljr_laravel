<?php

class ValidateController extends \BaseController 
{
	
	public function utama() 
	{ 
		return View::make('utama');
	}
	public function process() 
	{ 
		$rules = array(
		'email' => 'required|email|different:username',
		'username' => 'required|min:6',
		'password' => 'required|same:password_confirm'
		);
		$validation = Validator::make(Input::all(), $rules);
		if ($validation->fails())
		{
			return Redirect::to('validate')->withErrors($validation)->withInput();
		}
		return Redirect::to('userresults')->withInput();
	}


	public function showData()
	{
		$shows = Shows::all();
		return View::make('menampilkan')->with('showdata', $shows);
	}

	public function showTopData()
	{
		$show_object = new Shows();
		$top_shows = $show_object->getTopShows();
		return View::make('tampilkan')->with('green', $top_shows);
	}


	public function upload() 
	{
		  $file = array('image' => Input::file('image'));
		  $rules = array('image'=>'required|image|mimes:jpeg,jpg,bmp,png,gif|max:3000');
		  $validator = Validator::make($file, $rules);	
		  if ($validator->fails()) 
		  {
			// send back to the page with the input data and errors
			return Redirect::to('upload')->withInput()->withErrors($validator);
		  }
		  else 
		  {
			if (Input::file('image')->isValid()) 
			{
			  $destinationPath = 'uploads';
			  $extension = Input::file('image')->getClientOriginalExtension();
			  $fileName = rand(11111,99999).'.'.$extension;
			  Input::file('image')->move($destinationPath, $fileName); 
			  
			  Session::flash('success', 'Upload successfully'); 
			  return Redirect::to('upload');
			}
			else 
			{
			  // sending back with error message.
			  Session::flash('error', 'uploaded file is not valid');
			  return Redirect::to('upload');
			}
		}
	}


	public function tampil()
	{
		$books = Book::all();
		return View::make('listbook')->with('booksdata', $books);	
	}
	
	public function inputFile() 
	{ 
		return View::make('fileform');
	}
}