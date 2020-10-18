<div class="container" id="favorite_section">
  <div class="row">
    <div class="favorite_center">
      <?php
include './rednet/rednet_favorites.php';
?>
      <div class="favorite_head" id="design_toggle">
        <div class="fav_icon"> <i class="far fa-object-group favorite_fa"></i> Design</div>
        <div class="favorite_container" >
          <?php
      include './functions/source_db.php';
      $mysqli = new mysqli( "localhost", $username, $password, $dbname );
      $query2 = "SELECT * FROM bookmark WHERE category = 'design' AND favorite= 'yes' AND status = 'enabled' ORDER BY title";
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
      <div class="favorite_head" id="enviro_toggle">
        <div class="fav_icon"> <i class="fas fa-cloud-sun favorite_fa"></i> Environmental</div>
        <div class="favorite_container" >
          <?php
      include './functions/source_db.php';
      $mysqli = new mysqli( "localhost", $username, $password, $dbname );
      $query3 = "SELECT * FROM bookmark WHERE category = 'environmental' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
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
      <div class="favorite_head" id="finance_toggle">
        <div class="fav_icon"> <i class="fas fa-file-invoice-dollar  favorite_fa"></i> Finance</div>
        <div class="favorite_container" >
          <?php
      include './functions/source_db.php';
      $mysqli = new mysqli( "localhost", $username, $password, $dbname );
      $query4 = "SELECT * FROM bookmark WHERE category = 'finance' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
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
      <div class="favorite_head" id="game_toggle">
        <div class="fav_icon"> <i class="fas fa-gamepad favorite_fa"></i> Games</div>
        <div class="favorite_container" >
          <?php
      include './functions/source_db.php';
      $mysqli = new mysqli( "localhost", $username, $password, $dbname );
      $query5 = "SELECT * FROM bookmark WHERE category = 'game' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
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
      <div class="favorite_head" id="media_toggle">
        <div class="fav_icon"><i class="fas fa-photo-video favorite_fa"></i> Media</div>
        <div class="favorite_container" >
          <?php
      include './functions/source_db.php';
      $mysqli = new mysqli( "localhost", $username, $password, $dbname );
      $query6 = "SELECT * FROM bookmark WHERE category = 'media' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
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
      <div class="favorite_head" id="medical_toggle">
        <div class="fav_icon"><i class="far fa-hospital favorite_fa"></i> Medical</div>
        <div class="favorite_container" >
          <?php
      include './functions/source_db.php';
      $mysqli = new mysqli( "localhost", $username, $password, $dbname );
      $query7 = "SELECT * FROM bookmark WHERE category = 'medical' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
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
      <div class="favorite_head" id="network_toggle">
        <div class="fav_icon"><i class="fas fa-network-wired favorite_fa"></i> Network</div>
        <div class="favorite_container" >
          <?php
      include './functions/source_db.php';
      $mysqli = new mysqli( "localhost", $username, $password, $dbname );
      $query8 = "SELECT * FROM bookmark WHERE category = 'network' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
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
      <div class="favorite_head" id="prod_toggle">
        <div class="fav_icon"><i class="far fa-address-card favorite_fa"></i> Productivity</div>
        <div class="favorite_container" >
          <?php
      include './functions/source_db.php';
      $mysqli = new mysqli( "localhost", $username, $password, $dbname );
      $query9 = "SELECT * FROM bookmark WHERE category = 'productivity' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
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
      <div class="favorite_head" id="web_toggle">
        <div class="fav_icon"><i class="fas fa-globe favorite_fa"></i> Web</div>
        <div class="favorite_container" >
          <?php
      include './functions/source_db.php';
      $mysqli = new mysqli( "localhost", $username, $password, $dbname );
      $query10 = "SELECT * FROM bookmark WHERE category = 'web' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
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
