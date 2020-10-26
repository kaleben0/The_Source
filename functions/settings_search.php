<div class="section_label" onclick="$('#set_cs').toggle();">Custom Search </div>
<div class="settings_box" id="set_cs">
  <div class="settings_custom_search" >
    <?php
        include 'source_db.php';
        $mysqli = new mysqli( "localhost", $username, $password, $dbname );
        $query1 = "SELECT * FROM search";
        if ($result=$mysqli->query($query1)){
          while ($row=$result->fetch_assoc()){
            $id=$row["id"];
            $search_title=$row["search_title"];
            $search_icon=$row["search_icon"];
            $search_url=$row["search_url"];
echo "<form action='./functions/update_search.php' method='post' target='message_frame' id='search_form$id'>";
echo "<div class='set_label'>Search $id  <div class='tooltip'><i class='fas fa-info-circle fa-sm'></i><span class='tooltiptext'>Change Title to 'empty' (without quotes) to disable</span></div><input type='submit' name='submit' class='far fa-save' value='&#xf0c7' title='Save Changes'></div>";
echo "<input type='hidden' name='id' value='$id'>";
echo "<div class='frame_field'>Title <input type='text' class='set_fields' name='search_title' maxlength='13' value='$search_title'></div>";
echo "<div class='frame_field'>URL <input type='text' class='set_fields url' name='search_url' value='$search_url' ></div>";
echo "<div class='frame_field'>Font Awesome Icon <div class='tooltip'><i class='fas fa-info-circle fa-sm'></i>";
echo "<span class='tooltiptext'>Add an icon class from <a href='https://fontawesome.com/icons?d=gallery&m=free' target='_blank' style='font-weight:bold;font-style: italic;'>Font Awesome</a>";
echo ".<br/>Example: far fa-smile</span></div><input type='text' class='set_fields frame_icon' name='search_icon' value='$search_icon'></div>";
echo "</form></br>";
          }
          $result->free();
        }
?>
  </div>
</div>
