<?php

function getConnection(){
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
    return $conn;
}

function login($id, $password){
    $conn = getConnection();
    $sql = "select * from users where id ='{$id}' and password ='{$password}'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count ==1 ){
        return true;
    }else{
        return false;
    }
}


function addUser($name, $password, $email){
    $conn = getConnection();
    $sql = "insert into users VALUES('$name', '$password', '$email')";
    if(mysqli_query($conn, $sql)){
        return true;
    }else{
        return false;
    }
}

function user_info($id){
    $conn = getConnection();
    $sql = "select * from first_check where id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}


?>
