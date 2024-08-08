<?php
    $users = [
        ["name" => "Pritam", "age" => "28", "city" => "Dhaka"],
        ["name" => "Priya", "age" => "22", "city" => "Jessore"],
        ["name" => "Prity", "age" => "18", "city" => "Khulna"],
    ];
    
    foreach ($users as $user) {
        foreach ($user as $key => $item) { 
            echo "$key is $item";
            echo "<br>";
        }
        echo "<br>";
    }
?>