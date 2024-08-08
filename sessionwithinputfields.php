<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session With Input Fields</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user_name" id="user_name" placeholder="Enter Your User Name">
        <br> <br>
        <button type="submit" name="button" value="set">Set Session</button>
        <br> <br>
        <button type="submit" name="button" value="get">Get Session</button>
        <br> <br>
        <button type="submit" name="button" value="delete">Delete Session</button>
    </form>
    <br>
</body>
</html>

<?php
    session_start();
    if (isset($_POST['button'])) {
        if ($_POST['button'] == 'set') {
            $val = $_POST['user_name'];
            $_SESSION['user_name'] = $val;
        }
        
        if ($_POST['button'] == 'get') {
            echo $_SESSION['user_name'];
        }
        
        if ($_POST['button'] == 'delete') {
            session_destroy();
        }
    }
?>