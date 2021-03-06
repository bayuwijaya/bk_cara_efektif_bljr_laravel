<?
@extends('dashboard.dashboard')
@section('content')

<div class='container'>

<h3>Edit Buku</h3>
<hr>

 {{Form::open(array('action' => 'CrudController@update', 'files'=>true)) }}

 {{Form::hidden('id', $book->id)}}

 {{Form::label('isbn', 'ISBN') }}

 {{Form::text('isbn', $book->isbn , array('class' => 'form-control'))}}

 {{Form::label('judul', 'Judul') }}

 {{Form::text('judul', $book->title , array('class' => 'form-control'))}}

 {{Form::label('penulis', 'Penulis') }}

 {{Form::text('penulis', $book->author , array('class' => 'form-control'))}}

 
 {{Form::label('penerbit', 'Penerbit') }}

 {{Form::text('penerbit', $book->publisher , array('class' => 'form-control'))}}
 
 
 {{Form::label('tgl_terbit', 'Tgl. Terbit') }}

 {{Form::text('tgl_terbit', $book->tgl_terbit , array('class' => 'form-control'))}}


 {{Form::label('keterangan', 'Keterangan') }}

 {{Form::textarea('keterangan', $book->description , array('class' => 'form-control'))}}

 {{Form::label('harga', 'Harga') }}

 {{Form::text('harga', $book->price , array('class' => 'form-control'))}}
<br>
 {{HTML::image('uploads/thumbs'.'/'.$book->images);}}	
<br><br>
 {{Form::label('Image', 'Ganti Gambar') }}
 <br>
 {{Form::file('image')}}
<br>
 {{Form::submit('Update', array('class' => 'btn btn-primary')) }}
<br><br>
 {{ Form::close() }}

 </div>
	
@stop
?>
