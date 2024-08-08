<?php
    $users = ["Pritam", "Priya", "Prity"];
    echo $users[0];
    echo "<br>";
    echo $users[1];
    echo "<br>";
    echo $users[2];
    echo "<br>";
    for ($user=0; $user<count($users); $user++) { 
        echo "<h2 style='color: red;'>$users[$user]</h2>";
        echo "<br>";
    }
?>