<!DOCTYPE HTML >
<html lang="en">
<head>
<?php
include 'font.php';
include 'config.php';
?>
<title>Feature Enabled</title>
<link rel="stylesheet" href="../css/source.css" >
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
$status = $_GET['status'];
$sql = "UPDATE features SET status ='block' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "<div class='message_change'>$title Enabled</div>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>
