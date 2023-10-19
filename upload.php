<?php

$message = "";
if (isset($_POST['submit'])) {
    $allowed_types = ['png', 'jpg', 'jpeg', 'gif', 'svg'];
    if (!empty($_FILES['fileToUpload']['name'])) {
        $file = $_FILES['fileToUpload'];
        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileTemp = $file['tmp_name'];
        $targetDir = "uploads/" . $fileName;

        $fileType = explode(".", $fileName);
        $fileType = strtolower(end($fileType));

        if (in_array($fileType, $allowed_types)) {
            if ($fileSize <= 1000000) {
                move_uploaded_file($fileTemp, $targetDir);
                $message = "File uploaded successfully";
            } else {
                $message = "File size is too big";
            }
        } else {
            $message = "File type not allowed";
        }
    } else {
        $message = "Please choose a file";
    }
}
?>

<!DOCTYPE html>
<html>

<body>
    <h1><?= $message ?></h1>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>

</body>

</html>