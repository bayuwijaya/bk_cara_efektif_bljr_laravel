<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title> Looping While </title>
    </head>
    <body>
        <?php $x = 100; ?>
        @while ($x >= 0)
            <p> The number is : <strong> {{ $x }} </strong> </p>
            <?php $x -= 10; ?>
        @endwhile
    </body>
</html>