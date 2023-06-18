<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20_cookies</title>
</head>
<body>
    
</body>
</html>

<?php
    // cookies = Information about a user stored in a user's web-browser
    //           targeted advertisements, browsing preferences, and
    //           other non-sensitive data

    setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
    setcookie("fav_drink", "coffee", time() + (86400 * 3), "/");
    setcookie("fav_dessert", "ice-cream", time() + (86400 * 4), "/");

    foreach($_COOKIE as $key => $value) {
        echo "{$key} = {$value} <br>";
    }

    if(isset($_COOKIE["fav_food"])) {
        echo "BUY SOME {$_COOKIE["fav_food"]} !!!";
    }
    else {
        echo "I don't know your favorite food";
    }
?>