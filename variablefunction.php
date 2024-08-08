<?php
    function test() {
        echo "Test Function Called";
    }
    $test = "test";
    $test();

    echo "<br>";

    function apple() {
        echo "Apple Function Called";
    }
    $apple = "apple";

    function main($test) {
        echo "Main Function Called";
        echo "<br>";
        test();
    }
    main($test);
    echo "<br>";
    apple($apple);
?>