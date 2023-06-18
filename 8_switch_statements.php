<?php

    // switch = replacement to using many elseif statements
    // more efficient, less code to write


    // spravny sposob pouzitim SWITCH statements

    // EXAMPLE 1.

    /* $grade = "A";

    switch($grade) {
        case "A":
            echo "You did great";
            // break is used for get out of the switch
            break;
        case "B":
            echo "You did okay";
            break;
        case "C":
            echo "You did good";
            break;
        case "D":
            echo "You did poorly";
            break;
        case "F":
            echo "You failed";
            break;
        // default is like else statement
        default:
            echo "{$grade} is not valid";
    } */



    // EXAMPLE 2.

    // date("l") give you day of the week which is today

    $date = date("l");

    switch($date) {
        case "Monday":
            echo "I hate Mondays";
            break;
        case "Tuesday":
            echo "It is Taco Tuesday!";
            break;
        case "Wednesday":
            echo "The work week is half over!";
            break;
        case "Thursday":
            echo "It's almost the weekend!";
            break;
        case "Friday":
            echo "The weekend is here!";
            break;
        case "Saturday":
            echo "Time to party!";
            break;
            case "Sunday":
            echo "Time to relax";
            break;
        default:
            echo "{$date} is not a day";
    }




    // zdlhavy proces, takto sa to nema robit lepsie pouzit SWITCH

    /* $grade = "A";

    if($grade == "A"){
        echo "You did great";
    }
    elseif($grade == "B"){
        echo "You did good";
    }
    elseif($grade == "C"){
        echo "You did okay";
    }
    elseif($grade == "D"){
        echo "You did poorly";
    }
    elseif($grade == "F"){
        echo "You failed";
    }
    else {
        echo "{$grade} is not a valid grade";
    } */


?>