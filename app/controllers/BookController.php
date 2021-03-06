<?php

class BookController extends \BaseController 
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function inputBook() 
	{ 
		return View::make('newbook');
	}
	public function index()
	{
	
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	 
	public function tampil()
	{
		$books = Book::all();
		return View::make('listbook')->with('booksdata', $books);	
	}
	public function store()
	{		
		$book = new Book;
		
		$book->title       = Input::get('title');;
		$book->author      = Input::get('author');;
		$book->description = Input::get('description');;
		$book->price       = Input::get('price');;

		$book->save();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
