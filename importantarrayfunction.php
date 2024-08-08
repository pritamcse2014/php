<?php
    $users1 = "abc";
    echo is_array($users1);
    echo "<br>";
    
    $users2 = ["Pritam", "Priya", "Prity", "Rumpa", "Rupali", "Pritam", "Prity"];
    echo is_array($users2);
    echo "<br>";
    echo count($users2);
    echo "<br>";
    unset($users2[2]);
    array_push($users2, "Riya");
    array_pop($users2);
    print_r($users2);
    echo "<br>";
    echo implode($users2);
    echo "<br>";

    if (is_array($users2)) {
        echo "Array";
    } else {
        echo "Not Array";
    }

    echo "<br>";

    $user = [
        "name" => "Pritam Kumar Kundu", 
        "age" => 28,
        "email" => "pritam.cse2014@gmail.com",
    ];
    print_r(array_keys($user));
    echo "<br>";
    $str = "Hello, How Are You?";
    echo $str;
    echo "<br>";
    print_r(explode(" ", $str));
    echo "<br>";
    print_r(explode("o", $str));
    echo "<br>";
    print_r(explode(",", $str));
    echo "<br>";
    $data = array_merge($user, $users2);
    print_r($data);
    echo "<br>";
    $dataArray = array_unique($users2);
    print_r($dataArray);
?>