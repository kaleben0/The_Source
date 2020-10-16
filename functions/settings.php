<div class="container" id="settings_section">
  <div class="settings_center">
<div class="settings_box">
<?php
include './functions/settings_general.php';
?>
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
<?php
include './functions/settings_media.php';
?>
<br/>
<div class="settings_box">
<?php
include './functions/settings_frames.php';
?>
<br/>
<div class="section_label">Custom Search</div>
<hr/>
<div class="settings_custom_search" >
  <?php
include './functions/settings_search.php';
?>
</div>
<div class="section_label">Categories</div>
<hr/>
<div class="settings_categories">
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
<div class="section_label">Pre-defined Searchs</div>
<hr/>
<div class="settings_search_features settings_search_container" >
  <?php
include './functions/search_features.php';
?>
</div>
<br/>
</div>
</div>
</div>
