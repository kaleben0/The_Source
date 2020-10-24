<div id="sidenav" >
<ul class="header_block" >
<div class="nav_mini_header">
  <hr class="side_nav_hr_left"/>
  <i class="far fa-bookmark"></i>
  <hr class="side_nav_hr_right"/>
</div>
<li class="header_menu" title="Favorite" onclick="togglefavorite();"> <i class="far fa-star icons3"></i>
  <div class="nav_label">Favorite</div>
</li>
<?php
include './functions/config_catergories.php';
echo "<li class='header_menu' title='$catergory1_name' id='#$catergory1_name' onclick='toggle_catergory1();'><i class='$catergory1_fa'></i>";
echo "<div class='nav_label'>$catergory1_name</div></li>";
echo "<li class='header_menu' title='$catergory2_name' id='#$catergory2_name' onclick='toggle_catergory2();'><i class='$catergory2_fa'></i>";
echo "<div class='nav_label'>$catergory2_name</div></li>";
echo "<li class='header_menu' title='$catergory3_name' id='#$catergory3_name' onclick='toggle_catergory3();'><i class='$catergory3_fa'></i>";
echo "<div class='nav_label'>$catergory3_name</div></li>";
echo "<li class='header_menu' title='$catergory4_name' id='#$catergory4_name' onclick='toggle_catergory4();'><i class='$catergory4_fa'></i>";
echo "<div class='nav_label'>$catergory4_name</div></li>";
echo "<li class='header_menu' title='$catergory5_name' id='#$catergory5_name' onclick='toggle_catergory5();'><i class='$catergory5_fa'></i>";
echo "<div class='nav_label'>$catergory5_name</div></li>";
echo "<li class='header_menu' title='$catergory6_name' id='#$catergory6_name' onclick='toggle_catergory6();'><i class='$catergory6_fa'></i>";
echo "<div class='nav_label'>$catergory6_name</div></li>";
echo "<li class='header_menu' title='$catergory7_name' id='#$catergory7_name' onclick='toggle_catergory7();'><i class='$catergory7_fa'></i>";
echo "<div class='nav_label'>$catergory7_name</div></li>";
echo "<li class='header_menu' title='$catergory8_name' id='#$catergory8_name' onclick='toggle_catergory8();'><i class='$catergory8_fa'></i>";
echo "<div class='nav_label'>$catergory8_name</div></li>";
echo "<li class='header_menu' title='$catergory9_name' id='#$catergory9_name' onclick='toggle_catergory9();'><i class='$catergory9_fa'></i>";
echo "<div class='nav_label'>$catergory9_name</div></li>";
echo "<li class='header_menu' title='$catergory10_name' id='#$catergory10_name' onclick='toggle_catergory10();'><i class='$catergory10_fa'></i>";
echo "<div class='nav_label'>$catergory10_name</div></li>";
?>
</ul>
<ul class="sub_block" >
  <div class="nav_mini_header">
    <hr class="side_nav_hr_left"/>
    <i class="fas fa-tools"></i>
    <hr class="side_nav_hr_right"/>
  </div>
  <li class="header_menu" title="Password" onclick="toggle_pass();" id="password_nav"><i class="fas fa-unlock-alt icons3"></i>
    <div class="nav_label">Password</div>
  </li>
  <li class="header_menu" title="Search" onclick="search_toggle();" id="search_nav"> <i class="fas fa-search icons3"></i>
    <div class="nav_label">Search</div>
  </li>
<?php
include './functions/config_frames.php';
echo "<li class='header_menu' title='$frame1_title' id='$frame1_title' onclick='toggle_frame1();'><i class='$frame1_icon'></i>";
echo "<div class='nav_label'>$frame1_title</div></li>";
echo "<li class='header_menu' title='$frame2_title' id='$frame2_title' onclick='toggle_frame2();'><i class='$frame2_icon'></i>";
echo "<div class='nav_label'>$frame2_title</div></li>";
echo "<li class='header_menu' title='$frame3_title' id='$frame3_title' onclick='toggle_frame3();'><i class='$frame3_icon'></i>";
echo "<div class='nav_label'>$frame3_title</div></li>";
echo "<li class='header_menu' title='$frame4_title' id='$frame4_title' onclick='toggle_frame4();'><i class='$frame4_icon'></i>";
echo "<div class='nav_label'>$frame4_title</div></li>";
echo "<li class='header_menu' title='$frame5_title' id='$frame5_title' onclick='toggle_frame5();'><i class='$frame5_icon'></i>";
echo "<div class='nav_label'>$frame5_title</div></li>";
?>
</ul>
</div>
