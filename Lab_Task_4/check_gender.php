<?php

if (isset($_POST["gender_input"])) {  
    $gender = $_POST["gender_input"];
    echo "Gender: " . $gender . "";
} 

else {
    echo "At least one of them must be selected.";
}

?>