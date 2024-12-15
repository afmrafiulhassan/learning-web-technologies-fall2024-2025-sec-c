<?php
    session_start();
    if ($_SESSION['status'] != true) {
        header('Location: login.html');
    }

?>

    <html>
    <head>
        <title>User Home</title>
    </head>
    <body align="center">
        <h1>Welcome <?php echo $_SESSION['name']; ?>!</h1>
        <p><a href="profile.php">Profile</a></p>
        <p><a href="change_password.php">Change Password</a></p>
        <p><a href="logout.php">Logout</a></p>
    </body>
    </html>