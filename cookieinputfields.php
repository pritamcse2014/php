<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie With Input Fields</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user_name" id="user_name" placeholder="Enter Your User Name">
        <br> <br>
        <button type="submit" name="button" value="set">Set Cookies</button>
        <br> <br>
        <button type="submit" name="button" value="display">Display Cookies</button>
        <br> <br>
        <button type="submit" name="button" value="delete">Delete Cookies</button>
    </form>
    <br>
</body>
</html>

<?php
    if (isset($_POST['button'])) {
        if ($_POST['button'] == 'set') {
            $val = $_POST['user_name'];
            // echo $val;
            setcookie('user_name', $val);
            echo "Cookie Set Successfully.";
        }
        
        if ($_POST['button'] == 'display') {
            if (isset($_COOKIE['user_name'])) {
                echo $_COOKIE['user_name'];
            }
        }
        
        if ($_POST['button'] == 'delete') {
            if (isset($_COOKIE['user_name'])) {
                setcookie('user_name', null, -1);
            }
        }
    }
?>