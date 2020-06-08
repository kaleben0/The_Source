<style>
<?php 
        include 'source_db.php';
        $mysqli = new mysqli( "localhost", $username, $password, $dbname );
        $query1 = "SELECT * FROM settings";
        if ($result=$mysqli->query($query1)){
          while ($row=$result->fetch_assoc()){
            $font=$row["font"];

        echo "body,input,.book_fields,.googlesearch,.googlesearch2,.google_clear,.net_graph_text,.pass_put,.set_fields,.tzone {font-family:$font";
        echo ";}";
        }
          $result->free();
        }
?>
</style>
