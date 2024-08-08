<?php
    // print_r($_POST);
    if ($_POST) {
        $userName =  $_POST['user_name'];
        $userEmail =  $_POST['user_email'];
        $userPassword =  $_POST['user_password'];
        echo "UserName : ", $userName;
        echo "<br>";
        echo "UserEmail : ", $userEmail;
        echo "<br>";
        echo "UserPassword : ", $userPassword;
    }
?>