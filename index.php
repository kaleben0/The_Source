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
<!-- JQuery -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<!-- Tipr -->
<link rel="stylesheet" href="./plugins/tipr/tipr.css">
<script src="./plugins/tipr/tipr.min.js"></script>
<!-- CodeMirror -->
<link rel="stylesheet" href="./plugins/codemirror/lib/codemirror.css">
<link rel="stylesheet" href="./plugins/codemirror/theme/twilight.css">
<link rel="stylesheet" href="./plugins/codemirror/addon/css-hint.css">
<script type="text/javascript" src="./plugins/codemirror/lib/codemirror.js"></script>
<script type="text/javascript" src="./plugins/codemirror/mode/css/css.js"></script>
<!-- The Source -->
<link rel="stylesheet" href="./css/source.css" >
<link rel="stylesheet" href="./css/source_mobile.css" >
<script src="./js/source.js"></script>
<link rel="stylesheet" id="list_css" href="./css/list.css" disabled />
<!-- FontAwesome -->
<link rel="stylesheet" href="./css/all.css" >
<!-- Custom -->
<link rel="stylesheet" href="./css/custom.css" >
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
include './functions/settings.php';
include './functions/win_bookmark.php';
include './functions/win_password.php';
include './functions/win_shortcut.php';
include './functions/win_help.php';
include './functions/win_frames.php';
include './functions/background_script.php';
echo "<div id='css_search'>";
include './functions/search_css.php';
echo "</div>";
include './functions/font.php';
?>
</body>
</html>
