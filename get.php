<?php
    // print_r($_GET);
    if ($_GET) {
        $userName =  $_GET['user_name'];
        $userPassword =  $_GET['user_password'];
        echo "UserName : ", $userName;
        echo "<br>";
        echo "UserPassword : ", $userPassword;
    }
?>