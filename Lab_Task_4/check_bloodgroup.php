<?php

if(isset($_POST["blood_group"])){
    $bloodgroup = $_POST["blood_group"];
    echo "Selected Blood Group: " . $bloodgroup ."";
}
else{
    echo "Blood Group must be selected.";
}

?>