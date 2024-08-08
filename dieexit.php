<?php
    $a = 15;
    $b = 5;

    echo $a + $b;
    echo "<br>";
    
    echo $a - $b;
    echo "<br>";

    // die();
    // exit();
    // die("Printed");
    // exit("Printed");
    // return;
    echo test();
    echo "<br>";
    
    echo $a * $b;
    echo "<br>";
    
    echo $a / $b;
    echo "<br>";

    function test() {
        // die();
        echo "XYZ";
        echo "<br>";
        return "ABC";
    }
?>