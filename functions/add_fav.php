<!DOCTYPE HTML >
<html lang="en">
<head>
<?php 
include 'config.php';
echo "<meta http-equiv='refresh' content='2; url=https://$main/' />";
?>
<link rel="stylesheet" href="../css/source.css" >
<title>Favorite Added</title>
<link rel="manifest" crossorigin="use-credentials" href="./manifest.json" type="application/json">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link rel="stylesheet" href="../css/all.css" >
<html>
<body class="quickpage">
<?php
include 'source_db.php';
    $conn = mysqli_connect("localhost", $username, $password, $dbname); 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET['id'];
$title = $_GET['title'];
$sql = "UPDATE bookmark SET favorite ='yes' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Favorite '$title' Added";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<br/>
<i class="far fa-star"></i>
</html>
</body>