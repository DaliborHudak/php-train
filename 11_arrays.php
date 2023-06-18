<?php
    // array = "variable" which can hold more than one value at a time

    $foods = array("apple", "orange", "banana", "coconut");

    // you can rewrite the ID
    //$foods[0] = "pineapple";

    // you can also add an fruit into array
    //array_push($foods, "pineapple", "kiwi");

    // array_pop() will remove the LAST element in your array
    //array_pop($foods);

    // array_shift() will remove the FIRST element in your array
    //array_shift($foods);

    // array_reverse() reverse the array but its not working until you
    // didn't make new array
    //$foods = array_reverse($foods);

    // count elements in array
    //echo count($foods) . "<br>";

    foreach($foods as $food) {
        echo $food . "<br>";
    }
?>