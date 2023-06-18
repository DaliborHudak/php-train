<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12_associative_arrays</title>
</head>
<body>
    <form action="12_associative_arrays.php" method="post">
        <label>Enter your country</label>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>
</html>

<?php

    // associative array = an array made of key=> value pairs

    $capitals = array(  "USA"=>"Washington D.C.", 
                        "Japan"=>"Kyoto", 
                        "South Korea"=>"Seoul", 
                        "India"=>"New Delhi");

    $capital = $capitals[$_POST["country"]];

    echo "The capital is {$capital}";

    // how to rewrite value on specific key                   
    // $capitals["USA"] = "Las Vegas";
    // $capitals["China"] = "Beijing";
    // if you don't know what are these array pop and etc doing just check previous 11. file
    // array_pop($capitals);
    // array_shift($capitals);
    
    
    // $keys = array_keys($capitals);

    /* foreach($keys as $key) {
        echo  "{$key} <br>";
    } */


    // $values = array_values($capitals);

    /* foreach($values as $value) {
        echo  "{$value} <br>";
    } */


    // $capitals = array_flip($capitals);

    /* foreach($capitals as $key => $value) {
        echo  "{$key} = {$value} <br>";
    } */


    // $capitals = array_reverse($capitals);

    // echo count($capitals);
?>