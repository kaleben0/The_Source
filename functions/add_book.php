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
        $category = $_POST['category'];
        $url = $_POST['url'];
        $fonta = $_POST['fonta'];
        $subcategory = $_POST['subcategory'];
        $title = $_POST['title'];
        $status = 'enabled';
        $favorite = $_POST['favorite'];
        if(isset($_POST['favorite'])) {
            $favorite = "yes";
            } else {
            $favorite = "no";
            }

        $letter = $title[0];
        $letter = strtolower($letter);
        $favorite = strtolower($favorite);

     $sql = "INSERT INTO bookmark (letter, category, url, fonta, subcategory, title, status, favorite)
     VALUES ('$letter','$category','$url','$fonta','$subcategory','$title','$status','$favorite')";
}
if (mysqli_query($conn, $sql)) {
    echo "<div class='message_change'>$title Bookmarked</div>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>
