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
              <option value='design'>design</option>
              <option value='environmental'>environmental</option>
              <option value='finance'>finance</option>
              <option value='game'>game</option>
              <option value='media'>media</option>
              <option value='medical'>medical</option>
              <option value='network'>network</option>
              <option value='productivity'>productivity</option>
              <option value='web'>web</option>
            </select><br/>
          <input type="text" name="subcategory" class="book_fields" placeholder="Subcategory (10 Char Max)" maxlength="10"><br/>
          <div class="favorite_box"><input type="checkbox" name="favorite" value="favorite" checked> Favorite</div>
          <input type="submit" name="submit" class="far fa-save button_add" value="" title="Save Changes">
            </div>
      <br/>
    <div>
    <table class='info_table'>
      <tbody>
        <tr>
          <th>Catergories</th>
          <th>Font Awesome Icons <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">These are just suggestions. You can you use any Font Awesome Icon</span></div></th>
        </tr>
        <tr>
          <td>design</td>
          <td>far fa-object-group</td>
        </tr>
        <tr>
          <td>environmental</td>
          <td>fas fa-cloud-sun</td>
        </tr>
        <tr>
          <td>finance</td>
          <td>fas fa-file-invoice-dollar</td>
        </tr>
        <tr>
          <td>game</td>
          <td>fas fa-gamepad</td>
        </tr>
        <tr>
          <td>media</td>
          <td>fas fa-photo-video</td>
        </tr>
        <tr>
          <td>medical</td>
          <td>far fa-hospital</td>
        </tr>
        <tr>
          <td>network</td>
          <td>fas fa-network-wired</td>
        </tr>
        <tr>
          <td>productivity</td>
          <td>far fa-address-card</td>
        </tr>
        <tr>
          <td>web</td>
          <td>fas fa-globe</td>
        </tr>
      </tbody>
    </table>
  </form>
</div>
</div>
