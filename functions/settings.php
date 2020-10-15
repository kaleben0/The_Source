<div class="container" id="settings_section">
  <div class="settings_center">
    <form action="./functions/add_main.php" method="post" id="general_form" >
      <div class="section_label">General
        <input type="submit" name="submit" class="far fa-save" value="&#xf0c7" title="Save Changes" onclick='update_db();'>
      </div>
      <hr/>
      <div class="settings_box">
      <div class="set_label">Main URL
        <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Domain only. <br/>No http:// or https://</span></div>
      </div>
      <input type="text" class="set_fields" name="main" value="<?php include './functions/config.php';echo$main ?>">
      <div class="set_label">Page Title </div>
      <input type="text" class="set_fields" name="pagetitle" value="<?php include './functions/config.php';echo$pagetitle ?>">
      <div class="set_label">Font Selection</div>
      <select name="font" class="set_fields" class="set_fields" form="general_form">
      <option value='ComicNeue'>Comic Neue</option>
      <option value='OpenSans'>Open Sans</option>
      <option value='Quicksand' selected>Quicksand</option>
      <option value='Roboto'>Roboto</option>
      <option value='SourceSansPro'>Source Sans Pro</option>
      </select>
    </form>
  </div>
  <br/>
  <form action="./functions/add_weather.php" method="post" id="weather_form" >
    <div class="section_label">Weather
      <input type="submit" name="submit" class="far fa-save" value="&#xf0c7" title="Save Changes" onclick='update_db();'>
    </div>
    <hr/>
    <div class="settings_box">
    <div class="set_label">Weather
      <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Create a 110px widget at <a href="https://weatherwidget.io/" target="_blank" style="font-weight:bold;font-style: italic;">Weatherwidget.io</a> and paste your code here</span></div>
    </div>
    <textarea type="text" class="set_fields long box" name="weather" placeholder="Paste WeatherWidget.io Code Here"></textarea>
  </form>
</div>
<br/>
<div class="settings_box">
<form action="./functions/add_feat_url.php" method="post" id="featureurl_form">
  <div class="section_label">Feature URLs
    <input type="submit" name="submit" class="far fa-save" value="&#xf0c7" title="Save Changes" onclick='update_db();'>
  </div>
  <hr/>
  <div class="set_label">Spotify Playlist
     <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Copy your Spotify Playlist Link to the <a href="https://developer.spotify.com/documentation/widgets/generate/embed/" target="_blank" style="font-weight:bold;font-style: italic;">Spotify Developers</a> page and create an embed widget. <br/> Copy the SRC part of the widget here (without quotes)</span></div>
   </div>
   <input type="text" class="set_fields long" name="spot" value="<?php include './functions/config.php';echo$spot ?>">
   <br/>
  <div class="set_label">PrivateBin URL
    <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Add your PrivateBin URL here</span></div>
  </div>
  <input type="text" class="set_fields long" name="privatebin" value="<?php include './functions/config.php';echo$privatebin ?>">
  <br/>
  <div class="set_label">Shellinabox URL
    <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Add Shellinabox URL here</span></div>
  </div>
  <input type="text" class="set_fields long" name="shellinabox" value="<?php include './functions/config.php';echo$shellinabox ?>">
  <br/>
  <div class="set_label">Google Calendar Embed Code
    <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Add your <a href="https://support.google.com/calendar/answer/41207?hl=en" target="_blank" style="font-weight:bold;font-style: italic;">Google Calendar Embed</a> code here</span></div>
  </div>
  <input type="text" class="set_fields long" name="google" value="<?php include './functions/config.php';echo$google ?>">
  </div>
</form>
<br/>
<div class="settings_box">
  <form action="./functions/add_media.php" method="post" id="media_form" >
    <div class="section_label">Messages
      <input type="submit" name="submit" class="far fa-save" value="&#xf0c7" title="Save Changes" onclick='update_db();'>
    </div>
    <hr/>
    <div class="set_label">Morning 5am-10am</div>
    <input type="text" class="set_fields long" form="media_form" name="morning" value="<?php include './functions/config.php';echo"$morning" ?>">
    <div class="set_label">Day 10am-5pm</div>
    <input type="text" class="set_fields long" form="media_form" name="day" value="<?php include './functions/config.php';echo"$day" ?>">
    <div class="set_label">Dusk 5pm-10pm</div>
    <input type="text" class="set_fields long" form="media_form" name="dusk" value="<?php include './functions/config.php';echo"$dusk"?>">
    <div class="set_label">Evening 10pm-5am</div>
    <input type="text" class="set_fields long" form="media_form" name="evening" value="<?php include './functions/config.php';echo"$evening" ?>">
  </form>
