<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17_string_functions</title>
</head>
<body>
    
</body>
</html>

<?php
    $username = "nightmare the coder";
    $username2 = array("nightmare", "the", "coder");
    $phone = "123-456-7890";

    // $username = strtolower($username);
    // $username = strtoupper($username);
    // $username = trim($username);
    // $username = str_pad($username, 20, "/");
    // $username = str_replace("-", "", $phone);
    // $username = strrev($username);
    // $username = str_shuffle($username);
    // $equals = strcmp($username, "nighmare");
    // $count = strlen($phone);
    // $index = strpos($phone, "-");
    // $firstname = substr($username, 0, 5);
    // $lastname = substr($username, 5);
    // $fullname = explode(" ", $username);
    $username2 = implode("-", $username2);

    echo $username2;

    // echo $phone;
    // echo $equals;
    // echo $count;
    // echo $index;
    // echo $firstname;
    // echo $lastname;

    foreach($fullname as $name){
        echo $name . "<br>";
    };
?>