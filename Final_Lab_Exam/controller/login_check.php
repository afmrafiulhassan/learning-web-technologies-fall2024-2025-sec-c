<?php

require_once("../model/user_model.php");

$uname = $_REQUEST['uname'];
$password= $_REQUEST['password'];

if(empty(trim($uname)) || empty(trim($password))){
    echo "please fill all the input fields<br>";
}
else{
    
    $result = login($uname, $password);
    if($result ==  true){
       header("location:../view/home.php");

    }
    else{
        echo "Invalid Name and Password";
    }
}

?>