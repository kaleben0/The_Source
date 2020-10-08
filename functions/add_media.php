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
        $morning = $_POST['morning'];
        $day = $_POST['day'];
        $dusk = $_POST['dusk'];
        $evening = $_POST['evening'];
        $font = $_POST['font'];

        $morning = trim($morning);
        $day = trim($day);
        $dusk = trim($dusk);
        $evening = trim($evening);
        $font = trim($font);

     $sql = "UPDATE settings SET morning_message='$morning' , day_message='$day' , dusk_message='$dusk' , evening_message='$evening', font='$font' WHERE id='$id' ";
}
if (mysqli_query($conn, $sql)) {
    echo "Message Settings Updated";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</html>
</body>
