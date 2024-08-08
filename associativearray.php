<?php
    $userDetails = [
        "name" => "Pritam Kumar Kundu",
        "age" => 28,
        "phone" => "01311-003738",
        "city" => "Dhaka",
        "email" => "pritam.cse2014@gmail.com",
    ];
    echo $userDetails["name"];
    echo "<br>";
    echo $userDetails["age"];
    echo "<br>";
    echo $userDetails["phone"];
    echo "<br>";
    echo $userDetails["city"];
    echo "<br>";
    echo $userDetails["email"];
    echo "<br>";
    echo "<br>";

    foreach ($userDetails as $key => $userDetail) {
        echo $key . ' : ' . $userDetail;
        echo "<br>";
    }
?>