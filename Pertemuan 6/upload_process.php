<?php
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $error = false;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $error = false;
        } else {
            echo "File is not an image.";
            $error = false;
        }
    }

    //cek kesamaan file
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $error = true;
    }

    //cek ukuram maksimum file
    if ($_FILES["gambar"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $error = true;
    }

    //cek ekstensi file
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $error = true;
    }

    //jika error true, upload file akan gagal
    //jika error false, upload file berhasil
    if ($error == true) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
?>