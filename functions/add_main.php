<!DOCTYPE HTML >
<html lang="en">
<head>
<?php 
include 'config.php';
echo "<meta http-equiv='refresh' content='2; url=https://$main/' />";
?>
<link rel="stylesheet" href="../css/source.css" >
<title>Media Settings</title>
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
if(isset($_POST['submit']))
{    
        $id='1';
        $main = $_POST['main'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $cc = $_POST['cc']; 
        $spot = $_POST['spot']; 
        $private = $_POST['privatebin']; 
        $shell = $_POST['shellinabox']; 
        $google = $_POST['google']; 
        $pagetitle = $_POST['pagetitle']; 
        
        $main = trim($main);
        $city = trim($city);
        $state = trim($state);
        $zip = trim($zip);
        $cc = trim($cc);
        $spot = trim($spot);
        $private = trim($private); 
        $shell = trim($shell);
        $google = trim($google);
        $pagetitle = trim($pagetitle);
        
     $sql = "UPDATE settings SET main_url='$main' , city='$city' , state='$state' , zip_code='$zip' , country_code='$cc' , spot_url='$spot' , privatebin_url='$private' , shellinabox_url='$shell', google_embed='$google', pagetitle='$pagetitle' WHERE id='$id' ";
} 
if (mysqli_query($conn, $sql)) {
    echo "Main Settings Updated";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</html>
</body>