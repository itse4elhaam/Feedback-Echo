<?php

if (isset($_POST['submit'])) {
    $allowed_type = ['png', 'jpg', 'jpeg', 'gif', 'svg'];
    if (!empty($_FILES['upload']['name'])) {
        $file = $_FILES['upload'];
        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileTemp = $file['tmp_name'];
        $tragetDir = "uploads/${fileName}";

        $fileType = explode(".", $fileName);
        $fileType = strtolower(end($fileType));

        // validate array method

        if(in_array($fileType, $allowed_type)){
            if($file_size <= 1000000){
                move_uploaded_file($fileTemp, $tragetDir);
                $message = "Uploaded file";
            }
            else{
                echo "file size too big";
            }
        }
        else{
            echo "not allowed";
        }
    } else {
        $message = "Chose a file";
    }
}
?>

<!DOCTYPE html>
<html>

<body>
    <h1><?= $message ? $message : ""; ?></h1>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <input type="submit" value="submit" name="submit">
    </form>

</body>

</html>