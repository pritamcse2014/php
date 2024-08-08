<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";

    echo "<br>";

    echo "Favorite color is " . $_SESSION["favcolor"];
    echo "<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"];
    echo "<br>";
    print_r($_SESSION);
    echo "<br>";
    $_SESSION["favcolor"] = "yellow";
    print_r($_SESSION);
    echo "<br>";
    session_unset();
    session_destroy();
    echo "All session variables are now removed, and the session is destroyed.";
    ?>
</body>
</html>