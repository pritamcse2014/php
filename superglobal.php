<?php
    $a = "10";
    $data = "20";
    echo "<pre>";
    print_r($GLOBALS);
    print_r($_SERVER);
    print_r($_SERVER['REQUEST_URI']);
    echo "<br>";
    print_r($_REQUEST);
    print_r($_GET);
    print_r($_POST);
    echo "<pre>";
?>