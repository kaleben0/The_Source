<div class="win_book_edit"><span class="add_line_box"><i class="fas fa-plus" style="font-size: 18px;" title="Add Lines" id="add_line"></i></span> <span class="exit_book_edit" ><i class="fas fa-window-close fa-lg"></i></span>
  <div class='book_head'>Edit Bookmarks</div>
  <div class='book_title_field'>
    <div class='book_update_field table_head'>Title</div>
    <div class='book_update_field table_head'>URL</div>
    <div class='book_update_field table_head'>FA Icon <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Add an icon class from <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank" style="font-weight:bold;font-style: italic;">Font Awesome</a>.<br/>Example: far fa-smile</span></div></div>
    <div class='book_update_field table_head'>Category</div>
    <div class='book_update_field table_head'>Subcategory</div>
    <div class='book_update_field table_head'>Favorite</div>
  </div>
  <div class="book_box">
  <div class="clone_box">
    <hr class="book_hr" id="new_record_hr"/>
    <div class="book_update_field_box">
      <form action="./functions/add_book.php" method="post" target="message_frame" >
        <input type="submit" name="submit" class='far fa-save button_add_update' value="" title="Save Changes">
        <input type="text" name="title" class='book_update_field' placeholder="Name-20 Char Max" maxlength="20">
        <input type="url" name="url" class='book_update_field' placeholder="Full URL">
        <input type="text" name="fonta" class='book_update_field' placeholder="Font Awesome Icon">
        <select name="category" class='book_update_field'>
          <option value=' ' disabled selected>Category</option>
          <option value='<?php include './functions/config_categories.php';echo$category1_number ?>'>
          <?php include './functions/config_categories.php';echo$category1_name ?>
          </option>
          <option value='<?php include './functions/config_categories.php';echo$category2_number ?>'>
          <?php include './functions/config_categories.php';echo$category2_name ?>
          </option>
          <option value='<?php include './functions/config_categories.php';echo$category3_number ?>'>
          <?php include './functions/config_categories.php';echo$category3_name ?>
          </option>
          <option value='<?php include './functions/config_categories.php';echo$category4_number ?>'>
          <?php include './functions/config_categories.php';echo$category4_name ?>
          </option>
          <option value='<?php include './functions/config_categories.php';echo$category5_number ?>'>
          <?php include './functions/config_categories.php';echo$category5_name ?>
          </option>
          <option value='<?php include './functions/config_categories.php';echo$category6_number ?>'>
          <?php include './functions/config_categories.php';echo$category6_name ?>
          </option>
          <option value='<?php include './functions/config_categories.php';echo$category7_number ?>'>
          <?php include './functions/config_categories.php';echo$category7_name ?>
          </option>
          <option value='<?php include './functions/config_categories.php';echo$category8_number ?>'>
          <?php include './functions/config_categories.php';echo$category8_name ?>
          </option>
          <option value='<?php include './functions/config_categories.php';echo$category9_number ?>'>
          <?php include './functions/config_categories.php';echo$category9_name ?>
          </option>
          <option value='<?php include './functions/config_categories.php';echo$category10_number ?>'>
          <?php include './functions/config_categories.php';echo$category10_name ?>
          </option>
        </select>
        <input type="text" name="subcategory" class='book_update_field' placeholder="Subcategory-10 Char Max" maxlength="10">
        <select name='favorite' class='book_update_field'>
          <option value=' ' disabled selected>Favorite</option>
          <option value='yes'>yes</option>
          <option value='no'>no</option>
        </select>
      </form>
    </div>
    </div>
    <?php
include 'source_db.php';
include 'config_categories.php';
        $mysqli = new mysqli( "localhost", $username, $password, $dbname );
        $query_book = "SELECT * FROM bookmark WHERE status = 'enabled' ORDER BY title";
        if ( $result = $mysqli->query( $query_book ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favorite = $row[ "favorite" ];
echo "<hr class='book_hr'/>";
echo "<div class='book_update_field_box'><form action='../functions/edit_book.php' method='post' target='message_frame' id='book_edit_form'>";
echo "<input type='submit' name='submit' class='far fa-save button_add_update' value='' title='Save Changes'>";
echo "<input type='text' name='title' class='book_update_field' placeholder='Name-20 Char Max' maxlength='20' value='$title'>";
echo "<input type='hidden' name='id' value='$id'>";
echo "<input type='ur' name='url' class='book_update_field' placeholder='Full URL'value='$url'>";
echo "<input type='text' name='fonta' class='book_update_field' placeholder='Font Awesome Icon' value='$fonta'>";
echo "<select name='category' class='book_update_field'>";
echo "<option value='$category' selected></option>";
echo "<option value='$category1_number'>$category1_name</option>";
echo "<option value='$category2_number'>$category2_name</option>";
echo "<option value='$category3_number'>$category3_name</option>";
echo "<option value='$category4_number'>$category4_name</option>";
echo "<option value='$category5_number'>$category5_name</option>";
echo "<option value='$category6_number'>$category6_name</option>";
echo "<option value='$category7_number'>$category7_name</option>";
echo "<option value='$category8_number'>$category8_name</option>";
echo "<option value='$category9_number'>$category9_name</option>";
echo "<option value='$category10_number'>$category10_name</option>";
echo "</select>";
echo "<input type='text' name='subcategory' class='book_update_field' placeholder='Subcategory-10 Char Max' maxlength='10' value='$subcategory'>";
echo "<select name='favorite' class='book_update_field'>";
echo "<option value='$favorite' selected>$favorite</option>";
echo "<option value='yes'>yes</option>";
echo "<option value='no'>no</option>";
echo "</select>";
echo "<div class='remove book_remove_button'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
echo "</form></div>";
        }
          $result->free();
        }
?>
  </div>
  <br/>
  <div>
</form>
  </div>
</div>
