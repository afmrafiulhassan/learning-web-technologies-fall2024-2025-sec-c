<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username =$_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!isset($_SESSION['users'])) {
        $_SESSION['users'] = [];
    }

    $userdata = [
        'name' => $name,
        'username' => $username,
        'email' => $email,
        'password' => $password,
    ];

    $_SESSION['users'][$name] = $userdata;
    $_SESSION['user'] = $userdata;
    $_SESSION['status'] = true;

    header('Location: home.php');
    exit();
} else {
    echo "Invalid Request!";
}

?>