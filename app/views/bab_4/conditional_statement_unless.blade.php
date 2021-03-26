<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title> Conditional statement unless </title>
    </head>
    <body>
        @unless (count($user) == 0)
            visiting users : <strong> {{ count($user) }} </strong> orang
        @endunless
    </body>
</html>