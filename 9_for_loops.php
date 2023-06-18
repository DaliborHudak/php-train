<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9_for_loops</title>
</head>
<body>
    <form action="9_for_loops.php" method="post">
        <label>Enter a number to count down from:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>

<?php

    // for loop = repeat some code a certain amount of times

    // jednoduchy priklad na for loop
    
    /* for($i = 10; $i >= 0; $i-=2) {
        echo $i . "<br>";
    } */

    // small practice with useful program

    $counter = $_POST["counter"];

    for($i = $counter; $i > 0; $i--) {
        echo $i . "<br>";
    }

?>