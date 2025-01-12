<?php 
require_once("../model/user_model.php");
$search=$_REQUEST['search'];
$result1 = show_users();

echo "<tr align='center'>
                <th>Employee Name</th>
                <th>Company Name</th>
                <th>Contact No</th>
                <th>Username</th>
                <th>Password</th>
                <th colspan='2'>Action</th>
            </tr>";

while ($row = mysqli_fetch_assoc($result1)) {
        if (strpos($row['uname'], $search) !== false) {
            echo "
                <tr align='center'>                          
                <td>{$row['empname']}</td>
                <td>{$row['cmpname']}</td>
                <td>{$row['contact']}</td>
                <td>{$row['uname']}</td>
                <td> {$row['password']}</td>
                <td>
                    <a href='../view/edit_user.php?name={$row['uname']}'> EDIT </a> 
                </td>
                <td>
                <button onclick=\"delete_user(event, '{$row['uname']}')\"> DELETE </button>  
                </td>
                <?php } ?>
            </tr>
            ";
        }
    }
   

?>