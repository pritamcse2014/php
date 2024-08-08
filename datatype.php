<?php
    $name = "Pritam Kumar Kundu";
    echo $name;
    echo "<br>";
    var_dump($name);
    echo "<br>";

    $number1 = 101;
    echo $number1;
    echo "<br>";
    var_dump($number1);
    echo "<br>";
    
    $number2 = 10.10;
    echo $number2;
    echo "<br>";
    var_dump($number2);
    echo "<br>";

    $bool = true;
    echo $bool;
    echo "<br>";
    var_dump($bool);
    echo "<br>";

    $array = ["Pritam", "Priya", "Prity"];
    echo $array[1];
    echo "<br>";
    var_dump($array);
    echo "<br>";

    $empty = null;
    var_dump($empty);
    echo "<br>";

    // $user = new User();

    $connection = ftp_connect("127.0.0.1") or die("Local Host Not Found");
    echo var_dump($connection);
?>