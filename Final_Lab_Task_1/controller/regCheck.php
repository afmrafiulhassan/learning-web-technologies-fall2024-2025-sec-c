<?php
    session_start();
    require_once('../model/userModel.php');
    if(isset($_REQUEST['submit'])){
        
        
        $id = trim($_POST['id']);
        $username = trim($_POST['username']);
        $password = trim($_REQUEST['password']);
        $email = trim($_REQUEST['email']);

        
        if($id == null || $username == null || empty($password || empty($email))){
            echo "Id/username/password/email  field cant be empty!";

        }
        else{
            if(!isset($_SESSION['users'])){
                $_SESSION['users'] = [];
            }
            $status = addUser($id, $username, $password, $email);
            if($status){
                header('location: ../view/login.html');
            }else{
                header('location: ../view/reg.html');
            }
        }
    }
    else{
        header('location: ../view/reg.html');
    }

?>
