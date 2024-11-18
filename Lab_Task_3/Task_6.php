<?php

    $array= [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    $searchElement= 50;
    $isFound= false;

for ($i=0; $i<count($array); $i++) {
    if ($array[$i] == $searchElement) {
        echo "$searchElement is found in the array. <br>";
        $isFound = true;
        break;
    }
}

if (!$isFound) {
    echo "$searchElement is not found in the array. <br>";
}


?>