<!DOCTYPE HTML >
<html lang="en">
<head>
<?php 
include 'config.php';
echo "<meta http-equiv='refresh' content='2; url=https://$main/' />";
?>
<link rel="stylesheet" href="./css/source.css" >
<title>Bookmark Added</title>
<link rel="manifest" crossorigin="use-credentials" href="./manifest.json" type="application/json">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link rel="stylesheet" href="./css/all.css" >
<html>
<body class="quickpage">
<?php
include 'source_db.php';
    $conn = mysqli_connect("localhost", $username, $password, $dbname); 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit']))
{    
        $letter = $_POST['letter'];
        $category = $_POST['category'];
        $url = $_POST['url'];
        $fonta = $_POST['fonta'];
        $hashtag = $_POST['hashtag']; 
        $title = $_POST['title'];
        $status = 'enabled';
        $subcategory = $_POST['subcategory'];
 
     $sql = "INSERT INTO bookmark (letter, category, url, fonta, hashtag, title, status, subcategory)
     VALUES ('$letter','$category','$url','$fonta','$hashtag','$title','$status','$subcategory')";
} 
if (mysqli_query($conn, $sql)) {
    echo "Bookmark '$title' created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</html>
</body>