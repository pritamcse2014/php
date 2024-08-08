<?php
    // print_r($_REQUEST);
    // echo "<br>";
    // print_r($_REQUEST['user_name']);
    // echo "<br>";
    // print_r($_REQUEST['user_email']);
    // echo "<br>";
    // print_r($_REQUEST['user_password']);
    // echo "<br>";
    // print_r($_REQUEST['user_address']);
    // echo "<br>";

    $_REQUEST['dummy'] = 'test';
    if ($_REQUEST) {
        foreach ($_REQUEST as $key => $data) {
            echo $key . ' : ' . $data;
            echo "<br>";
        }
    }
?>