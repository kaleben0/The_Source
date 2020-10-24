<?php
       include 'source_db.php';
       $mysqli = new mysqli( "localhost", $username, $password, $dbname );
       $query1 = "SELECT * FROM settings";
       if ($result=$mysqli->query($query1)){
         while ($row=$result->fetch_assoc()){
           $main=$row["main_url"];
           $morning=$row["morning_message"];
           $day=$row["day_message"];
           $dusk=$row["dusk_message"];
           $evening=$row["evening_message"];
           $pagetitle=$row["pagetitle"];
           $weather=$row["weather"];
           $list=$row["list"];
         }
         $result->free();
       }
