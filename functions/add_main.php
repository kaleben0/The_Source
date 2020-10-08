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
        $main = $_POST['main'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $cc = $_POST['cc'];
        $pagetitle = $_POST['pagetitle'];

        $main = trim($main);
        $city = trim($city);
        $state = trim($state);
        $zip = trim($zip);
        $cc = trim($cc);
        $pagetitle = trim($pagetitle);

     $sql = "UPDATE settings SET main_url='$main' , city='$city' , state='$state' , zip_code='$zip' , country_code='$cc' , pagetitle='$pagetitle' WHERE id='$id' ";
}
if (mysqli_query($conn, $sql)) {
    echo "General Settings Updated";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</html>
</body>
