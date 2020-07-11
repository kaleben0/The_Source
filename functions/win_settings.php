<?php ?>
<div class="win_set"><span class="exit_set" ><i class="fas fa-window-close fa-lg"></i></span>
  <div class="set_head">Settings</div>
  <div class="set_bar"><input type="button" class="set_button" value="Main" onclick="set_main_toggle();" /><input type="button" class="set_button" value="Media" onclick="set_media_toggle();" /><input type="button" class="set_button" value="Features" onclick="set_feature_toggle();" /></div>
<div id="set_main">
<form action="./functions/add_main.php" method="post">
<div class="section_label">Geographic</div>
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
<div class="section_label">Feature URLs</div>
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
<form action="./functions/add_media.php" method="post" id="media_form"></form>
<br/>
<div class="set_label">Morning 5am-10am</div>
<div class="wall_head">Message</div><input type="text" class="set_fields long" form="media_form" name="morning" value="<?php include './functions/config.php';echo"$morning" ?>">
<div class="wall_box">
  <div class="wall_head">Wallpaper<span class="current"><a href="./images/background-morning.png" download>Current</a></span></div>
  <form action="./functions/upload_image_morn.php" method="post" enctype="multipart/form-data">
    <input type="file" name="the_file" id="fileToUploadmorn">
    &nbsp;
    <input type="submit" name="submit" value="Upload" >
  &nbsp;</form></div>
  <hr/>
<div class="set_label">Day 10am-5pm</div>
<div class="wall_head">Message</div><input type="text" class="set_fields long" form="media_form" name="day" value="<?php include './functions/config.php';echo"$day" ?>">
<div class="wall_box">
  <div class="wall_head">Wallpaper<span class="current"><a href="./images/background-day.png" download>Current</a></span></div>
  <form action="./functions/upload_image_day.php" method="post" enctype="multipart/form-data">
    <input type="file" name="the_file" id="fileToUploadday">
    &nbsp;
    <input type="submit" name="submit" value="Upload" >
  &nbsp;</form></div>
    <hr/>
<div class="set_label">Dusk 5pm-10pm</div>
<div class="wall_head">Message</div><input type="text" class="set_fields long" form="media_form" name="dusk" value="<?php include './functions/config.php';echo"$dusk"?>">
<div class="wall_box">
  <div class="wall_head">Wallpaper<span class="current"><a href="./images/background-dusk.png" download>Current</a></span></div>
  <form action="./functions/upload_image_dusk.php" method="post" enctype="multipart/form-data">
    <input type="file" name="the_file" id="fileToUploaddusk">
    &nbsp;
    <input type="submit" name="submit" value="Upload" >
  &nbsp;</form></div>
    <hr/>
<div class="set_label">Evening 10pm-5am</div>
<div class="wall_head">Message</div><input type="text" class="set_fields long" form="media_form" name="evening" value="<?php include './functions/config.php';echo"$evening" ?>">
<div class="wall_box">
  <div class="wall_head">Wallpaper<span class="current"><a href="./images/background-night.png" download>Current</a></span></div>
  <form action="./functions/upload_image_evening.php" method="post" enctype="multipart/form-data">
    <input type="file" name="the_file" id="fileToUploadevening">
    &nbsp;
    <input type="submit" name="submit" value="Upload" >
  &nbsp;</form></div>
    <hr/>
<div class="set_label">Font Selection</div>
<select name="font" class="set_fields" class="set_fields" form="media_form">
              <option value=' ' disabled selected>Font</option>
              <option value='ComicNeue'>Comic Neue</option>
              <option value='OpenSans'>Open Sans</option>
              <option value='Quicksand'>Quicksand</option>
              <option value='Roboto'>Roboto</option>
              <option value='SourceSansPro'>Source Sans Pro</option>
            </select>
<br/>
<br/>
<input type="submit" class="mybutton" name="submit" value="Update" form="media_form">
<hr/>
<div class="section_label">Logo & Mobile</div>
<div class="wall_box">
  <div class="wall_head">Logo<span class="current"><a href="./images/logo.png" download>Current</a></span></div>
  <form action="./functions/upload_image_logo.php" method="post" enctype="multipart/form-data">
    <input type="file" name="the_file" id="fileToUploadlogo">
    &nbsp;
    <input type="submit" name="submit" value="Upload" >
  &nbsp;</form></div>
<div class="wall_box">
  <div class="wall_head">Mobile<span class="current"><a href="./images/background-mobile.png" download>Current</a></span></div>
  <form action="./functions/upload_image_mobile.php" method="post" enctype="multipart/form-data">
    <input type="file" name="the_file" id="fileToUploadmobile">
    &nbsp;
    <input type="submit" name="submit" value="Upload" >
  &nbsp;</form></div>
</div>
<div id="set_feature">
<div class="section_label">Features</div>
<div class="feat_box">
<?php
include './functions/features.php';
?>
</div>
<hr/>
<div class="section_label">Search</div>
<div class="feat_search_box">
<?php
include './functions/search_features.php';
?>
</div>

</div>
 </div>
 </div>
