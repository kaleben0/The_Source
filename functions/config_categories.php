<?php
       include 'source_db.php';
       $mysqli = new mysqli( "localhost", $username, $password, $dbname );
       $query1 = "SELECT * FROM catergories";
       if ($result=$mysqli->query($query1)){
         while ($row=$result->fetch_assoc()){
           $catergory1_name=$row["catergory1_name"];
           $catergory1_number=$row["catergory1_number"];;
           $catergory1_fa=$row["catergory1_fa"];
           $catergory2_name=$row["catergory2_name"];
           $catergory2_number=$row["catergory2_number"];
           $catergory2_fa=$row["catergory2_fa"];
           $catergory3_name=$row["catergory3_name"];
           $catergory3_number=$row["catergory3_number"];
           $catergory3_fa=$row["catergory3_fa"];
           $catergory4_name=$row["catergory4_name"];
           $catergory4_number=$row["catergory4_number"];
           $catergory4_fa=$row["catergory4_fa"];
           $catergory5_name=$row["catergory5_name"];
           $catergory5_number=$row["catergory5_number"];
           $catergory5_fa=$row["catergory5_fa"];
           $catergory6_name=$row["catergory6_name"];
           $catergory6_number=$row["catergory6_number"];
           $catergory6_fa=$row["catergory6_fa"];
           $catergory7_name=$row["catergory7_name"];
           $catergory7_number=$row["catergory7_number"];
           $catergory7_fa=$row["catergory7_fa"];
           $catergory8_name=$row["catergory8_name"];
           $catergory8_number=$row["catergory8_number"];
           $catergory8_fa=$row["catergory8_fa"];
           $catergory9_name=$row["catergory9_name"];
           $catergory9_number=$row["catergory9_number"];
           $catergory9_fa=$row["catergory9_fa"];
           $catergory9_name=$row["catergory10_name"];
           $catergory9_number=$row["catergory10_number"];
           $catergory9_fa=$row["catergory10_fa"];
           
           $catergory1_name=trim($catergory1_name);
           $catergory2_name=trim($catergory2_name);
           $catergory3_name=trim($catergory3_name);
           $catergory4_name=trim($catergory4_name);
           $catergory5_name=trim($catergory5_name);
           $catergory6_name=trim($catergory6_name);
           $catergory7_name=trim($catergory7_name);
           $catergory8_name=trim($catergory8_name);
           $catergory9_name=trim($catergory9_name);
           $catergory10_name=trim($catergory10_name);
         }
         $result->free();
       }
?>
