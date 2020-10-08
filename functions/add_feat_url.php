<!DOCTYPE HTML >
<html lang="en">
<head>
<?php
include 'config.php';
?>
<link rel="stylesheet" href="../css/source.css" >
<title>Media Settings</title>
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
        $spot = $_POST['spot'];
        $private = $_POST['privatebin'];
        $shell = $_POST['shellinabox'];
        $google = $_POST['google'];


        $spot = trim($spot);
        $private = trim($private);
        $shell = trim($shell);
        $google = trim($google);


     $sql = "UPDATE settings SET spot_url='$spot' , privatebin_url='$private' , shellinabox_url='$shell', google_embed='$google' WHERE id='$id' ";
}
if (mysqli_query($conn, $sql)) {
    echo "Feature URLs Updated";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</html>
</body>
