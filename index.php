<!DOCTYPE HTML >
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="theme-color" content="#2c5364" />
<meta name="mobile-web-app-capable" content="yes">
<meta name="robots" content="noindex, nofollow">
<title><?php include './functions/config.php';echo$pagetitle?></title>
<link rel="manifest" crossorigin="use-credentials" href="./manifest.json" type="application/json">
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
<link rel="stylesheet" href="./css/source.css" >
<link rel="stylesheet" href="./css/source_mobile.css" >
<link rel="stylesheet" href="./css/all.css" >
<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="tipr/tipr.css">
<script src="tipr/tipr.min.js"></script>
<script src="./js/source.js"></script>
<script>
$(document).ready(function() {
     $('.url_box').tipr({
          'alt': false,
          'marginAbove': 7,
          'marginBelow': 7,
          'mode': 'below',
          'space': 70,
          'speed': 300
     });
});
$(document).ready(function(){
    var interval = 5000;
  setInterval(function(){
     $.get("./functions/features.php", function(data) {
        $(".feat_box").html(data)}),
     $.get("./functions/search_features.php", function(data) {
        $(".feat_search_box").html(data)}),
     $("#css_search").load('./functions/search_css.php');
     }, interval);
});
</script>
</head>
<body id='page-top' onload="startTime()">
<?php
include './functions/side_nav.php';
include './functions/top_nav.php';
include './functions/letter_bar.php';
include './functions/favorites.php';
include './functions/win_search.php';
include './functions/directory.php';
include './functions/win_bookmark.php';
include './functions/win_calendar.php';
include './functions/win_password.php';
include './functions/win_terminal.php';
include './functions/win_privatebin.php';
include './functions/win_shortcut.php';
include './functions/win_spotify.php';
include './functions/win_settings.php';
include './functions/background_script.php';
echo "<div id='css_search'>";
include './functions/search_css.php';
echo "</div>";
include './functions/font.php';
?>
</body>
</html>
