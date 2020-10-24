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
echo "<li class='header_menu' title='$category1_name' id='#$category1_name' onclick='toggle_category1();'><i class='$category1_fa'></i>";
echo "<div class='nav_label'>$category1_name</div></li>";
echo "<li class='header_menu' title='$category2_name' id='#$category2_name' onclick='toggle_category2();'><i class='$category2_fa'></i>";
echo "<div class='nav_label'>$category2_name</div></li>";
echo "<li class='header_menu' title='$category3_name' id='#$category3_name' onclick='toggle_category3();'><i class='$category3_fa'></i>";
echo "<div class='nav_label'>$category3_name</div></li>";
echo "<li class='header_menu' title='$category4_name' id='#$category4_name' onclick='toggle_category4();'><i class='$category4_fa'></i>";
echo "<div class='nav_label'>$category4_name</div></li>";
echo "<li class='header_menu' title='$category5_name' id='#$category5_name' onclick='toggle_category5();'><i class='$category5_fa'></i>";
echo "<div class='nav_label'>$category5_name</div></li>";
echo "<li class='header_menu' title='$category6_name' id='#$category6_name' onclick='toggle_category6();'><i class='$category6_fa'></i>";
echo "<div class='nav_label'>$category6_name</div></li>";
echo "<li class='header_menu' title='$category7_name' id='#$category7_name' onclick='toggle_category7();'><i class='$category7_fa'></i>";
echo "<div class='nav_label'>$category7_name</div></li>";
echo "<li class='header_menu' title='$category8_name' id='#$category8_name' onclick='toggle_category8();'><i class='$category8_fa'></i>";
echo "<div class='nav_label'>$category8_name</div></li>";
echo "<li class='header_menu' title='$category9_name' id='#$category9_name' onclick='toggle_category9();'><i class='$category9_fa'></i>";
echo "<div class='nav_label'>$category9_name</div></li>";
echo "<li class='header_menu' title='$category10_name' id='#$category10_name' onclick='toggle_category10();'><i class='$category10_fa'></i>";
echo "<div class='nav_label'>$category10_name</div></li>";
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
