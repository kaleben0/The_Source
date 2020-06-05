<!DOCTYPE HTML >
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="theme-color" content="#2c5364" />
<meta name="mobile-web-app-capable" content="yes">
<meta name="robots" content="noindex, nofollow">
<title>The Source</title>
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link rel="stylesheet" href="./css/source.css" >
<link rel="stylesheet" href="./css/source_mobile.css" >
<link rel="stylesheet" href="./css/all.css" >
<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="tipr/tipr.css">
<script src="tipr/tipr.min.js"></script>
<script src="./js/source.js"></script>
<script>
$(document).ready(function() {
     $('.tip').tipr({
          'alt': false,
          'marginAbove': 7,
          'marginBelow': 7,
          'mode': 'below',
          'space': 70,
          'speed': 300
     });
});
</script>
</head>
<body id='page-top' onload="startTime()">
<div id="sidenav" >

<!-- Nav Bar -->
<ul class="header_block" >
<div class="nav_mini_header">
  <hr class="side_nav_hr_left"/>
  <i class="far fa-bookmark"></i>
  <hr class="side_nav_hr_right"/>
</div>
<li class="header_menu" title="Favorite" onclick="toggleadmin();"> <i class="far fa-star icons3"></i>
  <div class="nav_label">Favorite</div>
</li>
<li class="header_menu" title="Design" onclick="toggledesign();" ><i class="far fa-object-group icons3"></i>
  <div class="nav_label">Design</div>
</li>
<li class="header_menu" title="Environmental" onclick="toggleenvironmental();" ><i class="fas fa-cloud-sun icons3"></i>
  <div class="nav_label">Environmental</div>
</li>
<li class="header_menu" title="Financial" onclick="togglefinance();" ><i class="fas fa-file-invoice-dollar  icons3"></i>
  <div class="nav_label">Finance</div>
</li>
<li class="header_menu" title="Game" onclick="togglegame();" ><i class="fas fa-gamepad icons3"></i>
  <div class="nav_label">Games</div>
</li>
<li class="header_menu" title="Media" onclick="togglemedia();" ><i class="fas fa-photo-video icons3"></i>
  <div class="nav_label">Media</div>
</li>
<li class="header_menu" title="Medical" onclick="togglemedical();" ><i class="far fa-hospital icons3"></i>
  <div class="nav_label">Medical</div>
</li>
<li class="header_menu" title="Network" onclick="togglenetwork()" ><i class="fas fa-network-wired  icons3"></i>
  <div class="nav_label">Network</div>
</li>
<li class="header_menu" title="Productitiy" onclick="toggleproductivity();"><i class="far fa-address-card icons3"></i>
  <div class="nav_label">Productivity</div>
</li>
<li class="header_menu" title="Web" onclick="toggleweb();"><i class="fas fa-globe icons3"></i>
  <div class="nav_label">Web</div>
</li>
<ul class="sub_block" >
  <div class="nav_mini_header">
    <hr class="side_nav_hr_left"/>
    <i class="fas fa-tools"></i>
    <hr class="side_nav_hr_right"/>
  </div>
<!--  <li class="header_menu" title="Bookmark" onclick="toggle_book();"><i class="far fa-bookmark icons3"></i>
    <div class="nav_label">Bookmark</div>
  </li> -->
  <li class="header_menu" title="Calendar" onclick="toggle_cal();"> <i class="fas fa-calendar-alt icons3"></i>
    <div class="nav_label">Calendar</div>
  </li>
  <li class="header_menu" title="Password" onclick="toggle_pass();" ><i class="fas fa-unlock-alt icons3"></i>
    <div class="nav_label">Password</div>
  </li>
  <li class="header_menu" title="PrivateBin" onclick="toggle_bin();"> <i class="far fa-clipboard icons3"></i>
    <div class="nav_label">PrivateBin</div>
  </li>
  <li class="header_menu" title="Search" onclick="search_toggle();"> <i class="fas fa-search icons3"></i>
    <div class="nav_label">Search</div>
  </li>
  <li class="header_menu" title="Spotify" onclick="toggle_spot();"> <i class="fab fa-spotify side_icon"></i>
    <div class="nav_label">Spotify</div>
  </li>
  <li class="header_menu" title="Terminal" onclick="toggle_term();" ><i class="fas fa-terminal icons3"></i>
    <div class="nav_label">Terminal</div>
  </li>
