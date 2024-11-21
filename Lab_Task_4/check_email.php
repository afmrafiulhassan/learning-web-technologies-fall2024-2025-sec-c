<?php

$email = $_POST["email_input"];
$check = strpos($email, ".com");

if(empty($email)){
    echo "Email can't be empty, please enter an email.";
}
elseif($check == null){
    echo "Entered an invalid email.";
}
else
    echo "Email: " . $email . "";

?>