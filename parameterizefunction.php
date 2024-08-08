<?php
    function sum($a, $b) {
        echo $a + $b;
        echo "<br>";
    }

    sum(15, 10);
    sum(150, 100);
    sum(25, 20);
?>

<?php
    function UserData($name, $color) {
        echo "<h1 style='color: $color'>$name</h1>";
    }

    UserData('Pritam Kumar Kundu', 'red');
    UserData('Prity Rani Datta', 'green');
    UserData('Priya Rani Sarker', 'blue');
?>