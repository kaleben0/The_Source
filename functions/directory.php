<div class="container" id="directory_box"> <br/>
  <br/>
  <div class="row">
    <div class="category_block"  id="directory_section">
      <div class="directory_block">
        <div class="directory_bar"><i class="far fa-edit fa-1x mybutton editor" onclick="edit_book();" title="Update All Bookmarks" id="bookmark_update"></i><i class="far fa-bookmark fa-1x mybutton editor" onclick="toggle_book();" title="Add Bookmark" id="bookmark_add"></i>  <i class="far fa-star fa-1x mybutton editor" onclick="favorite_edit();" title="Favorite" id="bookmark_favorite"></i> <i class="far fa-trash-alt fa-1x mybutton editor" onclick="delete_edit();" title="Delete" id="bookmark_delete"></i> </div>
<?php
include './functions/directory_box.php';
?>
      </div>
    </div>
  </div>
</div>
