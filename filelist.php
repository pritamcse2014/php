<?php
    $path = "files";
    $items = scandir($path);
    // print_r($items);
    $items = array_diff($items, array(".", ".."));
    // print_r($items);
    foreach ($items as $item) {
        echo "<a href=./files/$item>$item</a>";
        echo "<br>";
    }
?>