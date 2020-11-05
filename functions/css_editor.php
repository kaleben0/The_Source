<?php
if (isset($_POST['submit'])) {
$open = fopen("./css/custom.css","w+");
$text = $_POST['update'];
fwrite($open, $text);
fclose($open);
$file = file("/css/custom.css");
echo "<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">";
echo "<div class='section_label' onclick=\"$('#set_css_custom, #save_css_custom').toggle();\">Custom CSS";
echo "<input type='submit' name='submit' id='save_css_custom' class='far fa-save button_save' value='&#xf0c7' title='Save Changes'></div>";
echo "<div class='settings_box' id='set_css_custom'>";
echo "<textarea Name=\"update\" class='set_fields long box' id='editor' style='font-family:monospace;'>";
foreach($file as $text) {
echo $text;
}
echo "</textarea>";
echo "</form>";
echo "</div>";
}else{
$file = file("./css/custom.css");
echo "<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">";
echo "<div class='section_label' onclick=\"$('#set_css_custom, #save_css_custom').toggle();\">Custom CSS";
echo "<input type='submit' name='submit' id='save_css_custom' class='far fa-save button_save' value='&#xf0c7' title='Save Changes'></div>";
echo "<div class='settings_box' id='set_css_custom'>";
echo "<textarea Name=\"update\" class='set_fields long box' id='editor' style='font-family:monospace;'>";
foreach($file as $text) {
echo $text;
}
echo "</textarea>";
echo "</form>";
echo "</div>";
}
?>
