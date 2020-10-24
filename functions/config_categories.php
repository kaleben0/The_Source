<?php
       include 'source_db.php';
       $mysqli = new mysqli( "localhost", $username, $password, $dbname );
       $query1 = "SELECT * FROM categories";
       if ($result=$mysqli->query($query1)){
         while ($row=$result->fetch_assoc()){
           $category1_name=$row["category1_name"];
           $category1_number=$row["category1_number"];;
           $category1_fa=$row["category1_fa"];
           $category2_name=$row["category2_name"];
           $category2_number=$row["category2_number"];
           $category2_fa=$row["category2_fa"];
           $category3_name=$row["category3_name"];
           $category3_number=$row["category3_number"];
           $category3_fa=$row["category3_fa"];
           $category4_name=$row["category4_name"];
           $category4_number=$row["category4_number"];
           $category4_fa=$row["category4_fa"];
           $category5_name=$row["category5_name"];
           $category5_number=$row["category5_number"];
           $category5_fa=$row["category5_fa"];
           $category6_name=$row["category6_name"];
           $category6_number=$row["category6_number"];
           $category6_fa=$row["category6_fa"];
           $category7_name=$row["category7_name"];
           $category7_number=$row["category7_number"];
           $category7_fa=$row["category7_fa"];
           $category8_name=$row["category8_name"];
           $category8_number=$row["category8_number"];
           $category8_fa=$row["category8_fa"];
           $category9_name=$row["category9_name"];
           $category9_number=$row["category9_number"];
           $category9_fa=$row["category9_fa"];
           $category10_name=$row["category10_name"];
           $category10_number=$row["category10_number"];
           $category10_fa=$row["category10_fa"];

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

           $category1_title=strtolower($category1_name);
           $category2_title=strtolower($category2_name);
           $category3_title=strtolower($category3_name);
           $category4_title=strtolower($category4_name);
           $category5_title=strtolower($category5_name);
           $category6_title=strtolower($category6_name);
           $category7_title=strtolower($category7_name);
           $category8_title=strtolower($category8_name);
           $category9_title=strtolower($category9_name);
           $category10_title=strtolower($category10_name);
         }
         $result->free();
       }
?>
