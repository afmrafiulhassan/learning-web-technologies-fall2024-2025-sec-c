<?php
require_once("../model/user_model.php");
$name = $_REQUEST['uname'];

$result = delete_user($uname);

if($result){
    echo "Delete successfull.";
}
else{
    echo "Error!";
}

?>