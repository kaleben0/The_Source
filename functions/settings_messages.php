<?php ?>
<form action="./functions/add_media.php" method="post" id="media_form" target="message_frame" >
  <div class="section_label" onclick="$('#set_mess,#save_mess').toggle();">Messages
    <input type="submit" name="submit" id="save_mess" class="far fa-save" value="&#xf0c7" title="Save Changes" onclick='update_db();'>
  </div>
  <div class="settings_box" id="set_mess">
    <div class="set_label">Morning 5am-10am</div>
    <input type="text" class="set_fields long" form="media_form" name="morning" value="<?php include './functions/config.php';echo"$morning" ?>" maxlength="20">
    <div class="set_label">Day 10am-5pm</div>
    <input type="text" class="set_fields long" form="media_form" name="day" value="<?php include './functions/config.php';echo"$day" ?>" maxlength="20">
    <div class="set_label">Dusk 5pm-10pm</div>
    <input type="text" class="set_fields long" form="media_form" name="dusk" value="<?php include './functions/config.php';echo"$dusk"?>" maxlength="20">
    <div class="set_label">Evening 10pm-5am</div>
    <input type="text" class="set_fields long" form="media_form" name="evening" value="<?php include './functions/config.php';echo"$evening" ?>" maxlength="20">
  </div>
</form>
