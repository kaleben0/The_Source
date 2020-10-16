<div>
<form action="./functions/add_main.php" method="post" id="general_form" >
  <div class="section_label" onclick="$('#set_general').Toggle();">General
    <input type="submit" name="submit" class="far fa-save" value="&#xf0c7" title="Save Changes" onclick='update_db();'>
  </div>
  <hr/>
  <div class="settings_box" id="set_general">
  <div class="set_label">Main URL
    <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Domain only. <br/>
      No http:// or https://</span></div>
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
