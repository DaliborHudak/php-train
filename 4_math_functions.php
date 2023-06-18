<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4. Math Functions PHP</title>
</head>
    <!-- form action nalinkuje tento subor aby nam fungovalo php a dolezite je 
        aj "method" bud post alebo get no skor sa pouziva post 
        (vysvetlene v 1. php subore) -->
<body>
    <form action="4_math_functions.php" method="post">
        <label>x</label>
        <input type="text" name="x"><br>
        <label>y</label>
        <input type="text" name="y"><br>
        <label>z</label>
        <input type="text" name="z"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    // abs - absolute value function
    // $total = abs($x);
    
    // round - rounded function (zaokruhlenie nadol)
    // $total = round($x);

    // floor - (zaokruhlenie nadol)
    // $total = floor($x);

    // ceil - zaokruhlenie nahor
    // $total = ceil($x);

    // square root function (100/10 = 10)
    // $total = sqrt($x);

    // pow means power (example x = 2 power y = 3 is 8 (2 na tretiu))
    // $total = pow($x, $y);

    // maximum (highest) number 
    // $total = max($x, $y, $z);

    // minimum (lowest) number
    // $total = min($x, $y, $z);

    // pi function (3.14)
    // $total = pi();

    // completely random number function
    // $total = rand();

    // simple function for example.. rolling a dice 1 between 6
    // $total = rand(1, 6);

    echo $total;
?>