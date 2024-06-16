<?php
    include_once('connect.php');

    $Squery = "SELECT * FROM users";

    $Sresult = mysqli_query($conn, $Squery);
?>