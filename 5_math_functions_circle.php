<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5. Math functions circle</title>
</head>
<body>
    <form action="5_math_functions_circle.php" method="post">
        <label>radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form><br> 
</body>
</html>

<?php
    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    // rounded to 2 numbers (zaokruhlene na 2 desatinne miesta)
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);

    // cm sqaured (cm štvorcove)
    $area = round($area, 2);

    // cm kubicke
    // 4/3*pi*pow podla vzorca
    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);

    echo "Circumference = {$circumference}cm <br>";
    echo "Area = {$area}cm2 <br>";
    echo "Volume = {$volume}cm3 <br>"
?>