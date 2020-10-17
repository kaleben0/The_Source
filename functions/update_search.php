<!DOCTYPE HTML >
<html lang="en">
<head>
<?php
include 'font.php';
include 'config.php';
?>
<title>Search Settings</title>
<link rel="stylesheet" href="../css/source.css" >
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
        $id = $_POST['id'];
        $search_title = $_POST['search_title'];
        $search_icon = $_POST['search_icon'];
        $search_url = $_POST['search_url'];

        $id = trim($id);
        $search_title = trim($search_title);
        $search_icon = trim($search_icon);
        $search_url = trim($search_url);

     $sql = "UPDATE search SET search_title = '$search_title' , search_icon = '$search_icon' , search_url = '$search_url' WHERE id='$id' ";
}
if (mysqli_query($conn, $sql)) {
    echo "<div class='message_change'>Search $id Updated</div>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</html>
</body>
