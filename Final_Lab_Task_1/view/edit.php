<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.html'); 
    }

    if (isset($_REQUEST['id'])){
        echo $_REQUEST['id'];
    }

    $user = ['username'=>'rafiul', 'email'=>'22-47048-1@student.aiub.edu', 'password'=>'123'];
?>

<html>
<head>
    <title>Edit Page</title>
</head>
<body>
        <h2>Edit User</h2>
        <a href='home.php'>Back </a> |
        <a href='../controller/logout.php'>logout </a>
        <br>
        <form method="post" action="../controller/update.php" enctype="">
            
            Username <input type="text" name="username" value="<?=$user['username']?>" /> <br>
            Password <input type="password" name="password" value="<?=$user['password']?>" /> <br>
            Email <input type="email" name="email" value="<?=$user['email']?>" /> <br>
            <input type="submit" name="submit" value="Update" />
        </form>
</body>
</html>