<?php
    include_once 'query.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update page</title>
        <script src="./form_update.js"></script>
    </head>
    <body>
        <p id="message"></p>
        <h1>Update User(user_id: <?= $_GET['user_id']; ?>)</h1>
        <form action="" method="POST">
            <table cellpadding="5" cellspacing="5">
                <tr>
                    <th>User_id
                        <td>
                            <input id="user_id" type="text" value="<?= $_GET['user_id']; ?>" name="user_id" readonly="readonly"></th>
                        </td>
                    </tr>
                <tr>
                    <th>Password
                        <td>
                            <input id="password" type="text" value="<?= $_GET['password']; ?>" name="password">                        
                        </td>
                    </th>
                </tr>
                <tr>
                    <th>File
                        <td>
                            <input id="file" type="text" value="<?= $_GET['file']; ?>" name="file">
                        </td>
                    </th>
                </tr>
                <tr>
                    <th>Email
                        <td>
                            <input id="email" type="text" value="<?= $_GET['email']; ?>" name="email">
                        </td>
                    </th>
                </tr>
                <tr>
                    <th>Gender
                        <td>
                            <input id="gender" type="text" value="<?= $_GET['gender']; ?>" name="gender">
                        </td>
                    </th>
                </tr>
                <tr>
                    <th>Region
                        <td>
                            <input id="region" type="text" value="<?= $_GET['region']; ?>" name="region">
                        </td>
                    </th>
                </tr>
                <tr>
                    <th>Language
                        <td>
                            <label for="language">English</label>
                            <input id="language" type="checkbox" value="English" name="language">
                            <label for="language">French</label>
                            <input id="language" type="checkbox" value="French" name="language">
                            <label for="language">Others</label>
                            <input id="language" type="checkbox" value="Others" name="language">
                        </td>
                    </th>
                </tr>      
                <tr>
                    <th>
                        <td>
                            <input id="update" type="submit" value="Update" name="update">
                        </td>
                    </th>
                </tr>      
            </table>
        </form>   
    </body>
</html>


    