<?php
       include 'source_db.php';
       $mysqli = new mysqli( "localhost", $username, $password, $dbname );
       $query1 = "SELECT * FROM frames";
       if ($result=$mysqli->query($query1)){
         while ($row=$result->fetch_assoc()){
           $frame1_title=$row["frame1_title"];
           $frame1_url=$row["frame1_url"];
           $frame1_width=$row["frame1_width"];
           $frame1_height=$row["frame1_height"];
           $frame1_icon=$row["frame1_icon"];
           $frame2_title=$row["frame2_title"];
           $frame2_url=$row["frame2_url"];
           $frame2_width=$row["frame2_width"];
           $frame2_height=$row["frame2_height"];
           $frame2_icon=$row["frame2_icon"];
           $frame3_title=$row["frame3_title"];
           $frame3_url=$row["frame3_url"];
           $frame3_width=$row["frame3_width"];
           $frame3_height=$row["frame3_height"];
           $frame3_icon=$row["frame3_icon"];
           $frame4_title=$row["frame4_title"];
           $frame4_url=$row["frame4_url"];
           $frame4_width=$row["frame4_width"];
           $frame4_height=$row["frame4_height"];
           $frame4_icon=$row["frame4_icon"];
           $frame5_title=$row["frame5_title"];
           $frame5_url=$row["frame5_url"];
           $frame5_width=$row["frame5_width"];
           $frame5_height=$row["frame5_height"];
           $frame5_icon=$row["frame5_icon"];

           $frame1_title=trim($frame1_title);
           $frame2_title=trim($frame2_title);
           $frame3_title=trim($frame3_title);
           $frame4_title=trim($frame4_title);
           $frame5_title=trim($frame5_title);

         }
         $result->free();
       }
?>
