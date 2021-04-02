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
        {{ Form::open(array('action'=>'BookController@save')) }}
            <input type="submit" value="Mengarahkan ke Controller" />
        {{ Form::close() }}
    </body>
</html>