<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>21_session_home</title>
</head>
<body>
    This is the home page<br>
    <form action="21_session_home.php" method="post">
        <input type="submit" name="logout" value="logout"><br><br>
    </form>
</body>
</html>

<?php   
    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";

    if(isset($_POST["logout"])) {
        session_destroy();
        header("Location: 21_session.php");
    }
?>