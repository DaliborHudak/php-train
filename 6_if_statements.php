<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6. If statements</title>
</head>
<body>
    
</body>
</html>

<?php

    // if else statements

    $age = 101;

    if ($age >= 18) {
        echo "You may enter this site<br>";
    } 
    elseif($age <= 0) {
        echo "That wasn't a valid age<br>";
    }
    elseif($age >= 100) {
        echo "You are too old to enter this site<br>";
    }
    else {
        echo "You must be 18+ to enter<br>";
    }
    

    // boolean (true/false)

    $adult = true;

    if($adult) {
        echo "You may enter this site<br>";
    }
    else {
        echo "You must be an adult to enter<br>";
    }

    // somebody's pay program including overtime

    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0) {
        $weekly_pay = 0;
    }
    elseif($hours <= 40) {
        $weekly_pay = $hours * $rate;
    }
    else{
        // $weekly_pay = $1hour rate x 40h cause 5days of 8h job
        // $hours - 40 (depends how much hours you have) it calculate the overtime
        // $rate * 1.5 means that salary when working overtime is increased to 1.5
        
        // sk preklad: hodinova mzda x 40hodin (pracovny tyzden 5 dni * 8h)
        // $hours - 40 cize kolko hodin mas na nadcasoch.. vypocita nadcasove hodiny
        // $rate * 1.5 znamena ze ked robis nadcas mas vyssiu hodinovu mzdu

        $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5));
    }

    echo "You made \${$weekly_pay} this week";
?>