<?
@extends('dashboard.dashboard')
@section('content')

<h3>Daftar Buku</h3>
<hr>
<a href='./tambah'><b>Tambah Data</b></a>

<section class="container">
<br>
<table class="table table-striped table-bordered">
    <tr>
       <th>Gambar</th>
       <th>ISBN</th> 
       <th>Judul Buku</th>
       <th>Penulis</th>
       <th>Harga</th>
	     <th colspan="3">Aksi</th>
    </tr>
    @foreach($booksdata as $book)
      <tr>
         <td>{{HTML::image('uploads/thumbs'.'/'.$book->images);}}</td>
         <td>{{$book->isbn}}</td>
         <td>{{ $book->title }}</td>
         <td>{{ $book->author }}</td>
         <td>{{ $book->price }}</td>
		     <td>{{ link_to_action('CrudController@viewdata', 'Detail', array($book->id), array('class' => 'btn btn-primary'))}}</td>
         <td>{{ link_to_action('CrudController@edit', 'Edit', array($book->id), array('class' => 'btn btn-warning'))}}</td>
		     <td>{{ link_to_action('CrudController@delete', 'Hapus', array($book->id), array('class' => 'btn btn-danger'))}}</td>
      </tr>
    
    @endforeach
    
 </table>
 <center>{{ $booksdata->links() }}</center>
 </section>

@stop
?>
