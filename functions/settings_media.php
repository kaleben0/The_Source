<?php ?>
<div class="section_label" onclick="$('#set_med').toggle();">Media</div>
<div class="settings_box" id="set_med">
  <div class="wall_box">
    <div class="wall_head">Morning Wallpaper
      <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Recommended Dimensions: 1920x1080 or smaller <br/>
        File Types: jpg, jpeg, png, or gif only<br/>
        5am-10am</span></div>
      <span class="current"><a title="View Current Wallpaper" href="./images/background-morning.png" target="message_frame"><i class="fas fa-eye"></i>&nbsp; | &nbsp;<a title="Download Current Wallpaper" href="./images/background-morning.png" download><i class="fas fa-download"></i></a></span></div>
    <form action="./functions/upload_image_morn.php" method="post" enctype="multipart/form-data" id="morn_form" target="message_frame">
      | &nbsp;
      <input type="file" name="the_file" id="fileToUploadmorn" >
      <input type="submit" title="Upload Wallpaper" name="submit" class="fas fa-upload upload upload" value="&#xf093" >
      &nbsp;
      &nbsp;
    </form>
  </div>
  <div class="wall_box">
    <div class="wall_head">Day Wallpaper
      <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Recommended Dimensions: 1920x1080 or smaller <br/>
        File Types: jpg, jpeg, png, or gif only<br/>
        10am-5pm</span></div>
      <span class="current"><a title="View Current Wallpaper" href="./images/background-day.png" target="message_frame"><i class="fas fa-eye"></i>&nbsp; | &nbsp;<a title="Download Current Wallpaper" href="./images/background-day.png" download><i class="fas fa-download"></i></a></span></div>
    <form action="./functions/upload_image_day.php" method="post" enctype="multipart/form-data" id="day_form" target="message_frame">
      | &nbsp;
      <input type="file" name="the_file" id="fileToUploadday" >
      <input type="submit" title="Upload Wallpaper" name="submit" class="fas fa-upload upload" value="&#xf093" >
      &nbsp;
      &nbsp;
    </form>
  </div>
  <div class="wall_box">
    <div class="wall_head">Dusk Wallpaper
      <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Recommended Dimensions: 1920x1080 or smaller <br/>
        File Types: jpg, jpeg, png, or gif only<br/>
        5pm-10pm</span></div>
      <span class="current"><a title="View Current Wallpaper" href="./images/background-dusk.png" target="message_frame"><i class="fas fa-eye"></i>&nbsp; | &nbsp;<a title="Download Current Wallpaper" href="./images/background-dusk.png" download><i class="fas fa-download"></i></a></span></div>
    <form action="./functions/upload_image_dusk.php" method="post" enctype="multipart/form-data" id="dusk_form" target="message_frame">
      | &nbsp;
      <input type="file" name="the_file" id="fileToUploaddusk" >
      <input type="submit" title="Upload Wallpaper" name="submit" class="fas fa-upload upload" value="&#xf093" >
      &nbsp;
      &nbsp;
    </form>
  </div>
  <div class="wall_box">
    <div class="wall_head">Evening Wallpaper
      <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Recommended Dimensions: 1920x1080 or smaller <br/>
        File Types: jpg, jpeg, png, or gif only<br/>
        10pm-5am</span></div>
      <span class="current"><a title="View Current Wallpaper" href="./images/background-night.png" target="message_frame"><i class="fas fa-eye"></i>&nbsp; | &nbsp;<a title="Download Current Wallpaper" href="./images/background-night.png" download><i class="fas fa-download"></i></a></span></div>
    <form action="./functions/upload_image_evening.php" method="post" enctype="multipart/form-data" id="evening_form" target="message_frame">
      | &nbsp;
      <input type="file" name="the_file" id="fileToUploadevening" >
      <input type="submit" title="Upload Wallpaper" name="submit" class="fas fa-upload upload" value="&#xf093" >
      &nbsp;
      &nbsp;
    </form>
  </div>
  <div class="wall_box">
    <div class="wall_head">Mobile Wallpaper
      <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Recommended Dimensions: 500x800 <br/>
        File Types: jpg, jpeg, png, or gif only</span></div>
      <span class="current"><a title="View Current Wallpaper" href="./images/background-mobile.png" target="message_frame"><i class="fas fa-eye"></i>&nbsp; | &nbsp;<a title="Download Current Wallpaper" href="./images/background-mobile.png" download><i class="fas fa-download"></i></a></span></div>
    <form action="./functions/upload_image_mobile.php" method="post" enctype="multipart/form-data" id="mobile_form"  target="message_frame">
      | &nbsp;
      <input type="file" name="the_file" id="fileToUploadmobile" >
      <input type="submit" title="Upload Wallpaper" name="submit" class="fas fa-upload upload" value="&#xf093" >
      &nbsp;
      &nbsp;
    </form>
  </div>
  <div class="wall_box">
    <div class="wall_head">Avatar / Logo
      <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Recommended Dimensions: 40x40 <br/>
        File Types: jpg, jpeg, png, or gif only</span></div>
      <span class="current"><a title="View Current Wallpaper" href="./images/logo.png" target="message_frame"><i class="fas fa-eye"></i>&nbsp; | &nbsp;<a title="Download Current Wallpaper" href="./images/logo.png" download><i class="fas fa-download"></i></a></span></div>
    <form action="./functions/upload_image_logo.php" method="post" enctype="multipart/form-data" id="logo_form" target="message_frame" >
      | &nbsp;
      <input type="file" name="the_file" id="fileToUploadlogo"  >
      <input type="submit" title="Upload Logo" name="submit" class="fas fa-upload upload" value="&#xf093" >
      &nbsp;
      &nbsp;
    </form>
  </div>
</div>
