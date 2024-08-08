<?php
    $users = ["Pritam", "Priya", "Prity", "Rupali", "Rumpa"];
    foreach ($users as $user) {
        if ($user == "Prity") {
            continue;
        }
        echo "<h2>$user</h2>";
        echo "<br>";
        // if ($user == "Priya") {
        //     break;
        // }
    }

    foreach($users as $user) : 
        echo $user;
        echo "<br>";
    endforeach;
?>