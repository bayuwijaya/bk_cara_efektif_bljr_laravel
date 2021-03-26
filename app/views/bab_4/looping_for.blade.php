<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title> Looping For </title>
    </head>
    <body>
        @for ($x = 0; $x <= 100; $x+=10)
            <p> The current value is <strong> {{ $x }} </strong> </p> 
        @endfor
    </body>
</html>