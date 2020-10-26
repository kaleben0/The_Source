<!DOCTYPE HTML >
<html lang="en">
<head>
<?php
include 'font.php';
include 'config.php';
?>
<title>Image Upload</title>
<link rel="stylesheet" href="../css/source.css" >
<link rel="stylesheet" href="../css/all.css" >
<html>
<body class="quickpage">
<?php
    $currentDirectory = getcwd();
    $uploadDirectory = "../images/";

    $errors = []; // Store errors here

    $fileExtensionsAllowed = ['jpeg','jpg','png','gif']; // These will be the only file extensions allowed

    $fileName = $_FILES['the_file']['name'];
    $fileSize = $_FILES['the_file']['size'];
    $fileTmpName  = $_FILES['the_file']['tmp_name'];
    $fileType = $_FILES['the_file']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDirectory . $uploadDirectory . basename('$fileName');

    if (isset($_POST['submit'])) {

      if (! in_array($fileExtension,$fileExtensionsAllowed)) {
        $errors[] = "<div class='message_change'>This file extension is not allowed. Please upload a GIF, JPG, JPEG or PNG file</div>";
      }

      if ($fileSize > 10000000) {
        $errors[] = "<div class='message_change'>File exceeds maximum size (10MB)</div>";
      }

      if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, '../images/background-morning.png');

        if ($didUpload) {
          echo "<div class='message_change'>Image Uploaded</div>";
        } else {
          echo "<div class='message_change'>Error. Contact Administrator.</div>";
        }
      } else {
        foreach ($errors as $error) {
          echo $error . "<div class='message_change'>These are the errors</div>" . "\n";
        }
      }

    }
?>
</body>
</html>
