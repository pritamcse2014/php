<?php
    $a=10;
    $b=20;
    $c=30;
    
    if ($a == 10 && $b == 20) {
        echo("Right AND");
    }

    echo "<br>";
    
    if ($a == 10 || $b == 10) {
        echo("Right OR");
    }

    echo "<br>";
    
    if ($a == 10 xor $b == 20) {
        echo("Right XOR");
    }

    echo "<br>";

    if ($a != 10) {
        echo("Right is not");
    }

    echo "<br>";

    if ($a == 10 && $b == 20 && $c == 30) {
        echo("True AND");
    }

    echo "<br>";
    
    if ($a == 10 || $b == 200 || $c == 30) {
        echo("True OR");
    }
?>