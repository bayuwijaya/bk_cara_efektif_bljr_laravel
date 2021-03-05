<?
@extends('dashboard.dashboard')
@section('content')
    <div class='container'>
	
<h3>Input Buku</h3>
<hr>
	<?php $messages = $errors->all('<p style="color:red">:message</p>') ?>
	<?php foreach ($messages as $msg): ?>
	<?= $msg ?>
	<?php endforeach; ?>

	

 {{Form::open(array('action' => 'CrudController@store', 'files'=>true)) }}
 
 {{Form::label('judul', 'Judul') }}

 {{Form::text('judul', '', array('class' => 'form-control'))}} 

 {{Form::label('penulis', 'Penulis') }}

 {{Form::text('penulis', '', array('class' => 'form-control'))}}

 {{Form::label('penerbit', 'Penerbit') }}

 {{Form::text('penerbit', '', array('class' => 'form-control'))}}
 
 {{Form::label('isbn', 'ISBN') }}

 {{Form::text('isbn', '', array('class' => 'form-control'))}}

 {{Form::label('tgl_terbit', 'Tgl. Terbit') }}

 {{Form::text('tgl_terbit', '', array('class' => 'form-control'))}}

 {{Form::label('keterangan', 'Keterangan') }}

 {{Form::textarea('keterangan', '', array('class' => 'form-control'))}}

 {{Form::label('harga', 'Harga') }}

 {{Form::text('harga', '', array('class' => 'form-control'))}}
 
 {{Form::label('Image', 'Gambar') }}
 
 {{Form::file('image')}}
<br>
 {{Form::submit('Simpan', array('class' => 'btn btn-primary')) }}
<br><br>

 {{ Form::close() }}

 </div>
	
@stop
?>
