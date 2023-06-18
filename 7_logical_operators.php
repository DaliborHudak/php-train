<?php
    //  logical operators = combine conditional statements
    //  if (condition1 || condition2)

    //  && = True if both conditions are true
    //  || = True if at least one condition is true
    //  ! = True if false. False if true


    $temp = 25;

    // && = and

    /* if($temp >= 0 && $temp <= 30) {
        echo "The weather is good.";
    } else {
        echo "The weather is bad.";
    } */



    // || = or

    if($temp < 0 || $temp > 30) {
        echo "The weather is bad.<br>";
    } 
    else {
        echo "The weather is good.<br>";
    }



    // ! = "not"
    // not logical operator just reverse the condition 
    // depends on if you set $cloudy = true or $cloudy = false and then if(!$cloudy) (if its not $cloudy)

    $cloudy = true;

    if(!$cloudy) {
        echo "It's sunny.<br>";
    }
    else {
        echo "It's cloudy.<br>";
    }



    // practice

    $age = 25;
    $citizen = true;

    // EXAMPLE 1.

    // ak su obe podmienky true vtedy je to true ak nie tak false
    
    /* if($age >= 18 && $citizen) {
        echo "You can vote";
    }
    else {
        echo "You cannot vote";
    } */


    // EXAMPLE 2.

    // ! means not
    // || means or

    /* if(!$age >= 18 || !$citizen) {
        echo "You cannot vote";
    }
    else {
        echo "You can vote";
    } */


    // EXAMPLE 3. (with boolean variables)

    $child = true;
    $senior = true;
    $ticket = null;

    if($child || $senior) {
        $ticket = 10;
    }
    else {
        $ticket = 15;
    }

    echo "The ticket price is \${$ticket}"
?>