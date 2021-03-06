<?
@extends('dashboard.dashboard')
@section('content')

<h3>Detail Buku</h3>

<section class="container">
<br>
 <table class="table">
	<tr>
	   <th>ISBN</th>
	   <td>{{ $book->isbn }}</td>
	</tr>
	<tr>
	   <th>Judul</th>
	   <td>{{ $book->title }}</td>
	</tr>
	<tr>
	   <th>Penulis</th>
	   <td>{{ $book->author }}</td>
	</tr>
	<tr>
	   <th>Penerbit</th>
	   <td>{{ $book->publisher }}</td>
	</tr>
	<tr>
	   <th>Tgl. Terbit</th>
	   <td>{{ $book->tgl_terbit }}</td>
	</tr>

	<tr>
	   <th>Harga</th>
	   <td>{{ $book->price }}</td>
	</tr>
	<tr>
	   <th>Gambar</th>
	   <td>{{HTML::image('uploads'.'/'.$book->images);}}</td>
	</tr>
	
	<tr>
	   <th>Keterangan</th>
	   <td>{{ $book->description }}</td>
	</tr>
 </table>
 <a href="{{ URL::previous() }}"><b>Kembali</b></a>
 <br>
 <br>
 </section>

@stop
?>
