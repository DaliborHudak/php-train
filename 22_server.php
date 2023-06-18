<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>22_server</title>
</head>
<body>
    <!-- // $_SERVER["PHP_SELF"] inside form action is like variable
    // you can change the name of the file.php but it will still work -->

    <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        username:<br>
        <input type="text" name="username">
        <input type="submit">
    </form>
</body>
</html>

<?php
    // $_SERVER = SGB (superglobal variable) that contains headers, paths, and script locations.
    // The entries in this array are created by the web server.
    // Shows nearly everything you need to know about the current web page env.

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "HELLO";
    }
?>