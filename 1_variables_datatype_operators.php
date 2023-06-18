<?php
    /* echo "I love pizza <br>";
    echo "It's really good <br>"; */

    /* THIS IS THE FIRST FILE PHP TRAINING */

    //VARIABLES AND DATA TYPES

    // string
    $name = "night";
    $food = "pizza";
    $email = "fake123@gmail.com";

    // int
    $age = 21;
    $users = 2;
    $quantity = 4;

    // float
    $gpa = 2.5;
    $price = 5.99;
    $tax_rate = 5.1;

    // boolean
    $employed = true;
    $online = false;
    $for_sale = true; 

    /* echo "Hello {$name} <br>";
    echo "You like {$food} <br>";
    echo "Your email is {$email} <br>";

    echo "You are {$age} years old <br>";
    echo "There are {$users} users online <br>";
    echo "You would like to buy {$quantity} items <br>";

    echo "Your gpa is: {$gpa} <br>";
    echo "Your pizza is: \${$price} <br>";
    echo "The sales tax rate is: {$tax_rate}% <br>";

    echo "Online status: {$online} <br>"; */

    $total = null; 

    echo "You have ordered {$quantity} x {$food}s <br>";
    $total = $quantity * $price;
    // \$ is used for display the number normally cause it will not took two $
    // its also called "escape sequence"
    echo "Your total is: \${$total} <br>";
    


    //ARITHMETIC OPERATORS
    $x = 10;
    $y = 3;
    $z = null;

    //$z = $x + $y;
    //$z = $x - $y;
    //$z = $x * $y;
    //$z = $x / $y;
    //$z = $x ** $y;
    $z = $x % $y;
    echo "{$z} <br>";



    //INCREMENT/DECREMENT OPERATORS
    $counter = 0;

    $counter++;
    //$counter--;
    //$counter -= 3;
    //$counter += 3;
    echo "{$counter} <br>";

    // OPERATOR PRECEDENCE
    
    // ()
    // **
    // * / %
    // + -

    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo $total;
?>
