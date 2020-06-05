<div class="container" id="directory_box"> <br/>
  <br/>
  <div class="row">
    <div class="category_block"  id="directory_section">
      <div class="directory_block"  >
        <div class="directory_bar"> <i class="far fa-bookmark fa-1x mybutton editor" onclick="toggle_book();" title="Add Bookmark" id="bookmark_add"></i> <i class="far fa-edit fa-1x mybutton editor" onclick="edit_book();" title="Update Bookmarks" id="bookmark_update"></i> <i class="far fa-star fa-1x mybutton editor" onclick="favorite_edit();" title="Favorite" id="bookmark_favorite"></i> <i class="far fa-trash-alt fa-1x mybutton editor" onclick="delete_edit();" title="Delete" id="bookmark_delete"></i> </div>
        <?php
        include './functions/source_db.php';
        $mysqli = new mysqli( "localhost", $username, $password, $dbname );
        $querya = "SELECT * FROM bookmark WHERE letter = 'a' AND status = 'enabled' ORDER BY title";
        $queryb = "SELECT * FROM bookmark WHERE letter = 'b' AND status = 'enabled' ORDER BY title";
        $queryc = "SELECT * FROM bookmark WHERE letter = 'c' AND status = 'enabled' ORDER BY title";
        $queryd = "SELECT * FROM bookmark WHERE letter = 'd' AND status = 'enabled' ORDER BY title";
        $querye = "SELECT * FROM bookmark WHERE letter = 'e' AND status = 'enabled' ORDER BY title";
        $queryf = "SELECT * FROM bookmark WHERE letter = 'f' AND status = 'enabled' ORDER BY title";
        $queryg = "SELECT * FROM bookmark WHERE letter = 'g' AND status = 'enabled' ORDER BY title";
        $queryh = "SELECT * FROM bookmark WHERE letter = 'h' AND status = 'enabled' ORDER BY title";
        $queryi = "SELECT * FROM bookmark WHERE letter = 'i' AND status = 'enabled' ORDER BY title";
        $queryj = "SELECT * FROM bookmark WHERE letter = 'j' AND status = 'enabled' ORDER BY title";
        $queryk = "SELECT * FROM bookmark WHERE letter = 'k' AND status = 'enabled' ORDER BY title";
        $queryl = "SELECT * FROM bookmark WHERE letter = 'l' AND status = 'enabled' ORDER BY title";
        $querym = "SELECT * FROM bookmark WHERE letter = 'm' AND status = 'enabled' ORDER BY title";
        $queryn = "SELECT * FROM bookmark WHERE letter = 'n' AND status = 'enabled' ORDER BY title";
        $queryo = "SELECT * FROM bookmark WHERE letter = 'o' AND status = 'enabled' ORDER BY title";
        $queryp = "SELECT * FROM bookmark WHERE letter = 'p' AND status = 'enabled' ORDER BY title";
        $queryq = "SELECT * FROM bookmark WHERE letter = 'q' AND status = 'enabled' ORDER BY title";
        $queryr = "SELECT * FROM bookmark WHERE letter = 'r' AND status = 'enabled' ORDER BY title";
        $querys = "SELECT * FROM bookmark WHERE letter = 's' AND status = 'enabled' ORDER BY title";
        $queryt = "SELECT * FROM bookmark WHERE letter = 't' AND status = 'enabled' ORDER BY title";
        $queryu = "SELECT * FROM bookmark WHERE letter = 'u' AND status = 'enabled' ORDER BY title";
        $queryv = "SELECT * FROM bookmark WHERE letter = 'v' AND status = 'enabled' ORDER BY title";
        $queryw = "SELECT * FROM bookmark WHERE letter = 'w' AND status = 'enabled' ORDER BY title";
        $queryx = "SELECT * FROM bookmark WHERE letter = 'x' AND status = 'enabled' ORDER BY title";
        $queryy = "SELECT * FROM bookmark WHERE letter = 'y' AND status = 'enabled' ORDER BY title";
        $queryz = "SELECT * FROM bookmark WHERE letter = 'z' AND status = 'enabled' ORDER BY title";

        
        echo "<div class='letter_title' id='a'>";
        echo "<hr class='blue-line'/>";
        echo "A";
        echo "<hr class='blue-line2'/>";
        echo "</div>";


        if ( $result = $mysqli->query( $querya ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='b'>";
        echo "<hr class='blue-line'/>";
        echo "B";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryb ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        
        echo "<div class='letter_title' id='c'>";
        echo "<hr class='blue-line'/>";
        echo "C";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryc ) ) {
          while ( $row = $result->fetch_assoc() ) {
       	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
             echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        
        echo "<div class='letter_title' id='d'>";
        echo "<hr class='blue-line'/>";
        echo "D";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryd ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='e'>";
        echo "<hr class='blue-line'/>";
        echo "E";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $querye ) ) {
          while ( $row = $result->fetch_assoc() ) {
       	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='f'>";
        echo "<hr class='blue-line'/>";
        echo "F";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryf ) ) {
          while ( $row = $result->fetch_assoc() ) {
        	  $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='g'>";
        echo "<hr class='blue-line'/>";
        echo "G";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryg ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='h'>";
        echo "<hr class='blue-line'/>";
        echo "H";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryh ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";          
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='i'>";
        echo "<hr class='blue-line'/>";
        echo "I";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryi ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='j'>";
        echo "<hr class='blue-line'/>";
        echo "J";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryj ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";            
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='k'>";
        echo "<hr class='blue-line'/>";
        echo "K";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryk ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='l'>";
        echo "<hr class='blue-line'/>";
        echo "L";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryl ) ) {
          while ( $row = $result->fetch_assoc() ) {
       	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='m'>";
        echo "<hr class='blue-line'/>";
        echo "M";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $querym ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='n'>";
        echo "<hr class='blue-line'/>";
        echo "N";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryn ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='o'>";
        echo "<hr class='blue-line'/>";
        echo "O";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryo ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='p'>";
        echo "<hr class='blue-line'/>";
        echo "P";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryp ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='q'>";
        echo "<hr class='blue-line'/>";
        echo "Q";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryq ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='r'>";
        echo "<hr class='blue-line'/>";
        echo "R";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryr ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
      	    $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
		        $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='s'>";
        echo "<hr class='blue-line'/>";
        echo "S";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $querys ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
		          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='t'>";
        echo "<hr class='blue-line'/>";
        echo "T";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryt ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='u'>";
        echo "<hr class='blue-line'/>";
        echo "U";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryu ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='v'>";
        echo "<hr class='blue-line'/>";
        echo "V";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryv ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='w'>";
        echo "<hr class='blue-line'/>";
        echo "W";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryw ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='x'>";
        echo "<hr class='blue-line'/>";
        echo "X";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryx ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='y'>";
        echo "<hr class='blue-line'/>";
        echo "Y";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryy ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='z'>";
        echo "<hr class='blue-line'/>";
        echo "Z";
        echo "<hr class='blue-line2'/>";
        echo "</div>";
        if ( $result = $mysqli->query( $queryz ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];	
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];             
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr/>";
            echo "<div class='tip' data-tip='$hashtag'>$title</div>";
            echo "</div></div>";
          }
          $result->free();
        }


        ?>
      </div>
    </div>
  </div>
</div>
