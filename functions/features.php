<div class="section_label" onclick="$('#set_feat').toggle();">Features</div>
<div class="settings_box" id="set_feat">
  <div class="settings_features" >
    <?php
        include 'source_db.php';
        $mysqli = new mysqli( "localhost", $username, $password, $dbname );
        $query1 = "SELECT * FROM features WHERE type = 'feature' ORDER BY title ";
        if ($result=$mysqli->query($query1)){
          while ($row=$result->fetch_assoc()){
            $id=$row["id"];
            $name=$row["name"];
            $status=$row["status"];
            $type=$row["type"];
            $title=$row["title"];
	          if ($status == 'block'){
	            $sub_icon = 'fas fa-check-square fa-2x';
	            $color = 'green';
	            $change = './functions/remove_feat.php';
	            }
	            elseif ($status == 'none') {
	            $sub_icon = 'far fa-check-square fa-2x';
	            $color = 'red';
	            $change = './functions/add_feat.php';
	            }
        echo "<div class='feat_container'><div class='feat_title'>$title</div><div class='feat_url' onclick='update_db();' ><a href='$change?id=$id&title=$title&status=$status' target='_blank' id='feature_form' onclick='update_db();' ><i class='$sub_icon' style='color:$color !important;'></i></a></div></div>";
          }
          $result->free();
        }
?>
  </div>
</div>
