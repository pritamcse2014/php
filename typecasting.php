<?php
    $a = 50;
    $a = (string) $a;
    
    $b = true;
    $b = (string) $b;
    
    $c = "300";
    $c = (int) $c;
    
    $d = "300";
    $d = (bool) $d;
    
    $x = 1;
    $x = (float) $x;
    
    $y = 1.1;
    $y = (int) $y;
    
    $z = "Hello";
    $z = (bool) $z;
    
    $m = "100";
    $m = (bool) $m;
    
    $n = "abc";
    $n = (bool) $n;

    $i = 10;
    $i = (array) $i;

    $j = 20;
    $j = (object) $j;

    $k = ["50"];

    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($d);
    echo "<br>";
    var_dump($x);
    echo "<br>";
    var_dump($y);
    echo "<br>";
    var_dump($z);
    echo "<br>";
    var_dump($m);
    echo "<br>";
    var_dump($n);
    echo "<br>";
    var_dump($i);
    echo "<br>";
    var_dump($j);
    echo "<br>";
    var_dump($k);
?>