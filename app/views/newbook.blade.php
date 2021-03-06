<?
@section('content')

<div class='container'>

<h3>Insert new book</h3>

 {{Form::open(array('action' => 'CrudController@store')) }} 

 {{Form::label('title', 'Title') }}

 {{Form::text('title', '', array('class' => 'form-control'))}}

 {{Form::label('author', 'Author') }}

 {{Form::text('author', '', array('class' => 'form-control'))}}

 {{Form::label('description', 'Description') }}

 {{Form::textarea('description', '', array('class' => 'form-control'))}}

 {{Form::label('price', 'Price') }}

 {{Form::text('price', '', array('class' => 'form-control'))}}
 <br>

 {{Form::submit('Submit', array('class' => 'btn btn-primary')) }}

 {{ Form::close() }}

 </div>

 @stop
 ?>