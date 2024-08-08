<?php
    print_r($_POST);
    echo "<br>";
    echo "<br>";
    if (isset($_POST['user_name'])) {
        echo "User Name is : " . $_POST['user_name'];
        echo "<br>";
        echo "User Email is : " . $_POST['user_email'];
        echo "<br>";
        echo "User Password is : " . $_POST['user_password'];
        echo "<br>";
        echo "User Skills is : " . implode(", ", $_POST['skills']);
        echo "<br>";
        echo "User Gender is : " . $_POST['gender'];
        echo "<br>";
        echo "User City is : " . $_POST['city'];
        echo "<br>";
        echo "User Bio is : " . $_POST['bio'];
        echo "<br>";
    }
?>