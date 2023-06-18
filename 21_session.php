<?php
    // session = SGB (superglobal variable) used to store information on a user
    //           to be used across multiple pages.
    //           A user is assigned a session-id
    
    //           example: good for login credentials

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>21_session</title>
</head>
<body>
    <form action="21_session.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        password:<br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
    if(isset($_POST["login"])) {

        if(!empty($_POST["username"]) &&
           !empty($_POST["password"])) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            echo $_SESSION["username"] . "<br>";
            echo $_SESSION["password"] . "<br>";

            // redirect to homepage
            header("Location: 21_session_home.php");
           }
        else {
            echo "Missing username/password <br>";
        }
    }
?>