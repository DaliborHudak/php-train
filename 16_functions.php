<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>16_functions_in_php</title>
</head>
<body>
    
</body>
</html>

<?php
    // function = write some code once, reuse when you need it
    
    // example 1

    function is_even($number) {
        $result = $number % 2;
        return $result;
    }

    echo is_even(10);


    // example 2

    // variables inside of happy_birthday functions are only available in the function {} scope
    /* function happy_birthday($first_name, $age) {
        echo "Happy Birthday dear {$first_name}! <br>";
        echo "Happy Birthday to you! <br>";
        echo "Happy Birthday dear {$first_name}! <br>";
        echo "You are {$age} years old! <br><br>";
    }

    happy_birthday("Spongebob", 30);
    happy_birthday("Patrick", 35); */

    // example 3

    function hypotenuse($a, $b) {
        $c = sqrt($a ** 2 + $b ** 2 );
        return $c;
    }

    echo hypotenuse(3, 4);


?>