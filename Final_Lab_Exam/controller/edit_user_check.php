<?php
require_once("../model/user_model.php");

$old_uname = $_REQUEST['old_uname'];
$new_uname = $_REQUEST['new_uname'];
$new_ename = $_REQUEST['new_empname'];
$new_cname = $_REQUEST['new_cmpname'];
$new_contact = $_REQUEST['new_contact'];
$new_password = $_REQUEST['new_password'];


$result = change_user($old_uname, $new_uname, $new_empname, $new_cmpname, $new_contact, $new_password);

if ($result === true) {
    echo "Edit Successful!";
} else {
    echo "Error";
}

?>