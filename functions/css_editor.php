
<?php
if (isset($_POST['submit'])) {
$open = fopen("./css/custom.css","w+");
$text = $_POST['update'];
fwrite($open, $text);
fclose($open);
$file = file("./css/custom.css");
echo "<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">";
echo "<div class='section_label' onclick=\"$('#set_css_custom').toggle();\">Custom CSS";
echo "<div class='tooltip'><i class='fas fa-info-circle fa-sm'></i><span class='tooltiptext'>Open page in a new tab/window to see your css changes</span></div><input type='submit' name='submit' class='far fa-save' value='&#xf0c7' title='Save Changes'></div>";
echo "<div class='settings_box' id='set_css_custom'>";
echo "<textarea Name=\"update\" class='set_fields long box' style='font-family:monospace;'>";
foreach($file as $text) {
echo $text;
}
echo "</textarea>";
echo "</form>";
echo "</div>";
}else{
$file = file("./css/custom.css");
echo "<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">";
echo "<div class='section_label' onclick=\"$('#set_css_custom').toggle();\">Custom CSS";
echo "<input type='submit' name='submit' class='far fa-save' value='&#xf0c7' title='Save Changes'></div>";
echo "<div class='settings_box' id='set_css_custom'>";
echo "<textarea Name=\"update\" class='set_fields long box' style='font-family:monospace;'>";
foreach($file as $text) {
echo $text;
}
echo "</textarea>";
echo "</form>";
echo "</div>";
}
?>
