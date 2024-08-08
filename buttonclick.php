<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Click</title>
</head>
<body>
    <form action="" method="post">
        <button type="submit" name="button_post" value="btn_post">Click Me Post</button>
    </form>
    <br>
    <form action="" method="get">
        <button type="submit" name="button_get" value="btn_get">Click Me Get</button>
    </form>
    <br>
    <form action="" method="post">
        <button type="submit" name="button_request" value="btn_request">Click Me Request</button>
    </form>
</body>
</html>

<?php
    if (isset($_POST['button_post'])) {
        buttonClickPost();
    }

    function buttonClickPost() {
        echo "Function Called on POST Button Click.";
    }
?>

<?php
    if (isset($_GET['button_get'])) {
        buttonClickGet();
    }

    function buttonClickGet() {
        echo "Function Called on GET Button Click.";
    }
?>

<?php
    if (isset($_REQUEST['button_request'])) {
        buttonClickRequest();
    }

    function buttonClickRequest() {
        echo "Function Called on REQUEST Button Click.";
    }
?>