</ul>
</div>
<div class="top_nav">
  <div class="shortcuts"><i class="fas fa-reply fa-flip-horizontal fa-lg" onclick="toggle_sc()"></i></div>
  <form autocomplete="off" method="get" action="https://google.com/search"  target="_blank" class="g_form" >
    <i class="fas fa-search g_clear" id="spyglass" onclick="clear_box2();"></i>
    <input required name="q" type="text" id="gsearch2"  class="googlesearch2" placeholder="Google"  />
  </form>
  <div class="letter_head" id="admin"><i class="far fa-star icons3"></i></div>
  <div class="letter_head" id="design">Design</div>
  <div class="letter_head" id="enviro">Environmental</div>
  <div class="letter_head" id="finance">Finance</div>
  <div class="letter_head" id="game">Games</div>
  <div class="letter_head" id="media">Media</div>
  <div class="letter_head" id="medical">Medical</div>
  <div class="letter_head" id="network">Network</div>
  <div class="letter_head" id="product">Productivity</div>
  <div class="letter_head" id="web">Web</div>
  <div class="tzone"><span id="txt"></span>&nbsp;|&nbsp<i class="fas fa-cog fa-1x" onclick="window.open('/config/settings.php','_blank')"></i>&nbsp;|&nbsp<span id="time_message">Good Morning</span>&nbsp;|&nbsp; </div>
  <img class="mini_weather" src="https://www.weatherwx.com/forecast.php?forecast=hourly&place=<?php include 'config.php';echo $city?>&state=<?php include 'config.php';echo $state?>&country=<?php include 'config.php';echo $cc?>&config=png&alt=hwitransparentwww&hwvbg=transparent" onclick="window.open('https://www.weatherwx.com/forecast.php?forecast=zandh&maxdays=13&pands=<?php include 'config.php';echo $zip?>','_blank');"> </div>
<div class="main"> </div>
<a id="up_bar" href="#page-top"><i class="fas fa-arrow-circle-up fa-lg"></i></a>
<div class="container" id="letter_row">
  <div class="row">
    <div class="letter_center">
      <div class="letters" >
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#directory_box"><i class="far fa-edit fa-sm"></i></a></div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#a">A</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#b">B</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#c">C</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#d">D</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#e">E</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#f">F</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#g">G</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#h">H</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#i">I</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#j">J</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#k">K</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#l">L</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#m">M</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#n">N</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#o">O</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#p">P</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#q">Q</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#r">R</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#s">S</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#t">T</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#u">U</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#v">V</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#w">W</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#x">X</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#y">Y</a> </div>
        <div class="letter_space"><a class="js-scroll-trigger letter_btn" onclick="directory_toggle();" href="#z">Z</a> </div>
      </div>
      <br/>
    </div>
  </div>
