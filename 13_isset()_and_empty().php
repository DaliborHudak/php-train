<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13_isset() and empty()</title>
</head>
<body>
    <form action="13_isset()_and_empty().php" method="post">
        <label>username: </label><br>
        <input type="text" name="username"><br>
        <label>password: </label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in"><br><br>
    </form>
</body>
</html>

<?php
    // isset() = Returns TRUE if a variable is declared and not null
    // empty() = Returns TRUE if a variable is not declared, false, null, "" (empty string) 

    if(isset($_POST["login"])) {
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)) {
            echo "Username is missing<br><br>";
        }
        elseif (empty($password)){
            echo "Password is missing<br><br>";
        } 
        else {
            echo "Hello {$username}<br>";
        }
    }

    foreach($_POST as $key => $value) {
        echo "{$key} = {$value} <br>";
    }


    // example

    /* $username = true;

    if(isset($username)) {
        echo "This variable is set <br>";
    }
    else {
        echo "This variable is NOT set <br>";
    }

    $username2 = null;

    if(empty($username2)) {
        echo "This variable is empty <br>";
    }
    else {
        echo "This variable is NOT empty <br>";
    } */

?>