<div class="category_block"  id="directory_section">
<div class="directory_bar">
<i class="fas fa-list fa-1x mybutton editor" title="List View" id="list_toggle"></i>
<i class="far fa-edit fa-1x mybutton editor" onclick="toggle_edit_book();" title="Edit Bookmarks" id="bookmark_update"></i>
<i class="far fa-bookmark fa-1x mybutton editor" onclick="toggle_book();" title="Add Bookmark" id="bookmark_add"></i>
<i class="far fa-trash-alt fa-1x mybutton editor" onclick="delete_edit();" title="Delete" id="bookmark_delete"></i>
<i class="far fa-star fa-1x mybutton editor" onclick="favorite_edit();" title="Favorite" id="bookmark_favorite"></i>
</div>
<br/>
<?php
include 'directory_box.php';
?>
</div>
