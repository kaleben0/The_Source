<style>
<?php 
        include 'source_db.php';
        $mysqli = new mysqli( "localhost", $username, $password, $dbname );
        $query1 = "SELECT * FROM features";
        if ($result=$mysqli->query($query1)){
          while ($row=$result->fetch_assoc()){
            $name=$row["name"];
            $status=$row["status"];
            $type=$row["type"];

        echo "$name {";
        echo "display:$status";
        echo ";}";
          }
          $result->free();
        }
?>
</style>