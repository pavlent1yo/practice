<?php
if (isset($_POST["submit"])) {
    $mysql = new mysqli('localhost', 'root', '', 'registration');
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
            if ($uploadOk == 1) {
                $filename = $_FILES["file"]["name"];
                $imageData = file_get_contents($_FILES["file"]["tmp_name"]);
                $query = "INSERT INTO files (filename, image) VALUES ('$filename', ?)";
                $statement = $mysql->prepare($query);
                $statement->bind_param("b", $imageData);
                if ($statement->execute()) {
                    echo "File successfully uploaded and saved in the database.";
                    header("Location: ../login.php");
                } else {
                    echo "Error while writing the file to the database.";
                }
            }
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($_FILES["file"]["size"] > 500000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    }
}
?>