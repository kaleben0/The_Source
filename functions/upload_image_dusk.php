<!DOCTYPE HTML >
<html lang="en">
<head>
<?php
include 'config.php';
echo "<meta http-equiv='refresh' content='2; url=https://$main/' />";
?>
<link rel="stylesheet" href="../css/source.css" >
<title>Image Upload</title>
<link rel="manifest" crossorigin="use-credentials" href="./manifest.json" type="application/json">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
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
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
      }

      if ($fileSize > 20000000) {
        $errors[] = "File exceeds maximum size (20MB)";
      }

      if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, '../images/background-dusk.png');

        if ($didUpload) {
          echo "The image has been uploaded";
        } else {
          echo "An error occurred. Please contact the administrator.";
        }
      } else {
        foreach ($errors as $error) {
          echo $error . "These are the errors" . "\n";
        }
      }

    }
?>
</html>
</body>
