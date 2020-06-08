<div class="win_set"><span class="exit_set" ><i class="fas fa-window-close fa-lg"></i></span>
  <div class="set_head">Settings</div>
  <div class="set_bar"><input type="button" class="set_button" value="Main" onclick="set_main_toggle();" /><input type="button" class="set_button" value="Media" onclick="set_media_toggle();" /><input type="button" class="set_button" value="Features" onclick="set_feature_toggle();" /></div>
<div id="set_main">  
<form action="./functions/add_main.php" method="post">
<h3>Geographic</h3>
<div class="set_label">Main URL - no http:// or https://</div><input type="text" class="set_fields" name="main" value="<?php include './functions/config.php';echo$main ?>">
<br/>
<div class="set_label">Page Title</div><input type="text" class="set_fields" name="pagetitle" value="<?php include './functions/config.php';echo$pagetitle ?>">
<br/>
<div class="set_label">City  - Lowercase</div><input type="text" class="set_fields" name="city" value="<?php include './functions/config.php';echo$city ?>">
<br/>
<div class="set_label">State  - Lowercase, 2 Charater Max</div><input type="text" class="set_fields" name="state" value="<?php include './functions/config.php';echo$state ?>">
<br/>
<div class="set_label">Zip Code - Lowercase, 10 Charater Max</div><input type="text" class="set_fields" name="zip" value="<?php include './functions/config.php';echo$zip ?>">
<br/>
<div class="set_label">Country Code - Lowercase, 2 Charater Max</div><input type="text" class="set_fields" name="cc" value="<?php include './functions/config.php';echo$cc ?>">
<hr/>
<h3>Feature URLs</h3>
<div class="set_label">Spotify Playlist</div><input type="text" class="set_fields long" name="spot" value="<?php include './functions/config.php';echo$spot ?>">
<br/>
<div class="set_label">PrivateBin URL</div><input type="text" class="set_fields long" name="privatebin" value="<?php include './functions/config.php';echo$privatebin ?>">
<br/>
<div class="set_label">Shellinabox URL</div><input type="text" class="set_fields long" name="shellinabox" value="<?php include './functions/config.php';echo$shellinabox ?>">
<br/>
<div class="set_label"><a href='https://calendar.google.com/calendar/embedhelper' target="blank">Google Calendar Embed Src (800x600)</a></div><input type="text" class="set_fields long" name="google" value="<?php include './functions/config.php';echo$google ?>">
<br/>
<br/>
<input type="submit" class="mybutton" name="submit" value="Update">
</form>
</div>
<div id="set_media"> 
<form action="./functions/add_media.php" method="post">
<h3>Messages & Font</h3>
<h5>Note - No Double or Single Quotes</h5>
<div class="set_label">Morning Message</div><input type="text" class="set_fields long" name="morning" value="<?php include './functions/config.php';echo"$morning" ?>">
<br/>
<div class="set_label">Day Message</div><input type="text" class="set_fields long" name="day" value="<?php include './functions/config.php';echo"$day" ?>">
<br/>
<div class="set_label">Dusk Message</div><input type="text" class="set_fields long" name="dusk" value="<?php include './functions/config.php';echo"$dusk"?>">
<br/>
<div class="set_label">Evening Message</div><input type="text" class="set_fields long" name="evening" value="<?php include './functions/config.php';echo"$evening" ?>">
<br/>
<div class="set_label">Font Selection</div>
<select name="font" class="set_fields" class="set_fields">
              <option value=' ' disabled selected>Font</option>
              <option value='ComicNeue'>Comic Neue</option>
              <option value='OpenSans'>Open Sans</option>
              <option value='Quicksand'>Quicksand</option>
              <option value='Roboto'>Roboto</option>
              <option value='SourceSansPro'>Source Sans Pro</option>
            </select>
<br/>
<br/>
<input type="submit" class="mybutton" name="submit" value="Update">
</form>
<hr/>
<h3>Logo & Wallpapers</h3>
<div class="wall_box">
  <div class="wall_head">Logo (100x100)<span class="current"><a href="./images/logo.png" download>Current</a></span></div>
  <form action="./functions/upload_image_logo.php" method="post" enctype="multipart/form-data">
    <input type="file" name="the_file" id="fileToUploadlogo">
    &nbsp;
    <input type="submit" name="submit" value="Upload" >
  &nbsp;</form></div>
<div class="wall_box">
  <div class="wall_head">Morning Wallaper<span class="current"><a href="./images/background-morning.png" download>Current</a></span></div>
  <form action="./functions/upload_image_morn.php" method="post" enctype="multipart/form-data">
    <input type="file" name="the_file" id="fileToUploadmorn">
    &nbsp;
    <input type="submit" name="submit" value="Upload" >
  &nbsp;</form></div>
<div class="wall_box">
  <div class="wall_head">Day Wallaper<span class="current"><a href="./images/background-day.png" download>Current</a></span></div>
  <form action="./functions/upload_image_day.php" method="post" enctype="multipart/form-data">
    <input type="file" name="the_file" id="fileToUploadday">
    &nbsp;
    <input type="submit" name="submit" value="Upload" >
  &nbsp;</form></div>
<div class="wall_box">
  <div class="wall_head">Dusk Wallaper<span class="current"><a href="./images/background-dusk.png" download>Current</a></span></div>
  <form action="./functions/upload_image_dusk.php" method="post" enctype="multipart/form-data">
    <input type="file" name="the_file" id="fileToUploaddusk">
    &nbsp;
    <input type="submit" name="submit" value="Upload" >
  &nbsp;</form></div>
<div class="wall_box">
  <div class="wall_head">Evening Wallaper<span class="current"><a href="./images/background-night.png" download>Current</a></span></div>
  <form action="./functions/upload_image_evening.php" method="post" enctype="multipart/form-data">
    <input type="file" name="the_file" id="fileToUploadevening">
    &nbsp;
    <input type="submit" name="submit" value="Upload" >
  &nbsp;</form></div>
</div>
<div id="set_feature"> 
<h3>Features</h3>
<div class="feat_box">
<?php 
include './functions/features.php'; 
?>
</div>
<hr/>
<h3>Search</h3>
<div class="feat_search_box">
<?php 
include './functions/search_features.php'; 
?>
</div>

</div>
 </div>
 </div>