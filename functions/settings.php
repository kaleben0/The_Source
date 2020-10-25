<div class="container" id="settings_section">
<div class="settings_center">
<?php
include './functions/settings_general.php';
?>
<br/>
<?php
include './functions/settings_weather.php';
?>
<br/>
<?php
include './functions/settings_messages.php';
?>
<br/>
<?php
include './functions/settings_media.php';
?>
<br/>
<?php
include './functions/css_editor.php';
?>
<br/>
<?php
include './functions/settings_categories.php';
?>
<br/>
<?php
include './functions/settings_frames.php';
?>
<br/>
<?php
include './functions/settings_search.php';
?>
<br/>
<div class="section_label" onclick="$('#set_cat').toggle();">Categories</div>
<div class="settings_box" id="set_cat">
<div class="settings_categories">
<div id="category_box">
<?php
include './functions/categories.php';
?>
</div>
</div>
</div>
<br/>
<div class="section_label" onclick="$('#set_feat').toggle();">Features</div>
<div class="settings_box" id="set_feat">
<div class="settings_features" >
<div id="features_box">
<?php
include './functions/features.php';
?>
</div>
</div>
</div>
<br/>
<div class="section_label" onclick="$('#set_pdsearch').toggle();">Google Searches</div>
<div class="settings_box" id="set_pdsearch">
<div class="settings_search_features settings_search_container" >
<div id="search_box">
<?php
include './functions/search_features.php';
?>
</div>
</div>
</div>
</div>

</div>
</div>
