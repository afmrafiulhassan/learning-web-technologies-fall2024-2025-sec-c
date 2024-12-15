<?php
    session_start();
    if ($_SESSION['status'] != true) {
        header('Location: user.php');
    }

?>

<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
        <table align="center" border="1" cellspacing="0">
            <tr align="center">
                <td colspan="2">
                    Profile
                </td>
            </tr>
            <tr>
                <td>Id</td>
                <td><?php echo $id; ?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>User type</td>
                <td><?php echo $user_type; ?></td>
            </tr>
        </table>
    </body>
    </html>