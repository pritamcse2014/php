<?php
    $users = [
        [1, "Pritam", "Dhaka", "pritam.cse2014@gmail.com"],
        [2, "Priya", "Jessore", "priya@gmail.com"],
        [3, "Prity", "Khulna", "prity@gmail.com"],
    ];
    echo "<table border= 1>";
        for ($i=0; $i<count($users); $i++) { 
            echo "<tr>";
            for ($j=0; $j<count($users[$i]); $j++) { 
                echo "<td>";
                echo $users[$i][$j];
                echo "</td>";
            }
            echo "</tr>";
        }
    echo "</table>";
?>