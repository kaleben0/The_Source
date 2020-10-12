<!DOCTYPE HTML >
<html lang="en">
<head>
<?php
include 'font.php';
include 'config.php';
?>
<link rel="stylesheet" href="../css/source.css" >
<title>General Settings</title>
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
        $id='1';
        $main = $_POST['main'];
        $weather = $_POST['weather'];
        $pagetitle = $_POST['pagetitle'];

        $main = trim($main);
        $weather = AddSlashes($weather);
        $pagetitle = trim($pagetitle);

     $sql = "UPDATE settings SET main_url='$main' , weather='$weather' , pagetitle='$pagetitle' WHERE id='$id' ";
}
if (mysqli_query($conn, $sql)) {
    echo "<div class='message_change'>General Settings Updated</div>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</html>
</body>
