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
        $category1_name=$_POST['category1_name'];
        $category1_number=$_POST['category1_number'];;
        $category1_fa=$_POST['category1_fa'];
        $category2_name=$_POST['category2_name'];
        $category2_number=$_POST['category2_number'];
        $category2_fa=$_POST['category2_fa'];
        $category3_name=$_POST['category3_name'];
        $category3_number=$_POST['category3_number'];
        $category3_fa=$_POST['category3_fa'];
        $category4_name=$_POST['category4_name'];
        $category4_number=$_POST['category4_number'];
        $category4_fa=$_POST['category4_fa'];
        $category5_name=$_POST['category5_name'];
        $category5_number=$_POST['category5_number'];
        $category5_fa=$_POST['category5_fa'];
        $category6_name=$_POST['category6_name'];
        $category6_number=$_POST['category6_number'];
        $category6_fa=$_POST['category6_fa'];
        $category7_name=$_POST['category7_name'];
        $category7_number=$_POST['category7_number'];
        $category7_fa=$_POST['category7_fa'];
        $category8_name=$_POST['category8_name'];
        $category8_number=$_POST['category8_number'];
        $category8_fa=$_POST['category8_fa'];
        $category9_name=$_POST['category9_name'];
        $category9_number=$_POST['category9_number'];
        $category9_fa=$_POST['category9_fa'];
        $category10_name=$_POST['category10_name'];
        $category10_number=$_POST['category10_number'];
        $category10_fa=$_POST['category10_fa'];

        $category1_name=trim($category1_name);
        $category2_name=trim($category2_name);
        $category3_name=trim($category3_name);
        $category4_name=trim($category4_name);
        $category5_name=trim($category5_name);
        $category6_name=trim($category6_name);
        $category7_name=trim($category7_name);
        $category8_name=trim($category8_name);
        $category9_name=trim($category9_name);
        $category10_name=trim($category10_name);

        $category1_number=trim($category1_number);
        $category2_number=trim($category2_number);
        $category3_number=trim($category3_number);
        $category4_number=trim($category4_number);
        $category5_number=trim($category5_number);
        $category6_number=trim($category6_number);
        $category7_number=trim($category7_number);
        $category8_number=trim($category8_number);
        $category9_number=trim($category9_number);
        $category10_number=trim($category10_number);


     $sql = "UPDATE categories SET category1_name = '$category1_name', category1_fa = '$category1_fa', category1_height = , category1_number = '$category1_number', category2_name = '$category2_name', category2_fa = '$category2_fa', category2_number = '$category2_number', category3_name = '$category3_name', category3_fa = '$category3_fa', category3_number = '$category3_number', category4_name = '$category4_name', category4_fa = '$category4_fa', category4_number = '$category4_number', category5_name = '$category5_name', category5_fa = '$category5_fa', category5_number = '$category5_number , category6_name = '$category6_name', category6_fa = '$category6_fa', category6_number = '$category6_number', category7_name = '$category7_name', category7_fa = '$category5_fa', category7_number = '$category7_number' , category8_name = '$category8_name', category8_fa = '$category8_fa', category8_number = '$category8_number' , category9_name = '$category9_name', category9_fa = '$category9_fa', category9_number = '$category10_number' , category10_name = '$category10_name', category10_fa = '$category10_fa', category10_number = '$category10_number' WHERE id='$id' ";
}
if (mysqli_query($conn, $sql)) {
    echo "<div class='message_change'>Categories Updated</div>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</body>
</html>
