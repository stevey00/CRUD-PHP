<?php
    include_once('query.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users' Information</title>
    <link rel="stylesheet" href="./table.css">
    <!-- <script src="./table.js" defer></script> -->
</head>
<body>
    <nav>
        <a href="./form.php">
            <button id="register">Register User</button>
        </a>
    </nav>
    <table id="table_data">
        <tr>
            <th id="main_header" colspan="8">Users' Information</th>
        </tr>
        <tr id="days">
            <th>user_id</th>
            <th>password</th>
            <th>file</th>
            <th>email</th>
            <th>gender</th>
            <th>region</th>
            <th>language</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
            while($rows = mysqli_fetch_assoc($Sresult)){
        ?>   
            <tr>
                <td><?php echo $rows['user_id'] ?></td>
                <td><?php echo $rows['password'] ?></td>
                <td><?php echo $rows['file'] ?></td>
                <td><?php echo $rows['email'] ?></td>
                <td><?php echo $rows['gender'] ?></td>
                <td><?php echo $rows['region'] ?></td>
                <td><?php echo $rows['language'] ?></td>
                <a href="./form_update.php?user_id=<?php echo $rows['user_id'] ?>&password=<?php echo $rows['password'] ?>&file=<?php echo $rows['file'] ?>&email=<?php echo $rows['email'] ?>&gender=<?php echo $rows['gender'] ?>&region=<?php echo $rows['region'] ?>&language=<?php echo $rows['language'] ?>">
                    <td><button class="update" id="" type="button" name="update">Update</button></td>
                </a>
                <a href="./delete.php?user_id=<?php echo $rows['user_id'] ?>&password=<?php echo $rows['password'] ?>&file=<?php echo $rows['file'] ?>&email=<?php echo $rows['email'] ?>&gender=<?php echo $rows['gender'] ?>&region=<?php echo $rows['region'] ?>&language=<?php echo $rows['language'] ?>">
                    <td><button class="delete" id="" type="button" name="delete">Delete</button></td>
                </a> 
            </tr>
        <?php
        }   
        ?>  
    </table>
</body>
</html>