<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title> Statement kondisi pada Blade Engine Template </title>
    </head>
    <body>
        @if ($janiWaktu == 'am')
            Good morning, user !
        @else
            Good afternoon, user !
        @endif
    </body>
</html>