<!doctype html>
<html>
<head>
<title>Login</title>
</head>
<body>
<?
@extends('layout')

@section('content')
<div class="container">
<h2>Login</h2>
<hr />
 <?= '<span style="color:red">' .Session::get('login_error') . '</span>' ?>
 
{{Form::open(array('action' => 'RegistrationController@authenticate')) }}
{{Form::label('email', 'Email') }}
{{Form::text('email', '', array('Input::old(email)','class' => 'form-control'))}}

{{Form::label('password', 'Password') }}
{{Form::password('password', array('class' => 'form-control'))}}
<br>
{{Form::submit('Login!', array('class' => 'btn btn-primary')) }}
{{Form::close() }}
<br>
<a href='register'>Register</a>
</div>
@stop
?>
</body>
</html>