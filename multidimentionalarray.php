<?php
    $users = [
        [1, "Pritam", "Dhaka", "pritam.cse2014@gmail.com"],
        [2, "Priya", "Jessore", "priya@gmail.com"],
        [3, "Prity", "Khulna", "prity@gmail.com"],
    ];
    echo "<pre>";
    print_r($users);
    echo "<pre>";
    for ($i=0; $i<count($users); $i++) { 
        print_r($users[$i]);
        echo "<br>";
        for ($j=0; $j<count($users); $j++) { 
            echo $users[$i] [$j];
            echo "<br>";
        }
    }
?>