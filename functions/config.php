<?php
       include 'source_db.php';
       $mysqli = new mysqli( "localhost", $username, $password, $dbname );
       $query1 = "SELECT * FROM settings";
       if ($result=$mysqli->query($query1)){
         while ($row=$result->fetch_assoc()){
           $main=$row["main_url"];
           $zip=$row["zip_code"];
           $morning=$row["morning_message"];
           $day=$row["day_message"];
           $dusk=$row["dusk_message"];
           $evening=$row["evening_message"];
           $spot=$row["spot_url"];
           $privatebin=$row["privatebin_url"];
           $shellinabox=$row["shellinabox_url"];
           $google=$row["google_embed"];
           $city=$row["city"];
           $state=$row["state"];
           $cc=$row["country_code"];
           $pagetitle=$row["pagetitle"];
           $weather=$row["weather"];
         }
         $result->free();
       }
