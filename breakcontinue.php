<?php
    for ($i=0; $i<=10; $i++) { 
        echo $i;
        echo "<br>";
        if ($i == 5) {
            break;
        }
    }

    echo "<br>";
    
    for ($x=0; $x<=20; $x++) { 
        echo $x;
        echo "<br>";
        if ($x == 10) {
            continue;
        }
    }

    echo "<br>";
    
    for ($y=0; $y<=10; $y++) { 
        if ($y == 3 || $y == 9) {
            continue;
        }
        echo $y;
        echo "<br>";
    }
?>