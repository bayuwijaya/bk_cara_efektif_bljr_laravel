<?php

class CrudController extends \BaseController 
{
	public function tampildata()
	{	
		$books = Book::all();
		$books = Book::orderBy('id','desc')->paginate(5);
		return View::make('dashboard.tampildata')->with('booksdata', $books);
	}
	
	public function tambahdata()
	{
		return View::make('dashboard.tambahdata');
	}
	public function store()
	{
		$file = array('image' => Input::file('image'));
		$rules = array('image'=>'required|image|mimes:jpeg,jpg,bmp,png,gif|max:3000');
		$validator = Validator::make($file, $rules);	
		if ($validator->fails()) 
		{
			return Redirect::to('tambah')->withInput()->withErrors($validator);
		}
		else 
		{
			
			$image = Input::file('image');

			if (Input::file('image')->isValid()) 
			{
			  	$destinationPath = 'uploads';

			  	$filename = $image->getClientOriginalName();
			  	$fullname = rand(11111,99999).'.'.$filename.'.'.$image->getClientOriginalExtension();
			  	$green = $image->move($destinationPath, $fullname);

				Image::make($green)->resize('110','170')->save('uploads/thumbs/'.$fullname);

				$book = new Book;

				$book->title       	= Input::get('judul');;
				$book->author      	= Input::get('penulis');;
				$book->publisher 	  = Input::get('penerbit');;
				$book->isbn       	= Input::get('isbn');;
				$book->tgl_terbit   = Input::get('tgl_terbit');;
				$book->description 	= Input::get('keterangan');;
				$book->price       	= Input::get('harga');;
				$book->images      	= $fullname;

				$book->save();	

			  	return Redirect::to('profile')->withInput();

			}
			else
			{
							  // sending back with error message.
			  	Session::flash('error', 'uploaded file is not valid');
			  	return Redirect::to('tambah');
			}
		}	
	}
	public function edit($id)
	{
		$book = Book::find($id);
		return View::make('dashboard.editbook')->with('book', $book);
	}
	public function viewdata($id)
	{

		$book = Book::find($id);
		return View::make('dashboard.tampilview')->with('book', $book);
	}
	public function update()
	{

			$id   = Input::get('id');
			$book = Book::find($id);
			$image = Input::file('image');
			
			if ($image) 
			{
				File::delete('uploads'.'/'.$book->images);
				File::delete('uploads/thumbs'.'/'.$book->images);
				
				$destinationPath = 'uploads';

				$filename = $image->getClientOriginalName();
				$fullname = rand(11111,99999).'.'.$filename.'.'.$image->getClientOriginalExtension();
				$green = $image->move($destinationPath, $fullname);

				Image::make($green)->resize('100','110')->save('uploads/thumbs/'.$fullname);
				$book->title       = Input::get('judul');
				$book->author      = Input::get('penulis');
				$book->publisher 	 = Input::get('penerbit');;
				$book->isbn        = Input::get('isbn');;
				$book->tgl_terbit  = Input::get('tgl_terbit');;
				$book->description = Input::get('keterangan');
				$book->price       = Input::get('harga');
				$book->images      = $fullname;
				$book->save();

				return Redirect::to('profile')->withInput();			
			}
			else
			{
				$book->title       = Input::get('judul');
				$book->author      = Input::get('penulis');
				$book->publisher 	 = Input::get('penerbit');;
				$book->isbn        = Input::get('isbn');;
				$book->tgl_terbit  = Input::get('tgl_terbit');;
				$book->description = Input::get('keterangan');
				$book->price       = Input::get('harga');
				$book->save();
				return Redirect::to('profile')->withInput();		
			}
		}
	
	public function delete($id)
	{
      	$book = Book::find($id);

      	if($book)
      	{
      	    File::delete('uploads'.'/'.$book->images);
			      File::delete('uploads/thumbs'.'/'.$book->images);

      	   	$book->delete();
      		  return Redirect::to('profile')->withInput();
      	}
    }
}
