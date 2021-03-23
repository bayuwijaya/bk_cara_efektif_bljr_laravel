<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title> Output Data Native PHP & Blade Engine </title>
    </head>
    <body>
        <!-- menampilkan menggunakan PHP biasa -->
        Hello, <?php echo($name); ?>
        <br />
        <!-- menampilkan menggunakan blade engine template -->
        Hello, {{ $name }}
        <br />
        <!-- kedua metode tersebut akan menghasilkan hasil yang sama -->
        Hello, John
    </body>
</html>