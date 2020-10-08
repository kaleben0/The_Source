<!DOCTYPE HTML >
<html lang="en">
<head>
<?php
include 'font.php';
include 'config.php';
?>
<link rel="stylesheet" href="../css/source.css" >
<title>Bookmark Added</title>
<link rel="stylesheet" href="../css/all.css" >
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
if(isset($_POST['submit']))
{
        $letter = $_POST['letter'];
        $category = $_POST['category'];
        $url = $_POST['url'];
        $fonta = $_POST['fonta'];
        $hashtag = $_POST['hashtag'];
        $title = $_POST['title'];
        $status = 'enabled';
        $favorite = $_POST['favorite'];

     $sql = "INSERT INTO bookmark (letter, category, url, fonta, hashtag, title, status, favorite)
     VALUES ('$letter','$category','$url','$fonta','$hashtag','$title','$status','$favorite')";
}
if (mysqli_query($conn, $sql)) {
    echo "<div class='message_change'>$title Bookmarked</div>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</html>
</body>
