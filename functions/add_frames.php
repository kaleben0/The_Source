<!DOCTYPE HTML >
<html lang="en">
<head>
<?php
include 'font.php';
include 'config.php';
?>
<title>Frames Settings</title>
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
        $id = '1';
	    $frame1_title = $_POST['frame1_title'];
        $frame1_url = $_POST['frame1_url'];
        $frame1_width = $_POST['frame1_width'];
        $frame1_height = $_POST['frame1_height'];
        $frame1_icon = $_POST['frame1_icon'];
        $frame2_title = $_POST['frame2_title'];
        $frame2_url = $_POST['frame2_url'];
        $frame2_width = $_POST['frame2_width'];
        $frame2_height = $_POST['frame2_height'];
        $frame2_icon = $_POST['frame2_icon'];
        $frame3_title = $_POST['frame3_title'];
        $frame3_url = $_POST['frame3_url'];
        $frame3_width = $_POST['frame3_width'];
        $frame3_height = $_POST['frame3_height'];
        $frame3_icon = $_POST['frame3_icon'];
        $frame4_title = $_POST['frame4_title'];
        $frame4_url = $_POST['frame4_url'];
        $frame4_width = $_POST['frame4_width'];
        $frame4_height = $_POST['frame4_height'];
        $frame4_icon = $_POST['frame4_icon'];
        $frame5_title = $_POST['frame5_title'];
        $frame5_url = $_POST['frame5_url'];
        $frame5_width = $_POST['frame5_width'];
        $frame5_height = $_POST['frame5_height'];
        $frame5_icon = $_POST['frame5_icon'];

        $frame1_title = trim($frame1_title);
        $frame1_url = trim($frame1_url);
        $frame1_width = trim($frame1_width);
        $frame1_height = trim($frame1_height);
        $frame1_icon = trim($frame1_icon);
        $frame2_title = trim($frame2_title);
        $frame2_url = trim($frame2_url);
        $frame2_width = trim($frame2_width);
        $frame2_height = trim($frame2_height);
        $frame2_icon = trim($frame2_icon);
        $frame3_title = trim($frame3_title);
        $frame3_url = trim($frame3_url);
        $frame3_width = trim($frame3_width);
        $frame3_height = trim($frame3_height);
        $frame3_icon = trim($frame3_icon);
        $frame4_title = trim($frame4_title);
        $frame4_url = trim($frame4_url);
        $frame4_width = trim($frame4_width);
        $frame4_height = trim($frame4_height);
        $frame4_icon = trim($frame4_icon);
        $frame5_title = trim($frame5_title);
        $frame5_url = trim($frame5_url);
        $frame5_width = trim($frame5_width);
        $frame5_height = trim($frame5_height);
        $frame5_icon = trim($frame5_icon);


     $sql = "UPDATE frames SET frame1_title = '$frame1_title', frame1_url = '$frame1_url', frame1_width = '$frame1_width', frame1_height = '$frame1_height', frame1_icon = '$frame1_icon', frame2_title = '$frame2_title', frame2_url = '$frame2_url', frame2_width = '$frame2_width', frame2_height = '$frame2_height', frame2_icon = '$frame2_icon', frame3_title = '$frame3_title', frame3_url = '$frame3_url', frame3_width = '$frame3_width', frame3_height = '$frame3_height', frame3_icon = '$frame3_icon', frame4_title = '$frame4_title', frame4_url = '$frame4_url', frame4_width = '$frame4_width', frame4_height = '$frame4_height', frame4_icon = '$frame4_icon', frame5_title = '$frame5_title', frame5_url = '$frame5_url', frame5_width = '$frame5_width', frame5_height = '$frame5_height', frame5_icon = '$frame5_icon' WHERE id='$id' ";
}
if (mysqli_query($conn, $sql)) {
    echo "<div class='message_change'>Frames Updated</div>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</html>
</body>
