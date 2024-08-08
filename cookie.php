<?php
    setcookie("fruit", "apple", time()+(86400));
    setcookie("color", "red", time()+(86400));

    // print_r($_COOKIE);
    if (isset($_COOKIE['fruit'])) {
        print_r($_COOKIE);
        // print_r($_COOKIE['fruit']);
        echo "<br>";
        echo $_COOKIE['fruit'];
    } else {
        print_r("No Fruit Found.");
    }
    
    echo "<br>";

    // print_r($_COOKIE);
    if (isset($_COOKIE['color'])) {
        print_r($_COOKIE);
        // print_r($_COOKIE['color']);
        echo "<br>";
        echo $_COOKIE['color'];
    } else {
        print_r("No Color Found.");
    }

    print_r($_COOKIE);
?>