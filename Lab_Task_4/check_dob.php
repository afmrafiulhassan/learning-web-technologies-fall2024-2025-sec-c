<?php

$day = $_POST["dd_input"];
$month = $_POST["mm_input"];
$year = $_POST["yyy_input"];

$check_day = false;
for($i=1; $i<=31; $i++){
    if($day == $i){
        $check_day = true;
        break;
    }
}

$check_month =false;
for($i=1; $i<=12; $i++){
    if($month == $i){
        $check_month =true;
        break;
    }
}

$check_year = false;
for($i=1953; $i<=1998; $i++){
    if($year == $i){
        $check_year= true;
        break;
    }
}

if(empty($day) || empty($month) || empty($year) ){
    echo"Can't be empty, please enter a date.";
}

else if($check_day == false){
    echo"Must be valid day (dd:1-31).";
}

else if($check_month == false){
    echo"Must be valid month (mm:1-12).";
}

else if($check_year == false){
    echo"Must be valid year (yy:1953-1998).";
}




?>
