<div class="win_book_edit">
<span class="exit_book_edit" ><i class="fas fa-window-close fa-lg"></i></span>
<?php
include 'source_db.php';
include 'config_categories.php';
echo"<div class='book_head'>Edit Bookmarks</div>";
echo"<div class='book_title_field'><div class='book_update_field table_head'>Title</div><div class='book_update_field table_head'>URL</div><div class='book_update_field table_head'>FA Icon</div><div class='book_update_field table_head'>Category</div><div class='book_update_field table_head'>Subcategory</div><div class='book_update_field table_head'>Favorite</div></div>";
echo"<div class='book_box'>";
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
	          $favor = $row[ "favorite" ];
echo "<hr class='book_hr'/>";
echo "<div class='book_update_field_box'><form action='../functions/edit_book.php' method='post' target='_blank' id='book_edit_form'>";
echo "<input type='submit' name='submit' class='far fa-save button_add_update' value='' title='Save Changes'>";
echo "<input type='text' name='title' class='book_update_field' placeholder='Name (20 Char Max)' maxlength='20' value='$title'>";
echo "<input type='hidden' name='id' value='$id'>";
echo "<input type='ur' name='url' class='book_update_field' placeholder='Full URL'value='$url'>";
echo "<input type='text' name='fonta' class='book_update_field' placeholder='Font Awesome Icon' value='$fonta'>";
echo "<select name='category' class='book_update_field'>";
echo "<option value='' disabled selected></option>";
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
echo "<input type='text' name='subcategory' class='book_update_field' placeholder='Subcategory (10 Char Max)' maxlength='10' value='$subcategory'>";
echo "<input type='text' name='favorite' class='book_update_field' placeholder='Favorite (Yes/No)' maxlength='10' value='$favor'>";
echo "<div class='remove book_remove_button'><a href='./functions/remove_book.php?id=$id&title=$title' target='_blank' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
echo "</form></div>";
        }
          $result->free();
        }
?>
</div>
</div>
