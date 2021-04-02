<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title> Jenis-jenis Forms & HTML di Blade Engine </title>
    </head>
    <body>
        <!-- Opening Form -->
        {{ Form::open() }}
            <input type="submit" value="Opening Form" /> 
        {{ Form::close() }}
        <br />
        <!-- Mengarahkan Form ke URL -->
        {{ Form::open(array('url'=>'http://www.laravel.com/form')) }}
            <input type="submit" value="Mengarahkan ke URL" />
        {{ Form::close() }}
        <br />
        <!-- Mengarahkan Form ke Routing -->
        {{ Form::open(array('route'=>'login.showLogin')) }}
            <input type="submit" value="Mengarahkan ke Routing" />
        {{ Form::close() }}
        <br />
        <!-- Mengarahkan Form ke Controller -->
        {{ Form::open(array('action'=>'HomeController@showWelcome')) }}
            <input type="submit" value="Mengarahkan ke Controller" />
        {{ Form::close() }}
        <br />
        <!-- Menggunakan Method yang Berbeda -->
        {{ Form::open(array('method'=>'GET', 'url'=>'http://www.laravel.com/form')) }}
            <input type="submit" value="Method GET" />
        {{ Form::close() }}
        <br />
        {{ Form::open(array('method'=>'PUT', 'url'=>'http://www.laravel.com/form')) }}
            <input type="submit" value="Method PUT" />
        {{ Form::close() }}
        <br />
        {{ Form::open(array('method'=>'PATCH', 'url'=>'http://www.laravel.com/form')) }}
            <input type="submit" value="Method PATCH" />
        {{ Form::close() }}
        <br />
        {{ Form::open(array('method'=>'DELETE', 'url'=>'http://www.laravel.com/form')) }}
            <input type="submit" value="Method DELETE" />
        {{ Form::close() }}
    </body>
</html>