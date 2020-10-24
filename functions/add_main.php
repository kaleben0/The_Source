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
        $pagetitle = $_POST['pagetitle'];
        $font = $_POST['font'];
        $list = $_POST['list'];
        if(isset($_POST['list'])) {
            $list = "enabled";
            } else {
            $list = "disabled";
            }

        $main = trim($main);
        $pagetitle = trim($pagetitle);
        $font = trim($font);

     $sql = "UPDATE settings SET main_url='$main' , pagetitle='$pagetitle' , font='$font', list='$list' WHERE id='$id' ";
}
if (mysqli_query($conn, $sql)) {
    echo "<div class='message_change'>General Settings Updated</div>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>
