<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10_while_loops</title>
</head>
<body>
    <form action="10_while_loops.php" method="post">
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>

<?php
    // while loop = do some code INFINITELY while some condition remains true
    // while cyklus opakuje kod ktory je v nom DONEKONECNA

    $seconds = 0;
    $running = true;

    while($running) {

        if(isset($_POST["stop"])) {
            $running = false;
        } else {
            // wait 1 second
            $seconds++;
            echo $seconds . "<br>";
        }

    
    }
?>