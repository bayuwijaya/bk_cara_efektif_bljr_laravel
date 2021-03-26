<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title> Looping Foreach As Value </title>
    </head>
    <body>
        @foreach ($users as $user) 
            <p> {{ $user }} </p>
        @endforeach
    </body>
</html>