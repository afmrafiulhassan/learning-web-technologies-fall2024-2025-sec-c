<?php

require_once("../model/user_model.php");

$empname = $_REQUEST['empname'];
$cmpname = $_REQUEST['cmpname'];
$contact = $_REQUEST['contact'];
$uname = $_REQUEST['uname'];
$password= $_REQUEST['password'];
$confirm_password= $_REQUEST['confirm_password'];

if(empty(trim($empname)) || empty(trim($cmpname)) || empty(trim($contact)) || empty(trim($uname) || empty(trim($password)) || empty(trim($confirm_password)))){
    echo "please fill all the input fields<br>";
}
else if($password !== $confirm_password){
    echo "Password and confirm password does not match <br>";
}
else{
    $result = add_user($empname, $cmpname, $contact, $uname, $password);
    if($result){
        header("location:../view/signin.html");
    }
    else{
        echo "There is something error inserting the user";
    }
}

?>