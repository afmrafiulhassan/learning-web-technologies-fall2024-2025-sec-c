<?php

$name = $_POST["name_input"];

$con_letter = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz.- ";
$check = true;

for ( $i = 0; $i < strlen($name); $i++){
    for ($j = 0; $j < strlen($con_letter); $j++){
        if($name[$i] == $con_letter[$j]){
            $check = true;
            break;
        }
        else{
            $check = false;
        }
    }

    if($check == false){
        break;
    }
}

if (empty($name)){
    echo "Your name can't be empty, please enter your name.";
}
else if((strpos($name, " ") == false)){
    echo "Your name must contains at least two words.";
}
else if(is_numeric($name[0])){
    echo "Your name must start with a letter.";
}
else if($check == false){
    echo "Name can contain (a-z, A-Z, period , dash) only.";
}
else{
    echo "NAME: " . $name . "";
}

?>