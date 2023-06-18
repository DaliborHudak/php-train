<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18_sanitize/validate_input</title>
</head>
<body>
    <form action="18_sanitize_or_validate_input.php" method="post">
        
        <!-- sanitize input part -->
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login"><br><br>

        <!-- validate input part -->
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login2" value="login2"><br><br>
    </form>
</body>
</html>

<?php
    if(isset($_POST["login"])) {

        // sanitize input part
        
        // sanitize means that if you have to enter age (number) 
        // and you will add character instead of numbers it will simply 
        // not display (same as username or invalid characters in email like <>() )

        // $username = $_POST["username"];
        $username = filter_input(INPUT_POST, "username",
                                FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST, "age",
                            FILTER_SANITIZE_NUMBER_INT);

        $email = filter_input(INPUT_POST, "email",
                            FILTER_SANITIZE_EMAIL);

        echo "You are {$age} years old<br>";
        echo "Hello {$username}<br>";
        echo "Your email is {$email}<br>";
    }




    // validate input part

    if(isset($_POST["login2"])) {

        // using for example filter_validate_int we can see if the input
        // is only numbers

        // validate means that if you input invalid type it just say
        // number or etc etc wasn't valid

        $age = filter_input(INPUT_POST, "age",
                            FILTER_VALIDATE_INT);

        $email = filter_input(INPUT_POST, "email",
                            FILTER_VALIDATE_EMAIL);

        if(empty($age)){
            echo "That number wasn't valid<br>";
        }
        else {
            echo "You are $age years old<br>";
        }

        if(empty($email)){
            echo "That email wasn't valid<br>";
        }
        else {
            echo "Your email is: {$email}<br>";
        }
    }

?>