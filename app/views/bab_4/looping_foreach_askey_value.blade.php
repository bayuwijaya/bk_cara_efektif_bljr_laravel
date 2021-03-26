<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title> Looping Foreach As Key => Value </title>
    </head>
    <body>
        @foreach ($student as $key_name => $value_age)
            <p> Nama : {{ $key_name }}, Umur : {{ $value_age }}  </p>
        @endforeach
    </body>
</html>