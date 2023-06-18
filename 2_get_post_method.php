<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET/$_POST method</title>
</head>
<body>
    <!-- THIS IS THE SECOND FILE PHP TRAINING -->
    
    <form action="2_get_post_method.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>

</body>
</html>


<?php 
    echo "{$_POST["username"]} <br>";
    echo "{$_POST["password"]} <br>";
?>

<!-- $_GET = Data is appended to the url
// NOT SECURE
// CHAR LIMIT
// USERNAME AND PASSWORD IS VISIBLE IN THE LINK ADRESS
// GET REQUESTS CAN BE CACHED


$_POST = Data is packaged inside the body of the Head
// MORE SECURE
// NO DATA LIMIT
// USERNAME AND PASSWORD IS NOT VISIBLE IN THE LINK ADRESS
// POST REQUESTS CAN'T BE CACHED -->
