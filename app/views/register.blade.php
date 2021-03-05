<!doctype html>
<html>
<head>
<title>Registrasi</title>
</head>
<body>
<?
@extends('layout') 
@section('content') 
  <div class="container"> 
  <h2>Register</h2> 

  @if(Session::has('pesan'))
  <div class="alert alert-success">{{ Session::get('pesan') }}</div>
  @endif

  {{Form::open(array('action' => 'UserController@store')) }} 
  {{Form::label('firstname', 'First Name') }} 
  {{Form::text('firstname', '', array('class' => 'form-control'))}} 
  {{Form::label('lastname', 'Last Name') }} 
  {{Form::text('lastname', '', array('class' => 'form-control'))}} 
  {{Form::label('email', 'Email') }} 
  {{Form::text('email', '', array('class' => 'form-control'))}} 
  {{Form::label('password', 'Password') }} 
  {{Form::password('password', array('class' => 'form-control'))}} 
  <br>    
  {{Form::submit('Registerin Dong!', array('class' => 'btn btn-primary')) }} 
 {{ Form::close() }} </div> @stop
 
</body>
</html>