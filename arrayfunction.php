<?php
    $users = ["Pritam", "Priya", "Prity", "Rupali"];
    array_push($users, "Riya", "Rumpa");
    array_pop($users);
    array_splice($users, -2);
    print_r($users);
?>