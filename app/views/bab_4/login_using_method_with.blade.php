<!DOCTYPE html>
<html>  
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title> Halaman Login </title>
    </head>
    <body>
        Current Date : <?php echo($tanggal); ?> <br />
        Current Time : <?php echo($waktu); ?>
        <br />
        <br />
        <form action="login" method="POST">
            Username : <input type="text" name="username" /> <br />
            Password : <input type="password" name="password" /> <br />
            <input type="submit" value="Login">
        </form>
    </body>
</html>