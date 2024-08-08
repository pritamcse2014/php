<?php
    $x = 10;
    echo "Before Condition";
    echo "<br>";

    if ($x == 20) {
        goto jump;
    }

    $name = "Pritam Kumar Kundu";
    echo $name;
    echo "<br>";

    jump:
    echo "Statement is jumped in line number 15";
    echo "<br>";

    for ($i=0; $i <=10; $i++) { 
        echo $i;
        echo "<br>";
        if ($i == 5) {
            goto outsideLoop;
        }
    }
    outsideLoop:
    echo "Loop is Break";
?>