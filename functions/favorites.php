<div class="container" id="favorite_section">
  <div class="row">
    <div class="favorite_center">
      <div class="favorite_head" id='<?php include './functions/config_categories.php';echo$category1_name ?>' >
        <div class="fav_icon"> <i class="<?php include './functions/config_categories.php';echo$category1_fa ?> favorite_fa"></i> <?php include './functions/config_categories.php';echo$category1_name ?></div>
        <div class="favorite_container" >
          <?php
      include './functions/source_db.php';
      $mysqli = new mysqli( "localhost", $username, $password, $dbname );
      $query2 = "SELECT * FROM bookmark WHERE category = '1' AND favorite= 'yes' AND status = 'enabled' ORDER BY title";
      if ( $result = $mysqli->query( $query2 ) ) {
        while ( $row = $result->fetch_assoc() ) {
          $letter = $row[ "letter" ];
          $category = $row[ "category" ];
          $url = $row[ "url" ];
          $fonta = $row[ "fonta" ];
          $subcategory = $row[ "subcategory" ];
          $title = $row[ "title" ];
          echo "<div class='favorite_space' onclick=\"window.open('" . $url . "','_blank')\">";
          echo "<div class='favorite_btn'  title='$title' ><i class='$fonta'></i></div>";
          echo "<div class='favorite_text'>$title</div>";
          echo "</div>";
        }
        $result->free();
      }
      ?>
        </div>
      </div>
      <div class="favorite_head" id='<?php include './functions/config_categories.php';echo$category2_name ?>' >
        <div class="fav_icon"> <i class="<?php include './functions/config_categories.php';echo$category2_fa ?> favorite_fa"></i> <?php include './functions/config_categories.php';echo$category2_name ?></div>
        <div class="favorite_container" >
          <?php
      include './functions/source_db.php';
      $mysqli = new mysqli( "localhost", $username, $password, $dbname );
      $query3 = "SELECT * FROM bookmark WHERE category = '2' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
      if ( $result = $mysqli->query( $query3 ) ) {
        while ( $row = $result->fetch_assoc() ) {
          $letter = $row[ "letter" ];
          $category = $row[ "category" ];
          $url = $row[ "url" ];
          $fonta = $row[ "fonta" ];
          $subcategory = $row[ "subcategory" ];
          $title = $row[ "title" ];
          echo "<div class='favorite_space' onclick=\"window.open('" . $url . "','_blank')\">";
          echo "<div class='favorite_btn'  title='$title' ><i class='$fonta'></i></div>";
          echo "<div class='favorite_text'>$title</div>";
          echo "</div>";
        }
        $result->free();
      }
      ?>
        </div>
      </div>
      <div class="favorite_head" id='<?php include './functions/config_categories.php';echo$category3_name ?>' >
        <div class="fav_icon"> <i class="<?php include './functions/config_categories.php';echo$category3_fa ?> favorite_fa"></i> <?php include './functions/config_categories.php';echo$category3_name ?></div>
        <div class="favorite_container" >
          <?php
      include './functions/source_db.php';
      $mysqli = new mysqli( "localhost", $username, $password, $dbname );
      $query4 = "SELECT * FROM bookmark WHERE category = '3' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
      if ( $result = $mysqli->query( $query4 ) ) {
        while ( $row = $result->fetch_assoc() ) {
          $letter = $row[ "letter" ];
          $category = $row[ "category" ];
          $url = $row[ "url" ];
          $fonta = $row[ "fonta" ];
          $subcategory = $row[ "subcategory" ];
          $title = $row[ "title" ];
          echo "<div class='favorite_space' onclick=\"window.open('" . $url . "','_blank')\">";
          echo "<div class='favorite_btn'  title='$title' ><i class='$fonta'></i></div>";
          echo "<div class='favorite_text'>$title</div>";
          echo "</div>";
        }
        $result->free();
      }
      ?>
        </div>
      </div>
      <div class="favorite_head" id='<?php include './functions/config_categories.php';echo$category4_name ?>'>
        <div class="fav_icon"> <i class="<?php include './functions/config_categories.php';echo$category4_fa ?> favorite_fa"></i> <?php include './functions/config_categories.php';echo$category4_name ?></div>
        <div class="favorite_container" >
          <?php
      include './functions/source_db.php';
      $mysqli = new mysqli( "localhost", $username, $password, $dbname );
      $query5 = "SELECT * FROM bookmark WHERE category = '4' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
      if ( $result = $mysqli->query( $query5 ) ) {
        while ( $row = $result->fetch_assoc() ) {
          $letter = $row[ "letter" ];
          $category = $row[ "category" ];
          $url = $row[ "url" ];
          $fonta = $row[ "fonta" ];
          $subcategory = $row[ "subcategory" ];
          $title = $row[ "title" ];
          echo "<div class='favorite_space' onclick=\"window.open('" . $url . "','_blank')\">";
          echo "<div class='favorite_btn'  title='$title' ><i class='$fonta'></i></div>";
          echo "<div class='favorite_text'>$title</div>";
          echo "</div>";
        }
        $result->free();
      }
      ?>
        </div>
      </div>
      <div class="favorite_head" id='<?php include './functions/config_categories.php';echo$category5_name ?>'>
        <div class="fav_icon"> <i class="<?php include './functions/config_categories.php';echo$category5_fa ?> favorite_fa"></i> <?php include './functions/config_categories.php';echo$category5_name ?></div>
        <div class="favorite_container" >
          <?php
      include './functions/source_db.php';
      $mysqli = new mysqli( "localhost", $username, $password, $dbname );
      $query6 = "SELECT * FROM bookmark WHERE category = '5' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
      if ( $result = $mysqli->query( $query6 ) ) {
        while ( $row = $result->fetch_assoc() ) {
          $letter = $row[ "letter" ];
          $category = $row[ "category" ];
          $url = $row[ "url" ];
          $fonta = $row[ "fonta" ];
          $subcategory = $row[ "subcategory" ];
          $title = $row[ "title" ];
          echo "<div class='favorite_space' onclick=\"window.open('" . $url . "','_blank')\">";
          echo "<div class='favorite_btn'  title='$title' ><i class='$fonta'></i></div>";
          echo "<div class='favorite_text'>$title</div>";
          echo "</div>";
        }
        $result->free();
      }
      ?>
        </div>
      </div>
      <div class="favorite_head" id='<?php include './functions/config_categories.php';echo$category6_name ?>' >
        <div class="fav_icon"> <i class="<?php include './functions/config_categories.php';echo$category6_fa ?> favorite_fa"></i> <?php include './functions/config_categories.php';echo$category6_name ?></div>
        <div class="favorite_container" >
          <?php
      include './functions/source_db.php';
      $mysqli = new mysqli( "localhost", $username, $password, $dbname );
      $query7 = "SELECT * FROM bookmark WHERE category = '6' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
      if ( $result = $mysqli->query( $query7 ) ) {
        while ( $row = $result->fetch_assoc() ) {
          $letter = $row[ "letter" ];
          $category = $row[ "category" ];
          $url = $row[ "url" ];
          $fonta = $row[ "fonta" ];
          $subcategory = $row[ "subcategory" ];
          $title = $row[ "title" ];
          echo "<div class='favorite_space' onclick=\"window.open('" . $url . "','_blank')\">";
          echo "<div class='favorite_btn'  title='$title' ><i class='$fonta'></i></div>";
          echo "<div class='favorite_text'>$title</div>";
          echo "</div>";
        }
        $result->free();
      }
      ?>
        </div>
      </div>
      <div class="favorite_head" id='<?php include './functions/config_categories.php';echo$category7_name ?>' >
        <div class="fav_icon"> <i class="<?php include './functions/config_categories.php';echo$category7_fa ?> favorite_fa"></i> <?php include './functions/config_categories.php';echo$category7_name ?></div>
        <div class="favorite_container" >
          <?php
      include './functions/source_db.php';
      $mysqli = new mysqli( "localhost", $username, $password, $dbname );
      $query8 = "SELECT * FROM bookmark WHERE category = '7' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
      if ( $result = $mysqli->query( $query8 ) ) {
        while ( $row = $result->fetch_assoc() ) {
          $letter = $row[ "letter" ];
          $category = $row[ "category" ];
          $url = $row[ "url" ];
          $fonta = $row[ "fonta" ];
          $subcategory = $row[ "subcategory" ];
          $title = $row[ "title" ];
          echo "<div class='favorite_space' onclick=\"window.open('" . $url . "','_blank')\">";
          echo "<div class='favorite_btn'  title='$title' ><i class='$fonta'></i></div>";
          echo "<div class='favorite_text'>$title</div>";
          echo "</div>";
        }
        $result->free();
      }
      ?>
        </div>
      </div>
      <div class="favorite_head" id='<?php include './functions/config_categories.php';echo$category8_name ?>'>
        <div class="fav_icon"> <i class="<?php include './functions/config_categories.php';echo$category8_fa ?> favorite_fa"></i> <?php include './functions/config_categories.php';echo$category8_name ?></div>
        <div class="favorite_container" >
          <?php
      include './functions/source_db.php';
      $mysqli = new mysqli( "localhost", $username, $password, $dbname );
      $query9 = "SELECT * FROM bookmark WHERE category = '8' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
      if ( $result = $mysqli->query( $query9 ) ) {
        while ( $row = $result->fetch_assoc() ) {
          $letter = $row[ "letter" ];
          $category = $row[ "category" ];
          $url = $row[ "url" ];
          $fonta = $row[ "fonta" ];
          $subcategory = $row[ "subcategory" ];
          $title = $row[ "title" ];
          echo "<div class='favorite_space' onclick=\"window.open('" . $url . "','_blank')\">";
          echo "<div class='favorite_btn'  title='$title' ><i class='$fonta'></i></div>";
          echo "<div class='favorite_text'>$title</div>";
          echo "</div>";
        }
        $result->free();
      }
      ?>
        </div>
      </div>
      <div class="favorite_head" id='<?php include './functions/config_categories.php';echo$category9_name ?>'>
        <div class="fav_icon"> <i class="<?php include './functions/config_categories.php';echo$category9_fa ?> favorite_fa"></i> <?php include './functions/config_categories.php';echo$category9_name ?></div>
        <div class="favorite_container" >
          <?php
      include './functions/source_db.php';
      $mysqli = new mysqli( "localhost", $username, $password, $dbname );
      $query10 = "SELECT * FROM bookmark WHERE category = '9' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
      if ( $result = $mysqli->query( $query10 ) ) {
        while ( $row = $result->fetch_assoc() ) {
          $letter = $row[ "letter" ];
          $category = $row[ "category" ];
          $url = $row[ "url" ];
          $fonta = $row[ "fonta" ];
          $subcategory = $row[ "subcategory" ];
          $title = $row[ "title" ];
          echo "<div class='favorite_space' onclick=\"window.open('" . $url . "','_blank')\">";
          echo "<div class='favorite_btn'  title='$title' ><i class='$fonta'></i></div>";
          echo "<div class='favorite_text'>$title</div>";
          echo "</div>";
        }
        $result->free();
      }
      ?>
    </div>
  </div>
  <div class="favorite_head" id='<?php include './functions/config_categories.php';echo$category10_name ?>'>
        <div class="fav_icon"> <i class="<?php include './functions/config_categories.php';echo$category10_fa ?> favorite_fa"></i> <?php include './functions/config_categories.php';echo$category10_name ?></div>
    <div class="favorite_container" >
      <?php
  include './functions/source_db.php';
  $mysqli = new mysqli( "localhost", $username, $password, $dbname );
  $query10 = "SELECT * FROM bookmark WHERE category = '10' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
  if ( $result = $mysqli->query( $query10 ) ) {
    while ( $row = $result->fetch_assoc() ) {
      $letter = $row[ "letter" ];
      $category = $row[ "category" ];
      $url = $row[ "url" ];
      $fonta = $row[ "fonta" ];
      $subcategory = $row[ "subcategory" ];
      $title = $row[ "title" ];
      echo "<div class='favorite_space' onclick=\"window.open('" . $url . "','_blank')\">";
      echo "<div class='favorite_btn'  title='$title' ><i class='$fonta'></i></div>";
      echo "<div class='favorite_text'>$title</div>";
      echo "</div>";
    }
    $result->free();
  }
  ?>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
