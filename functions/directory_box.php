<div class="directory_block">
<br/>
   <?php
        include 'source_db.php';
        include './functions/config_categories.php';
        $mysqli = new mysqli( "localhost", $username, $password, $dbname );
        $query0 = "SELECT * FROM bookmark WHERE letter = '0' OR letter = '1' OR letter = '2' OR letter = '3' OR letter = '4' OR letter = '5' OR letter = '6' OR letter = '7' OR letter = '8' OR letter = '9' AND status = 'enabled' ORDER BY title";
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

        echo "<div class='letter_title' id='numbers'>";
        echo "0-9";
        echo "</div>";


        if ( $result = $mysqli->query( $query0 ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category' >";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='a'>";
        echo "A";
        echo "</div>";


        if ( $result = $mysqli->query( $querya ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category' >";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='b'>";
        echo "B";
        echo "</div>";
        if ( $result = $mysqli->query( $queryb ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }


        echo "<div class='letter_title' id='c'>";
        echo "C";
        echo "</div>";
        if ( $result = $mysqli->query( $queryc ) ) {
          while ( $row = $result->fetch_assoc() ) {
       	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
             echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }


        echo "<div class='letter_title' id='d'>";
        echo "D";
        echo "</div>";
        if ( $result = $mysqli->query( $queryd ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='e'>";
        echo "E";
        echo "</div>";
        if ( $result = $mysqli->query( $querye ) ) {
          while ( $row = $result->fetch_assoc() ) {
       	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='f'>";
        echo "F";
        echo "</div>";
        if ( $result = $mysqli->query( $queryf ) ) {
          while ( $row = $result->fetch_assoc() ) {
        	  $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='g'>";
        echo "G";
        echo "</div>";
        if ( $result = $mysqli->query( $queryg ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='h'>";
        echo "H";
        echo "</div>";
        if ( $result = $mysqli->query( $queryh ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='i'>";
        echo "I";
        echo "</div>";
        if ( $result = $mysqli->query( $queryi ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='j'>";
        echo "J";
        echo "</div>";
        if ( $result = $mysqli->query( $queryj ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='k'>";
        echo "K";
        echo "</div>";
        if ( $result = $mysqli->query( $queryk ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='l'>";
        echo "L";
        echo "</div>";
        if ( $result = $mysqli->query( $queryl ) ) {
          while ( $row = $result->fetch_assoc() ) {
       	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='m'>";
        echo "M";
        echo "</div>";
        if ( $result = $mysqli->query( $querym ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='n'>";
        echo "N";
        echo "</div>";
        if ( $result = $mysqli->query( $queryn ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='o'>";
        echo "O";
        echo "</div>";
        if ( $result = $mysqli->query( $queryo ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='p'>";
        echo "P";
        echo "</div>";
        if ( $result = $mysqli->query( $queryp ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='q'>";
        echo "Q";
        echo "</div>";
        if ( $result = $mysqli->query( $queryq ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='r'>";
        echo "R";
        echo "</div>";
        if ( $result = $mysqli->query( $queryr ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
      	    $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
		        $favor = $row[ "favorite" ];
		        $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='s'>";
        echo "S";
        echo "</div>";
        if ( $result = $mysqli->query( $querys ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
		        $favor = $row[ "favorite" ];
		        $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='t'>";
        echo "T";
        echo "</div>";
        if ( $result = $mysqli->query( $queryt ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='u'>";
        echo "U";
        echo "</div>";
        if ( $result = $mysqli->query( $queryu ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='v'>";
        echo "V";
        echo "</div>";
        if ( $result = $mysqli->query( $queryv ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='w'>";
        echo "W";
        echo "</div>";
        if ( $result = $mysqli->query( $queryw ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='x'>";
        echo "X";
        echo "</div>";
        if ( $result = $mysqli->query( $queryx ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='y'>";
        echo "Y";
        echo "</div>";
        if ( $result = $mysqli->query( $queryy ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }

        echo "<div class='letter_title' id='z'>";
        echo "Z";
        echo "</div>";
        if ( $result = $mysqli->query( $queryz ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $subcategory = $row[ "subcategory" ];
            $title = $row[ "title" ];
	          $favor = $row[ "favorite" ];
	          $search = $title;
	          $search = strtolower($search);
	          if ($favor == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = './functions/remove_fav.php';
	            }
	            elseif ($favor == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = './functions/add_fav.php';
	            }
	          echo "<div class='bookmark_box'  id='$search' >";
            echo "<div class='category_$category'>";
            echo "<div class='favorite_icon'><a href='$change?id=$id&title=$title' target='message_frame' id='add_form'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='./functions/remove_book.php?id=$id&title=$title' target='message_frame' id='remove_form' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
            echo "<div class='url_box' data-tip='$subcategory' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='book_icon'><i class='$fonta'></i></div>";
            echo "<hr class='dir_hr' />";
            echo "<div class='tip'>$title</div>";
            echo "</div></div></div>";
          }
          $result->free();
        }


        ?>
    </div>
