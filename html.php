<?php
    echo "<h1 style='color: red;'>PHP With HTML</h1>";
    echo "<h2 style='color: green;'>PHP With HTML</h2>";
    echo "<h3 style='color: blue;'>PHP With HTML</h3>";
?>

<?php
    $name = "Pritam Kumar Kundu";
    echo "<h1 style='color: orange'>My Name is $name</h1>";
?>

<h1 style="color: goldenrod;"><?php echo $name; ?></h1>

<?php
    $myColor = 'yellow';
?>

<h1 style="color: <?php echo $myColor; ?>">Pritam Kumar Kundu</h1>