<?php ?>
<div class="win_book"><span class="update_book" onclick="edit_book();" title="Update Bookmarks"><i class="far fa-edit fa-lg"></i></span><span class="exit_book" ><i class="fas fa-window-close fa-lg"></i></span>
  <div class="book_head">Add Bookmark</div>
  <form action="./functions/add_book.php" method="post">
    <div>
      <input type="text" name="letter" class="book_fields" placeholder="First Letter">
      <br/>
      <input type="text" name="title" class="book_fields" placeholder="Name">
      <br/>
      <select name="category" class="book_fields">
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
      </select>
      <br/>
      <input type="ur" name="url" class="book_fields" placeholder="Full URL">
      <br/>
      <input type="text" name="fonta" class="book_fields" placeholder="Font Awesome">
      <br/>
      <input type="text" name="hashtag" class="book_fields" placeholder="#HashTag">
      <br/>
      <select name="favorite" class="book_fields">
        <br/>
        <option value=' ' disabled selected>Favorite</option>
        <option value='yes'>yes</option>
        <option value='no'>no</option>
      </select>
    </div>
    <br/>
    <div>
    <table class='info_table'>
      <tbody>
        <tr>
          <th>Catergories</th>
          <th><a href="https://fontawesome.com/" target="blank">Font Awesome</a></th>
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
    <br/>
    <input type="submit" class="mybutton" name="submit" value="Add">
  </form>
</div>
</div>
