<?php

$array = count($_POST);

if($array < 2){

    echo"At least two of them must be selected.";
}
else{
    echo "Selected Degree: " . $array . "";
}

?>