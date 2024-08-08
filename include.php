<?php
    // include('./hello.php');
    echo "<br>";
    echo "<br>";
    
    for ($i=0; $i<=10; $i++) { 
        // include('./hello.php');
        // include_once('./hello.php');
        echo "<br>";
    }

    // require('./hello.php');
    echo "<br>";
    echo "<br>";

    for ($i=0; $i<=10; $i++) { 
        require_once('./hello.php');
        echo "<br>";
    }
?>