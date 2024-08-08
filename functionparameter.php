<?php
    function fruit($name="Pritam", $color="orange") {
        echo "This Fruit Name is $name and it's Color is $color";
    }
    fruit('Apple', 'Red');
?>

<?php
    function displayUser($name="Pritam", $color="orange") {
        echo "<h1 style='color: $color;'>$name</h1>";
    }
    displayUser("Pritam Kumar Kundu", "Red");
?>