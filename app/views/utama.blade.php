<?
@extends('layout') 
@section('content')

  <div class="container"> <h2>User Info</h2> 
	<?php $messages = $errors->all('<p style="color:red">:message</p>') ?>
	<?php
	foreach ($messages as $msg)
	{
		echo $msg;
	} 
?>	
  {{Form::open(array('action' => 'ValidateController@process')) }} 
  {{Form::label('email', 'Email') }} 
  {{Form::text('email', '', array('class' => 'form-control'))}}
  
  {{Form::label('username', 'Username') }}
  {{Form::text('username', Input::old('username'), array('class' => 'form-control'))}} 
  
  {{Form::label('password', 'Password') }} 
  {{Form::password('password', array('class' => 'form-control'))}} 
  
  {{Form::label('password_confirm', 'Retype Password') }} 
  {{Form::password('password_confirm', array('class' => 'form-control'))}} 
  <br>    
  {{Form::submit('Send!!', array('class' => 'btn btn-primary')) }} 
 {{ Form::close() }} </div> @stop