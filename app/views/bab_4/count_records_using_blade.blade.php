<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title> Counting records using blade </title>
    </head>
    <body>
        @if (count($departemen) === 1)
            PNB hanya memiliki 1 Jurusan / Departemen
        @elseif (count($departemen) > 1)
            PNB memiliki banyak Jurusan / Departemen
        @else 
            PNB tidak memiliki jurusan / Departemen
        @endif
    </body>
</html>