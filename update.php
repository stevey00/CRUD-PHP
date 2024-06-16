<?php
    include_once 'query.php';

        
        $user_id = $_POST['user_id'];
        $password = $_POST['password'];
        $file = $_POST['file'];
        $email = $_POST['email'];
        $gender = $_POST['gender']; 
        $region = $_POST['region'];
        $language = $_POST['language'];  

        $strSql= "UPDATE users SET password = $password, file = $file, email = $email, gender = $gender, region = $region, language = $language WHERE user_id = $user_id";
        
        if(mysqli_query($conn, $strSql)){
                echo ("Your data has been updated successfully.");
                // header("Location:form.php?signup=sucess");
                header("refresh:2,url=form.php");
        }

else{
        echo ("Please fill in the blank fields.");
}
?>