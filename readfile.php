<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read File</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <button type="submit">Read File</button>
    </form>
    <br>
</body>
</html>

<?php
    if (isset($_FILES['file'])) {
        // print_r($_FILES(['file']));
        $file = $_FILES['file']['tmp_name'];
        $myFile = fopen($file, "r") or die("Unable to Read File");
        echo fread($myFile, filesize($file));
        fclose($myFile);
    }


    // $file = "files/test.txt";
    // $myFile = fopen($file, "r") or die("Unable to Read File");
    // echo fread($myFile, filesize($file));
    // fclose($myFile);
?>