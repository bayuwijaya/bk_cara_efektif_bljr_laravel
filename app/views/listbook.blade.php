@extends('layout')

@section('content')
<section class="container">
 <table class="table">
    <tr>
       <th>Title</th>
       <th>Author</th>
       <th>Description</th>
       <th>Price</th>
    </tr>
    @foreach($booksdata as $book)
      <tr>
         <td>{{ $book->title }}</td>
         <td>{{ $book->author }}</td>
         <td>{{ $book->description }}</td>
         <td>{{ $book->price }}</td>
      </tr>
    @endforeach
 </table>
</section>
@stop