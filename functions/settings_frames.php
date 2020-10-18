<?php ?>
<form action="./functions/add_frames.php" method="post" id="frame_form">
  <div class="section_label" onclick="$('#set_frames').toggle();">Custom Frames
    <input type="submit" name="submit" class="far fa-save" value="&#xf0c7" title="Save Changes" onclick='update_db();'>
  </div>
  <div class="settings_box" id="set_frames">
    <div class="set_label">Frame 1</div>
    <div class="frame_field">Title
      <input type="text" class="set_fields" name="frame1_title" value="<?php include './functions/config_frames.php';echo$frame1_title ?>" maxlength="15" >
    </div>
    <div class="frame_field">URL
      <input type="text" class="set_fields url" name="frame1_url" value="<?php include './functions/config_frames.php';echo$frame1_url ?>">
    </div>
    <div class="frame_field">Font Awesome Icon
      <input type="text" class="set_fields frame_icon" name="frame1_icon" value="<?php include './functions/config_frames.php';echo$frame1_icon ?>">
    </div>
    <div class="frame_field">Dimensions
      <input type="text" class="set_fields short" name="frame1_width" value="<?php include './functions/config_frames.php';echo$frame1_width ?>">
      x
      <input type="text" class="set_fields short" name="frame1_height" value="<?php include './functions/config_frames.php';echo$frame1_height ?>">
    </div>
    </br>
    <br/>
    <div class="set_label">Frame 2</div>
    <div class="frame_field">Title
      <input type="text" class="set_fields" name="frame2_title" value="<?php include './functions/config_frames.php';echo$frame2_title ?>" maxlength="15">
    </div>
    <div class="frame_field">URL
      <input type="text" class="set_fields url" name="frame2_url" value="<?php include './functions/config_frames.php';echo$frame2_url ?>">
    </div>
    <div class="frame_field">Font Awesome Icon
      <input type="text" class="set_fields frame_icon" name="frame2_icon" value="<?php include './functions/config_frames.php';echo$frame2_icon ?>">
    </div>
    <div class="frame_field">Dimensions
      <input type="text" class="set_fields short" name="frame2_width" value="<?php include './functions/config_frames.php';echo$frame2_width ?>">
      x
      <input type="text" class="set_fields short" name="frame2_height" value="<?php include './functions/config_frames.php';echo$frame2_height ?>">
    </div>
    </br>
    <br/>
    <div class="set_label">Frame 3</div>
    <div class="frame_field">Title
      <input type="text" class="set_fields" name="frame3_title" value="<?php include './functions/config_frames.php';echo$frame3_title ?>" maxlength="15">
    </div>
    <div class="frame_field">URL
      <input type="text" class="set_fields url" name="frame3_url" value="<?php include './functions/config_frames.php';echo$frame3_url ?>">
    </div>
    <div class="frame_field">Font Awesome Icon
      <input type="text" class="set_fields frame_icon" name="frame3_icon" value="<?php include './functions/config_frames.php';echo$frame3_icon ?>">
    </div>
    <div class="frame_field">Dimensions
      <input type="text" class="set_fields short" name="frame3_width" value="<?php include './functions/config_frames.php';echo$frame3_width ?>">
      x
      <input type="text" class="set_fields short" name="frame3_height" value="<?php include './functions/config_frames.php';echo$frame3_height ?>">
    </div>
    </br>
    <br/>
    <div class="set_label">Frame 4</div>
    <div class="frame_field">Title
      <input type="text" class="set_fields" name="frame4_title" value="<?php include './functions/config_frames.php';echo$frame4_title ?>" maxlength="15">
    </div>
    <div class="frame_field">URL
      <input type="text" class="set_fields url" name="frame4_url" value="<?php include './functions/config_frames.php';echo$frame4_url ?>">
    </div>
    <div class="frame_field">Font Awesome Icon
      <input type="text" class="set_fields frame_icon" name="frame4_icon" value="<?php include './functions/config_frames.php';echo$frame4_icon ?>">
    </div>
    <div class="frame_field">Dimensions
      <input type="text" class="set_fields short" name="frame4_width" value="<?php include './functions/config_frames.php';echo$frame4_width ?>">
      x
      <input type="text" class="set_fields short" name="frame4_height" value="<?php include './functions/config_frames.php';echo$frame4_height ?>">
    </div>
    </br>
    <br/>
    <div class="set_label">Frame 5</div>
    <div class="frame_field">Title
      <input type="text" class="set_fields" name="frame5_title" value="<?php include './functions/config_frames.php';echo$frame5_title ?>" maxlength="15">
    </div>
    <div class="frame_field">URL
      <input type="text" class="set_fields url" name="frame5_url" value="<?php include './functions/config_frames.php';echo$frame5_url ?>">
    </div>
    <div class="frame_field">Font Awesome Icon
      <input type="text" class="set_fields frame_icon" name="frame5_icon" value="<?php include './functions/config_frames.php';echo$frame5_icon ?>">
    </div>
    <div class="frame_field">Dimensions
      <input type="text" class="set_fields short" name="frame5_width" value="<?php include './functions/config_frames.php';echo$frame5_width ?>">
      x
      <input type="text" class="set_fields short" name="frame5_height" value="<?php include './functions/config_frames.php';echo$frame5_height ?>">
    </div>
    </br>
  </div>
</form>
