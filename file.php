<?php
    // print_r($_FILES);
    // print_r($_FILES['fileUpload']);
    if ($_FILES['fileUpload']) {
        $path = $_FILES['fileUpload']['name'];
        // echo $path;
        $upload_path = "./uploads/".$path;
        // echo $upload_path;
        // move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_path) || die("Failed to Upload");
        if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_path)) {
            echo "File Uploaded Successfully.";
        } else {
            die("Failed to Upload.");
        }
    } else {
        die("No File Upload.");
    }
?>