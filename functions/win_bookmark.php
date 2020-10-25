<?php ?>
<div class="win_book"><span class="update_book" onclick="edit_book();" title="Update All Bookmarks"><i class="far fa-edit fa-lg"></i></span>
<span class="exit_book" ><i class="fas fa-window-close fa-lg"></i></span>
  <div class="book_head">Add Bookmark</div>
  <form action="./functions/add_book.php" method="post" target="_blank" id="book_add_form">
    <div>
          <input type="text" name="title" class="book_fields" placeholder="Name (20 Char Max)" maxlength="20"><br/>
          <input type="ur" name="url" class="book_fields" placeholder="Full URL"><br/>
          <input type="text" name="fonta" class="book_fields" placeholder="Font Awesome Icon"><br/>
          <select name="category" class="book_fields picker">
              <option value=' ' disabled selected>Category</option>
              <option value='<?php include './functions/config_categories.php';echo$category1_number ?>'><?php include './functions/config_categories.php';echo$category1_name ?></option>
              <option value='<?php include './functions/config_categories.php';echo$category2_number ?>'><?php include './functions/config_categories.php';echo$category2_name ?></option>
              <option value='<?php include './functions/config_categories.php';echo$category3_number ?>'><?php include './functions/config_categories.php';echo$category3_name ?></option>
              <option value='<?php include './functions/config_categories.php';echo$category4_number ?>'><?php include './functions/config_categories.php';echo$category4_name ?></option>
              <option value='<?php include './functions/config_categories.php';echo$category5_number ?>'><?php include './functions/config_categories.php';echo$category5_name ?></option>
              <option value='<?php include './functions/config_categories.php';echo$category6_number ?>'><?php include './functions/config_categories.php';echo$category6_name ?></option>
              <option value='<?php include './functions/config_categories.php';echo$category7_number ?>'><?php include './functions/config_categories.php';echo$category7_name ?></option>
              <option value='<?php include './functions/config_categories.php';echo$category8_number ?>'><?php include './functions/config_categories.php';echo$category8_name ?></option>
              <option value='<?php include './functions/config_categories.php';echo$category9_number ?>'><?php include './functions/config_categories.php';echo$category9_name ?></option>
              <option value='<?php include './functions/config_categories.php';echo$category10_number ?>'><?php include './functions/config_categories.php';echo$category10_name ?></option>
            </select><br/>
          <input type="text" name="subcategory" class="book_fields" placeholder="Subcategory (10 Char Max)" maxlength="10"><br/>
          <div class="favorite_box"><input type="checkbox" name="favorite" value="favorite" checked> Favorite</div>
          <input type="submit" name="submit" class="far fa-save button_add" value="" title="Save Changes">
            </div>
      <br/>
    <div>
  </form>
</div>
</div>
