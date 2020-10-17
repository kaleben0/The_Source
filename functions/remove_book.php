<!DOCTYPE HTML >
<html lang="en">
<head>
<?php
include 'font.php';
include 'config.php';
?>
<title>Bookmark Removed</title>
<link rel="stylesheet" href="../css/source.css" >
<link rel="stylesheet" href="../css/fontawesome/all.css" >
<script>
setTimeout("self.close()", 3000 )
</script>
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
$sql = "DELETE FROM bookmark WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "<div class='message_change'>$title Removed</div>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<br/>
</html>
</body>
