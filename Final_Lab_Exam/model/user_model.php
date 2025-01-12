<?php
function get_connection(){

    $conn = mysqli_connect("127.0.0.1", "root", "", "info" );
    return $conn;
}

function add_user($empname, $cmpname, $contact, $uname, $password)
{
    $conn = get_connection();
   // $sql = "insert into user values ('$empname, $cmpname, $contact, $uname, $password')";
    $sql = "INSERT INTO user (empname, cmpname, contact, uname, password) VALUES ('$empname', '$cmpname', '$contact', '$uname', '$password')";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function login($uname, $password){
    $conn = get_connection();
    $sql = "select * from user where uname = '{$uname}' and password = '{$password}'";
    $result = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
        return true;
    }
    else{
        return false;
    }
}

function show_users(){
    $conn = get_connection();
    $sql = "select * from user";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function user_info($uname){
    $conn = get_connection();
    $sql = "select * from user where uname = '$uname'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    return $row; 
}

function change_user($old_uname, $new_empname, $new_cmpname, $new_contact, $new_uname, $new_password){
    $conn = get_connection();
    $sql = "update user set empname = '$new_empname', cmpname = '$new_cmpname', contact  = '$new_contact', uname = '$new_uname', '$'password = '$new_password'  where uname = '$old_uname'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function delete_user($uname){
    $conn = get_connection();
    $sql = "delete from user where uname = '$uname'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

?>