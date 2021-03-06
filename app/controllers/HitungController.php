<?php
class HitungController extends BaseController 
{
	public function menuHitung()
	{
		return View::make('menu');
	}
	public function viewTambah()
	{
		return View::make('tambah');
	}
	public function viewKali()
	{
		return View::make('kali');
	}
	public function processTambah()
	{
		$data1 = Input::get('data1');
		$data2 = Input::get('data2');
		
		$hasil = $data1+$data2;
		return 'hasil tambah adalah : '.$hasil;
	}
	public function processKali()
	{
		$data1 = Input::get('data1');
		$data2 = Input::get('data2');
		
		$hasil = $data1*$data2;
		return 'hasil tambah adalah : '.$hasil;
	}

	
	public function uploadgambar()
	{
		return View::make('gambar');
	}
	public function prosesgambar()
	{
		$image = Input::file('image');
		//$destinationPath = 'uploads';
		//var_dump($image->getRealPath());
		//var_dump($image->getClientOriginalName());

		$filename = $image->getClientOriginalName();	

		if(Image::make($image->getRealPath())->resize('200','200')->save('uploads/thumbs/'.$filename))
		{
			return 'uploads';
		}
		//Input::file('image')->move($destinationPath, $fileName);
		
		/*
		
		$filename = $image->getClientOriginalName();
		if(Image::make($image)->resize('200','200')->save('public/'.$filename))
			//Image::make($extension)->resize('200', '200')->save('public/thumbs'.$filename);
		{
			return 'Image Uploaded';
		}
		*/
	}
}
