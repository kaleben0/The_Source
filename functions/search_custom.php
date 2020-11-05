<?php
        include 'source_db.php';
        $mysqli = new mysqli( "localhost", $username, $password, $dbname );
        $query1 = "SELECT * FROM search ORDER BY search_title ";
        if ($result=$mysqli->query($query1)){
          while ($row=$result->fetch_assoc()){
            $id=$row["id"];
            $search_title=$row["search_title"];
            $search_icon=$row["search_icon"];
            $search_url=$row["search_url"];
            $titlesquish = str_replace(' ', '', $search_title);
            $titlesquish = str_replace('-', '', $titlesquish);
            $titlesquish = strtolower($titlesquish);

     echo "<script>";
     echo "function $titlesquish() { ";
     echo "var box = document.getElementById('gsearch').value;var boxurl = '$search_url';var boxfin = boxurl + box;";
     echo "window.open(boxfin, '_blank');}";
     echo "</script>";
     echo "<input type='hidden' name='id' value='$id'>";
     echo "<div class='search_space' onclick='$titlesquish();' id='$search_title'>";
     echo "<div class='search_btn'title='$search_title'><i class='$search_icon'></i></div>";
     echo "<div class='search_text'>$search_title</div>";
     echo "</div>";
     }
          $result->free();
        }
?>
