<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $id = $_POST['id'];
    $password =$_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $name = $_POST['name'];
    $user_type = $_POST['user_type'];

    if(empty($id)||empty($password)||empty($confirm_password)||empty($name)||empty($user_type)){
        echo "Please fill all the input field";
    }

    elseif($password!==$confirm_password){
        echo "Password and confirm password does not match";
    }

    else{

        if (!isset($_SESSION['users'])) {
            $_SESSION['users'] = [];
    }

    $userdata = [
        'id' => $id,
        'password' => $password,
        'confirm_password' => $confirm_password,
        'name' => $name,
        'user_type' => $user_type,
    ];

    $_SESSION = $userdata;

    header('Location: login.html');
        }
} else {
    echo "Invalid Request!";
}

?>