<?php
    $user = [
        "name" => "Pritam Kumar Kundu",
        "age" => 28,
        "email" => "pritam.cse2014@gmail.com", 
    ];
    // print_r($user);
    $userJSON = json_encode($user);
    // print_r($userJSON);
    echo $userJSON;
    
    echo "<br>";

    $data = '{ 
        "name" : "Pritam Kumar Kundu", 
        "age" : 28, 
        "email" : "pritam.cse2014@gmail.com" 
    }';
    // echo $data;
    $dataArray = json_decode($data, true);
    print_r($dataArray);
?>