</div>
<div class="container" id="admin_section">
  <div class="row">
    <div class="admin_center">
        <div class="admin_head">
        <div class="admin_icon"> <i class="far fa-object-group admin_fa"></i> Design</div>
        <div class="admin_container" >
          <?php
        include 'source_db.php';
        $mysqli = new mysqli( "localhost", $username, $password, $dbname );
        $query2 = "SELECT * FROM bookmark WHERE category = 'design' AND favorite= 'yes' AND status = 'enabled' ORDER BY title";
        if ( $result = $mysqli->query( $query2 ) ) {
          while ( $row = $result->fetch_assoc() ) {
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
            echo "<div class='admin_space' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='admin_btn'  title='$title' ><i class='$fonta'></i></div>";
            echo "<div class='admin_text'>$title</div>";
            echo "</div>";
          }
          $result->free();
        }
        ?>
        </div>
      </div>
      <div class="admin_head">
        <div class="admin_icon"> <i class="fas fa-cloud-sun admin_fa"></i> Environmental</div>
        <div class="admin_container" >
          <?php
        include 'source_db.php';
        $mysqli = new mysqli( "localhost", $username, $password, $dbname );
        $query3 = "SELECT * FROM bookmark WHERE category = 'environmental' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
        if ( $result = $mysqli->query( $query3 ) ) {
          while ( $row = $result->fetch_assoc() ) {
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
            echo "<div class='admin_space' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='admin_btn'  title='$title' ><i class='$fonta'></i></div>";
            echo "<div class='admin_text'>$title</div>";
            echo "</div>";
          }
          $result->free();
        }
        ?>
        </div>
      </div>
      <div class="admin_head">
        <div class="admin_icon"> <i class="fas fa-file-invoice-dollar  admin_fa"></i> Finance</div>
        <div class="admin_container" >
          <?php
        include 'source_db.php';
        $mysqli = new mysqli( "localhost", $username, $password, $dbname );
        $query4 = "SELECT * FROM bookmark WHERE category = 'finance' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
        if ( $result = $mysqli->query( $query4 ) ) {
          while ( $row = $result->fetch_assoc() ) {
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
            echo "<div class='admin_space' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='admin_btn'  title='$title' ><i class='$fonta'></i></div>";
            echo "<div class='admin_text'>$title</div>";
            echo "</div>";
          }
          $result->free();
        }
        ?>
        </div>
      </div>
      <div class="admin_head">
        <div class="admin_icon"> <i class="fas fa-gamepad admin_fa"></i> Games</div>
        <div class="admin_container" >
          <?php
        include 'source_db.php';
        $mysqli = new mysqli( "localhost", $username, $password, $dbname );
        $query5 = "SELECT * FROM bookmark WHERE category = 'game' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
        if ( $result = $mysqli->query( $query5 ) ) {
          while ( $row = $result->fetch_assoc() ) {
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
            echo "<div class='admin_space' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='admin_btn'  title='$title' ><i class='$fonta'></i></div>";
            echo "<div class='admin_text'>$title</div>";
            echo "</div>";
          }
          $result->free();
        }
        ?>
        </div>
      </div>
      <div class="admin_head">
        <div class="admin_icon"><i class="fas fa-photo-video admin_fa"></i> Media</div>
        <div class="admin_container" >
          <?php
        include 'source_db.php';
        $mysqli = new mysqli( "localhost", $username, $password, $dbname );
        $query6 = "SELECT * FROM bookmark WHERE category = 'media' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
        if ( $result = $mysqli->query( $query6 ) ) {
          while ( $row = $result->fetch_assoc() ) {
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
            echo "<div class='admin_space' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='admin_btn'  title='$title' ><i class='$fonta'></i></div>";
            echo "<div class='admin_text'>$title</div>";
            echo "</div>";
          }
          $result->free();
        }
        ?>
        </div>
      </div>
      <div class="admin_head">
        <div class="admin_icon"><i class="far fa-hospital admin_fa"></i> Medical</div>
        <div class="admin_container" >
          <?php
        include 'source_db.php';
        $mysqli = new mysqli( "localhost", $username, $password, $dbname );
        $query7 = "SELECT * FROM bookmark WHERE category = 'medical' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
        if ( $result = $mysqli->query( $query7 ) ) {
          while ( $row = $result->fetch_assoc() ) {
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
            echo "<div class='admin_space' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='admin_btn'  title='$title' ><i class='$fonta'></i></div>";
            echo "<div class='admin_text'>$title</div>";
            echo "</div>";
          }
          $result->free();
        }
        ?>
        </div>
      </div>
      <div class="admin_head">
        <div class="admin_icon"><i class="fas fa-network-wired admin_fa"></i> Network</div>
        <div class="admin_container" >
          <?php
        include 'source_db.php';
        $mysqli = new mysqli( "localhost", $username, $password, $dbname );
        $query8 = "SELECT * FROM bookmark WHERE category = 'network' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
        if ( $result = $mysqli->query( $query8 ) ) {
          while ( $row = $result->fetch_assoc() ) {
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
            echo "<div class='admin_space' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='admin_btn'  title='$title' ><i class='$fonta'></i></div>";
            echo "<div class='admin_text'>$title</div>";
            echo "</div>";
          }
          $result->free();
        }
        ?>
        </div>
      </div>
      <div class="admin_head">
        <div class="admin_icon"><i class="far fa-address-card admin_fa"></i> Productivity</div>
        <div class="admin_container" >
          <?php
        include 'source_db.php';
        $mysqli = new mysqli( "localhost", $username, $password, $dbname );
        $query9 = "SELECT * FROM bookmark WHERE category = 'productivity' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
        if ( $result = $mysqli->query( $query9 ) ) {
          while ( $row = $result->fetch_assoc() ) {
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
            echo "<div class='admin_space' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='admin_btn'  title='$title' ><i class='$fonta'></i></div>";
            echo "<div class='admin_text'>$title</div>";
            echo "</div>";
          }
          $result->free();
        }
        ?>
        </div>
      </div>
      <div class="admin_head">
        <div class="admin_icon"><i class="fas fa-globe admin_fa"></i> Web</div>
        <div class="admin_container" >
          <?php
        include 'source_db.php';
        $mysqli = new mysqli( "localhost", $username, $password, $dbname );
        $query10 = "SELECT * FROM bookmark WHERE category = 'web' AND favorite= 'yes'  AND status = 'enabled' ORDER BY title";
        if ( $result = $mysqli->query( $query10 ) ) {
          while ( $row = $result->fetch_assoc() ) {
            $letter = $row[ "letter" ];
            $category = $row[ "category" ];
            $url = $row[ "url" ];
            $fonta = $row[ "fonta" ];
            $hashtag = $row[ "hashtag" ];
            $title = $row[ "title" ];
            echo "<div class='admin_space' onclick=\"window.open('" . $url . "','_blank')\">";
            echo "<div class='admin_btn'  title='$title' ><i class='$fonta'></i></div>";
            echo "<div class='admin_text'>$title</div>";
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
<div class="win_search">
  <div class="row">
    <span class="exit_search" ><i class="fas fa-window-close fa-lg"></i></span>
    <div class="search_head">Search</div>
    <div class="category_block"> </div>
    <div class="google_shell" id="mobile_google">
      <form autocomplete="off" method="get" action="https://google.com/search" target="_blank" >
        <i class="fas fa-search g_clear" id="spyglass" onclick="clear_box();"></i>
        <input required name="q" type="text" id="gsearch"  class="googlesearch" placeholder="Google"  />
      </form>
    </div>
    <div class="switches" >
      <div class="onoffswitch">
        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
        <label class="onoffswitch-label" for="myonoffswitch"> <span class="onoffswitch-inner"></span> <span class="onoffswitch-switch"></span> </label>
      </div>
      <div class="reset_button_border" onclick="clear_box();"> <i class="fas fa-sync" ></i>
        <input type="button" class="reset_button" value="Reset" />
      </div>
    </div>
    <div class="letter_head2">
      <hr class="blue-line3"/>
      <i class="fab fa-google"></i>
      <hr class="blue-line4"/>
    </div>
    <div class="search_center">
      <div id="search_row"  class="search" >
        <div class="search_space" onclick="calendar();">
          <div class="search_btn"  title="Google Calendar" ><i class="far fa-calendar-alt"></i></div>
          <div class="search_text">Calendar</div>
        </div>
        <div class="search_space" onclick="contact();">
          <div class="search_btn"  title="Google Contacts" ><i class="far fa-id-badge"></i></div>
          <div class="search_text">Contacts</div>
        </div>
        <div class="search_space" onclick="drive();">
          <div class="search_btn"  title="Google Drive" ><i  class="fab fa-google-drive"></i></div>
          <div class="search_text">Drive</div>
        </div>
        <div class="search_space" onclick="earth();" >
          <div class="search_btn"  title="Google Earth" ><i class="fas fa-globe-americas"></i></div>
          <div class="search_text">Earth</div>
        </div>
        <div class="search_space" onclick="keep();">
          <div class="search_btn"   title="Google Keep" ><i class="fas fa-tasks"></i></div>
          <div class="search_text">Keep</div>
        </div>
        <div class="search_space" onclick="gmail();">
          <div class="search_btn" title="Gmail" ><i class="far fa-envelope"></i></div>
          <div class="search_text">Gmail</div>
        </div>
        <div class="search_space" onclick="hangouts();">
          <div class="search_btn" title="Google Hangouts" ><i class="far fa-comment-dots"></i></div>
          <div class="search_text">Hangouts</div>
        </div>
        <div class="search_space" onclick="maps();">
          <div class="search_btn" title="Google Maps" ><i class="far fa-map"></i></div>
          <div class="search_text">Maps</div>
        </div>
        <div class="search_space" onclick="photo();">
          <div class="search_btn" title="Google Photos" ><i class="fas fa-file-image"></i></div>
          <div class="search_text">Photos</div>
        </div>
        <div class="search_space" onclick="play();">
          <div class="search_btn" title="Google Play" ><i  class="fab fa-google-play"></i></div>
          <div class="search_text">Play</div>
        </div>
        <div class="search_space" onclick="scholar();">
          <div class="search_btn" title="Google Scholar" ><i class="fas fa-graduation-cap"></i></div>
          <div class="search_text">Scholar</div>
        </div>
        <div class="search_space" onclick="google_search();">
          <div class="search_btn" title="Google Search" ><i  class="fab fa-google"></i></div>
          <div class="search_text">Search</div>
        </div>
        <div class="search_space" onclick="gtranslate();" >
          <div class="search_btn" title="Google Translate" ><i class="fas fa-language"></i></div>
          <div class="search_text">Translate</div>
        </div>
        <div class="search_space" onclick="youtube();">
          <div class="search_btn" title="Youtube" ><i class="fab fa-youtube"></i></div>
          <div class="search_text">YouTube</div>
        </div>
      </div>
      <div class="letter_head2">
        <hr class="blue-line3"/>
        <i class="fas fa-globe"></i>
        <hr class="blue-line4"/>
      </div>
      <div id="search_row"  class="search" >
        <div class="search_space" onclick="amazon();" >
          <div class="search_btn" title="Amazon" ><i class="fab fa-amazon"></i> </div>
          <div class="search_text">Amazon</div>
        </div>
        <div class="search_space" onclick="fontawesome();">
          <div class="search_btn" title="FontAwesome" ><i  class="fab fa-font-awesome-flag"></i></div>
          <div class="search_text">Awesome</div>
        </div>
        <div class="search_space" onclick="bing();">
          <div class="search_btn" title="Bing" ><i class="fas fa-search"></i></div>
          <div class="search_text">Bing</div>
        </div>
        <div class="search_space" onclick="codepen();">
          <div class="search_btn" title="Codepen" ><i class="fab fa-codepen"></i> </div>
          <div class="search_text">CodePen</div>
        </div>
        <div class="search_space" onclick="duckduckgo();">
          <div class="search_btn" title="DuckDuckGo"><i class="fab fa-searchengin"></i></div>
          <div class="search_text">DuckDuckGo</div>
        </div>
        <div class="search_space" onclick="ebay();">
          <div class="search_btn" title="eBay" ><i class="fab fa-ebay"></i> </div>
          <div class="search_text">eBay</div>
        </div>
        <div class="search_space" onclick="github();" >
          <div class="search_btn" title="GitHub" ><i class="fab fa-github"></i></div>
          <div class="search_text">GitHub</div>
        </div>
        <div class="search_space" onclick="giphy();" >
          <div class="search_btn" title="Giphy" ><i class="fas fa-file-image"></i></div>
          <div class="search_text">Giphy</div>
        </div>
        <div class="search_space" onclick="hulu();">
          <div class="search_btn" title="Hulu" ><i class="fas fa-film"></i></div>
          <div class="search_text">Hulu</div>
        </div>
        <div class="search_space" onclick="imdb();">
          <div class="search_btn" title="IMDb" ><i class="fab fa-imdb"></i></div>
          <div class="search_text">IMDB</div>
        </div>
        <div class="search_space" onclick="imgur();">
          <div class="search_btn" title="Imgur"><i class="fas fa-arrow-alt-circle-up"></i></div>
          <div class="search_text">Imgur</div>
        </div>
        <div class="search_space" onclick="netflix();" >
          <div class="search_btn" title="Netflix" ><i class="fas fa-film"></i></div>
          <div class="search_text">Netflix</div>
        </div>
        <div class="search_space" onclick="stackoverflow();">
          <div class="search_btn"  title="Stack Overflow"><i  class="fab fa-stack-overflow"></i></div>
          <div class="search_text">Overflow</div>
        </div>
        <div class="search_space" onclick="reddit();">
          <div class="search_btn" title="Reddit"  ><i class="fab fa-reddit-alien"></i></div>
          <div class="search_text">Reddit</div>
        </div>
        <div class="search_space" onclick="spotify();">
          <div class="search_btn" title="Spotify" ><i class="fab fa-spotify"></i></div>
          <div class="search_text">Spotify</div>
        </div>
        <div class="search_space" onclick="steam();">
          <div class="search_btn"  title="Steam"><i  class="fab fa-steam-symbol"></i></div>
          <div class="search_text">Steam</div>
        </div>
        <div class="search_space" onclick="versus();">
          <div class="search_btn" title="Versus"><i class="fas fa-fist-raised"></i></div>
          <div class="search_text">Versus</div>
        </div>
        <div class="search_space" onclick="wallhaven();">
          <div class="search_btn" title="Wallhaven"><i class="far fa-file-image"></i></div>
          <div class="search_text">Wallhaven</div>
        </div>
        <div class="search_space" onclick="justwatch();">
          <div class="search_btn" title="Just Watch" ><i class="fas fa-photo-video"></i></div>
          <div class="search_text">Watch</div>
        </div>
        <div class="search_space" onclick="wikipedia();">
          <div class="search_btn" title="Wikipedia"><i  class="fab fa-wikipedia-w"></i></div>
          <div class="search_text">Wikipedia</div>
        </div>
        <div class="search_space" onclick="wolframalpha();" >
          <div class="search_btn" title="WolfRamAlpha" ><i  class="far fa-sun"></i></div>
          <div class="search_text">WolfRam</div>
        </div>
        <div class="search_space" onclick="wowhead();">
          <div class="search_btn" title="WowHead"><i class="fas fa-chess-rook"></i></div>
          <div class="search_text">WowHead</div>
        </div>
      </div>
        </div>
  </div>
  </div>

<div class="container" id="directory_box">
<br/>
<br/>
  <div class="row">
    <div class="category_block"  id="directory_section">
      <div class="directory_block"  >
          <div class="directory_bar">
    <i class="far fa-bookmark fa-1x mybutton editor" onclick="toggle_book();" title="Add Bookmark" id="bookmark_add"></i>
    <i class="far fa-edit fa-1x mybutton editor" onclick="edit_book();" title="Update Bookmarks" id="bookmark_update"></i>
    <i class="far fa-star fa-1x mybutton editor" onclick="favorite_edit();" title="Favorite" id="bookmark_favorite"></i>
    <i class="far fa-trash-alt fa-1x mybutton editor" onclick="delete_edit();" title="Delete" id="bookmark_delete"></i>
    </div>
              <?php
        include 'source_db.php';
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
             echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
		        $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
		          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
	          $subcat = $row[ "favorite" ];
	          if ($subcat == 'yes'){
	            $sub_icon = 'fas fa-star fa-2x';
	            $change = 'remove_fav.php';
	            }
	            elseif ($subcat == 'no') {
	            $sub_icon = 'far fa-star fa-2x';
	            $change = 'add_fav.php';
	            }
            echo "<div class='$category'>";
            echo "<div class='favorite'><a href='$change?id=$id&title=$title'><i class='$sub_icon'></i></a></div>";
            echo "<div class='remove'><a href='remove_book.php?id=$id&title=$title' onclick=\"return confirm('Are you sure?')\"><i class='far fa-trash-alt fa-2x'></i></a></div>";
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
<div class="win_cal"><span class="add_event" onclick="window.open('https://calendar.google.com/calendar/r/eventedit','_blank');" title="Add Event"><i class="far fa-plus-square fa-lg"></i></span><span class="exit_cal" ><i class="fas fa-window-close fa-lg"></i></span>
  <div class="cal_head">Calendar</div>
  <iframe src="<?php include 'config.php';echo $google ?>" style="border-width:0" width="1000" height="650" frameborder="0" scrolling="no"></iframe>
</div>
<div class="win_pass" class="pass_gen"><span class="exit_pass" ><i class="fas fa-window-close fa-lg"></i></span>
  <div class="pass_head">Password Generator</div>
  <form name="pgenerate">
    <div class="pass_label">Password Length:&nbsp;
      <input type="text" id="thelength" name="thelength" size=3 value="10" class="pass_put pass_put2" width="20">
      <br/>
      <br/>
      <input type="text" size=18 id="pass_gen_output" name="output" class="pass_put" >
      <i class="fas fa-cogs" onClick="populateform(thelength)"></i> </div>
  </form>
</div>
<div class="win_book"><span class="update_book" onclick="edit_book();" title="Update Bookmarks"><i class="far fa-edit fa-lg"></i></span><span class="exit_book" ><i class="fas fa-window-close fa-lg"></i></span>
  <div class="book_head">Add Bookmark</div>
  <form action="add_book.php" method="post">
    <div>
          <input type="text" name="letter" class="book_fields" placeholder="First Letter"><br/>
          <input type="text" name="title" class="book_fields" placeholder="Name"><br/>
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
            </select><br/>
          <input type="ur" name="url" class="book_fields" placeholder="Full URL"><br/>
          <input type="text" name="fonta" class="book_fields" placeholder="Font Awesome"><br/>
          <input type="text" name="hashtag" class="book_fields" placeholder="#HashTag"><br/>
          <select name="favorite" class="book_fields"><br/>
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
<div class="win_ssh"><span class="exit_term" ><i class="fas fa-window-close fa-lg"></i></span>
  <div class="red_head">Terminal</div>
  <iframe src="<?php include 'config.php';echo $shellinabox ?>" seamless="seamless" style="border-width:0" width="1000" height="575" frameborder="0" scrolling="no" class="ssh_frame"></iframe>
</div>
<div class="win_bin"><span class="exit_bin" ><i class="fas fa-window-close fa-lg"></i></span>
  <div class="bin_head">PrivateBin</div>
  <iframe src="<?php include 'config.php';echo $privatebin ?>" seamless="seamless" style="border-width:0" width="1000" height="650" frameborder="0" scrolling="no" class="bin_frame"></iframe>
</div>
<div class="win_sc"><span class="exit_sc"><i class="fas fa-window-close fa-lg"></i></span>
  <div id="scwinheader" class="sc_head" >Shortcut Keys</div>
  <hr>
  <div class="sc_container">
    <div class="sc_box"><span class="sc_function">Shortcut Menu</span><span class="main_key"> Ctrl </span><i class="fas fa-plus"></i><span class="main_key"> Alt </span><i class="fas fa-plus"></i><span class="sec_key">0</span></div>
    <div class="sc_box"><span class="sc_function">Bookmark</span><span class="main_key"> Ctrl </span><i class="fas fa-plus"></i><span class="main_key"> Alt </span><i class="fas fa-plus"></i><span class="sec_key">1</span></div>
    <div class="sc_box"><span class="sc_function">Calendar</span><span class="main_key"> Ctrl </span><i class="fas fa-plus"></i><span class="main_key"> Alt </span><i class="fas fa-plus"></i><span class="sec_key">2</span></div>
    <div class="sc_box"><span class="sc_function">Password Generator</span><span class="main_key"> Ctrl </span><i class="fas fa-plus"></i><span class="main_key"> Alt </span><i class="fas fa-plus"></i><span class="sec_key">3</span> </div>
    <div class="sc_box"><span class="sc_function">PrivateBin</span><span class="main_key"> Ctrl </span><i class="fas fa-plus"></i><span class="main_key"> Alt </span><i class="fas fa-plus"></i><span class="sec_key">4</span> </div>
    <div class="sc_box"><span class="sc_function">Search</span><span class="main_key"> Ctrl </span><i class="fas fa-plus"></i><span class="main_key"> Alt </span><i class="fas fa-plus"></i><span class="sec_key">5</span> </div>
    <div class="sc_box"><span class="sc_function">Spotify</span><span class="main_key"> Ctrl </span><i class="fas fa-plus"></i><span class="main_key"> Alt </span><i class="fas fa-plus"></i><span class="sec_key">6</span> </div>
    <div class="sc_box"><span class="sc_function">Terminal</span><span class="main_key"> Ctrl </span><i class="fas fa-plus"></i><span class="main_key"> Alt </span><i class="fas fa-plus"></i><span class="sec_key">7</span></div>
  </div>
</div>
<div class="win_spot"><span class="exit_spot" ><i class="fas fa-window-close fa-lg"></i></span>
  <div class="spot_head">Spotify</div>
  <iframe class="spot_frame" src="<?php include 'config.php';echo $spot ?>" width="300" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
</div>
<script>
$(document).ready(function () {
  var d = new Date();
  var n = d.getHours();
  if (n > 4 && n < 10)
    $("body").css("background-image", "url('../images/background-morning.png')"),
    $('#time_message').text("<?php include 'config.php';echo $morning ?>"),
    $(".header_menu").mouseover(function () {
      $(this).css("color", "#b37d1a"),
        $(".header_menu").mouseout(function () {
          $(this).css("color", "#fff");
        });
    });
  else if (n > 16 && n < 22)
    $("body").css("background-image", "url('../images/background-dusk.png')"),
    $('#time_message').text("<?php include 'config.php';echo $dusk ?>"),
    $(".header_menu").mouseover(function () {
      $(this).css("color", "#873102"),
        $(".header_menu").mouseout(function () {
          $(this).css("color", "#fff");
        });
    });
  else if (n > 21 && n < 25)
    $("body").css("background-image", "url('../images/background-night.png')"),
    $('#time_message').text("<?php include 'config.php';echo $evening ?>"),
    $(".header_menu").mouseover(function () {
      $(this).css("color", "#1f5abe"),
        $(".header_menu").mouseout(function () {
          $(this).css("color", "#fff");
        });
    });
  else if (n > 0 && n < 5)
    $("body").css("background-image", "url('../images/background-night.png')"),
    $('#time_message').text("<?php include 'config.php';echo $evening ?>"),
    $(".header_menu").mouseover(function () {
      $(this).css("color", "#1f5abe"),
        $(".header_menu").mouseout(function () {
          $(this).css("color", "#fff");
        });
    });
  else
    $("body").css("background-image", "url('../images/background-day.png')"),
    $('#time_message').text("<?php include 'config.php';echo $day ?>"),
    $(".header_menu").mouseover(function () {
      $(this).css("color", "#05895e"),
        $(".header_menu").mouseout(function () {
          $(this).css("color", "#fff");
        });
    });
});
</script>

</body>
</html>
