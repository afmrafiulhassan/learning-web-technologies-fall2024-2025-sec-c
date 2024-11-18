<?php

    $num1 = 10;
    $num2 = 30;
    $num3 = 20;

    echo "The first number is: " . $num1 . "<br>";  
    echo "The second number is: " . $num2 . "<br>";    
    echo "The third number is: " . $num3 . "<br>" . "<br>";   


    if ($num1 >= $num2 && $num1 >= $num3) {
        echo "The largest number is: $num1";

    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        echo "The largest number is: $num2";

    } else {
        echo "The largest number is: $num3";
    }


?>