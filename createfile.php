<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="filename" id="filename" placeholder="Enter Your File Name">
        <br> <br>
        <textarea name="content" id="content" placeholder="Enter File Content"></textarea>
        <br> <br>
        <button type="submit">Create File</button>
    </form>
    <br>
</body>
</html>

<?php
    if (isset($_POST['filename'])) {
        $fileName = 'files/'. $_POST['filename'];
        $content = $_POST['content'];
        $file = fopen($fileName, "w") or die("Unable to create file");
        fwrite($file, $content);
        fclose($file);
        echo "File Created";
    }

    // $fileName = "dummy.txt";
    // $fileName = "files/dummy.txt";
    // $content = "Dummy Content";
    // $file = fopen($fileName, "w") or die("Unable to create file");
    // fwrite($file, $content);
    // fclose($file);
    // echo "File Created";
?>