<?php
    session_start();
    if(isset($_REQUEST['submit'])){

        $id = trim($_POST['id']);
        $password = trim($_REQUEST['password']);


        if($id == null || empty($password)){
            echo "Null id/password!";

        }else if ($id === $_SESSION['id'] && $password === $_SESSION['password']) {
            //echo "valid user!";
            $_SESSION['status'] = true;
            header('location: home.php');
        }else{
            echo "invalid user!";
        }
    }else{
        header('location: login.html');
    }

?>