</div>
<br/>
<div class="section_label">Media</div>
<hr/>
<div class="settings_box">
  <div class="wall_box">
    <div class="wall_head">Morning Wallpaper
      <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Recommended Dimensions: 1920x1080 or smaller <br/>
        File Types:<br/>
        jpg, jpeg, png, or gif only</span></div>
      <span class="current"><a title="View Current Wallpaper" href="./images/background-morning.png" target="_blank"><i class="fas fa-eye"></i>&nbsp; | &nbsp;<a title="Download Current Wallpaper" href="./images/background-morning.png" download><i class="fas fa-download"></i></a></span></div>
    <form action="./functions/upload_image_morn.php" method="post" enctype="multipart/form-data" id="morn_form">
      | &nbsp;
      <input type="file" name="the_file" id="fileToUploadmorn" >
      <input type="submit" title="Upload Wallpaper" name="submit" class="fas fa-upload" value="&#xf093" >
      &nbsp;
      &nbsp;
    </form>
  </div>
  <div class="wall_box">
    <div class="wall_head">Day Wallpaper
      <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Recommended Dimensions: 1920x1080 or smaller <br/>
        File Types:<br/>
        jpg, jpeg, png, or gif only</span></div>
      <span class="current"><a title="View Current Wallpaper" href="./images/background-day.png" target="_blank"><i class="fas fa-eye"></i>&nbsp; | &nbsp;<a title="Download Current Wallpaper" href="./images/background-day.png" download><i class="fas fa-download"></i></a></span></div>
    <form action="./functions/upload_image_day.php" method="post" enctype="multipart/form-data" id="day_form">
      | &nbsp;
      <input type="file" name="the_file" id="fileToUploadday" >
      <input type="submit" title="Upload Wallpaper" name="submit" class="fas fa-upload" value="&#xf093" >
      &nbsp;
      &nbsp;
    </form>
  </div>
  <div class="wall_box">
    <div class="wall_head">Dusk Wallpaper
      <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Recommended Dimensions: 1920x1080 or smaller <br/>
        File Types:<br/>
        jpg, jpeg, png, or gif only</span></div>
      <span class="current"><a title="View Current Wallpaper" href="./images/background-dusk.png" target="_blank"><i class="fas fa-eye"></i>&nbsp; | &nbsp;<a title="Download Current Wallpaper" href="./images/background-dusk.png" download><i class="fas fa-download"></i></a></span></div>
    <form action="./functions/upload_image_dusk.php" method="post" enctype="multipart/form-data" id="dusk_form">
      | &nbsp;
      <input type="file" name="the_file" id="fileToUploaddusk" >
      <input type="submit" title="Upload Wallpaper" name="submit" class="fas fa-upload" value="&#xf093" >
      &nbsp;
      &nbsp;
    </form>
  </div>
  <div class="wall_box">
    <div class="wall_head">Evening Wallpaper
      <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Recommended Dimensions: 1920x1080 or smaller <br/>
        File Types:<br/>
        jpg, jpeg, png, or gif only</span></div>
      <span class="current"><a title="View Current Wallpaper" href="./images/background-night.png" target="_blank"><i class="fas fa-eye"></i>&nbsp; | &nbsp;<a title="Download Current Wallpaper" href="./images/background-night.png" download><i class="fas fa-download"></i></a></span></div>
    <form action="./functions/upload_image_evening.php" method="post" enctype="multipart/form-data" id="evening_form">
      | &nbsp;
      <input type="file" name="the_file" id="fileToUploadevening" >
      <input type="submit" title="Upload Wallpaper" name="submit" class="fas fa-upload" value="&#xf093" >
      &nbsp;
      &nbsp;
    </form>
  </div>
  <div class="wall_box">
    <div class="wall_head">Mobile Wallpaper
      <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Recommended Dimensions: 500x800 <br/>
        File Types:<br/>
        jpg, jpeg, png, or gif only</span></div>
      <span class="current"><a title="View Current Wallpaper" href="./images/background-mobile.png" target="_blank"><i class="fas fa-eye"></i>&nbsp; | &nbsp;<a title="Download Current Wallpaper" href="./images/background-mobile.png" download><i class="fas fa-download"></i></a></span></div>
    <form action="./functions/upload_image_mobile.php" method="post" enctype="multipart/form-data" id="mobile_form" >
      | &nbsp;
      <input type="file" name="the_file" id="fileToUploadmobile" >
      <input type="submit" title="Upload Wallpaper" name="submit" class="fas fa-upload" value="&#xf093" >
      &nbsp;
      &nbsp;
    </form>
  </div>
  <div class="wall_box">
    <div class="wall_head">Logo
      <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Recommended Dimensions: 40x40 <br/>
        File Types:<br/>
        jpg, jpeg, png, or gif only</span></div>
      <span class="current"><a title="View Current Wallpaper" href="./images/logo.png" target="_blank"><i class="fas fa-eye"></i>&nbsp; | &nbsp;<a title="Download Current Wallpaper" href="./images/logo.png" download><i class="fas fa-download"></i></a></span></div>
    <form action="./functions/upload_image_logo.php" method="post" enctype="multipart/form-data" id="logo_form" >
      | &nbsp;
      <input type="file" name="the_file" id="fileToUploadlogo"  >
      <input type="submit" title="Upload Logo" name="submit" class="fas fa-upload" value="&#xf093" >
      &nbsp;
      &nbsp;
    </form>
  </div>
</div>
<br/>
<div class="section_label">Categories</div>
<hr/>
<div class="settings_categories" id="#refresh_db">
  <?php
include './functions/categories.php';
?>
</div>
<br/>
<div class="section_label">Features</div>
<hr/>
<div class="settings_features" >
  <?php
include './functions/features.php';
?>
</div>
<br/>
<div class="section_label">Search</div>
<hr/>
<div class="settings_search_features settings_search_container" >
  <?php
include './functions/search_features.php';
?>
</div>
</div>
</div>
</div>
