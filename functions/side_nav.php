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
<li class="header_menu" title="Design" onclick="toggledesign();" id="design_toggle" ><i class="far fa-object-group icons3"></i>
  <div class="nav_label">Design</div>
</li>
<li class="header_menu" title="Environmental" onclick="toggleenvironmental();" id="enviro_toggle" ><i class="fas fa-cloud-sun icons3"></i>
  <div class="nav_label">Environmental</div>
</li>
<li class="header_menu" title="Financial" onclick="togglefinance();" id="finance_toggle" ><i class="fas fa-file-invoice-dollar  icons3"></i>
  <div class="nav_label">Finance</div>
</li>
<li class="header_menu" title="Games" onclick="togglegame();" id="game_toggle" ><i class="fas fa-gamepad icons3"></i>
  <div class="nav_label">Games</div>
</li>
<li class="header_menu" title="Media" onclick="togglemedia();" id="media_toggle" ><i class="fas fa-photo-video icons3"></i>
  <div class="nav_label">Media</div>
</li>
<li class="header_menu" title="Medical" onclick="togglemedical();" id="medical_toggle" ><i class="far fa-hospital icons3"></i>
  <div class="nav_label">Medical</div>
</li>
<li class="header_menu" title="Network" onclick="togglenetwork()" id="network_toggle" ><i class="fas fa-network-wired  icons3"></i>
  <div class="nav_label">Network</div>
</li>
<li class="header_menu" title="Productitiy" onclick="toggleproductivity();" id="prod_toggle"><i class="far fa-address-card icons3"></i>
  <div class="nav_label">Productivity</div>
</li>
<li class="header_menu" title="Web" onclick="toggleweb();" id="web_toggle"><i class="fas fa-globe icons3"></i>
  <div class="nav_label">Web</div>
</li>
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
