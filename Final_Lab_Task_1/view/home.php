<?php
session_start();
if($_SESSION['status'] == true){
$idd = $_REQUEST['id'];
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
    $sql = "select * from first_check where id = $idd";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
?>
<html>
<head>
    <title>Home</title>
    </head>
    <body align="center">
        <h1>Welcome <?php echo $_SESSION['name']; ?>!</h1>
        <p><a href="profile.php">Profile</a></p>
        <p><a href="change_password.php">Change Password</a></p>
        <p><a href='userlist.php'>View All Users</a></p>
        <p><a href='../controller/logout.php'>Logout</a></p>
    </body>
</html>


<?php

}
else{
    header("location:login.html");
}

?>