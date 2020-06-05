<script>
$(document).ready(function () {
  var d = new Date();
  var n = d.getHours();
  if (n > 4 && n < 10)
    $("body").css("background-image", "url('../images/background-morning.png')"),
    $('#time_message').text("<?php include './functions/config.php';echo $morning ?>"),
    $(".header_menu").mouseover(function () {
      $(this).css("color", "#b37d1a"),
        $(".header_menu").mouseout(function () {
          $(this).css("color", "#fff");
        });
    });
  else if (n > 16 && n < 22)
    $("body").css("background-image", "url('../images/background-dusk.png')"),
    $('#time_message').text("<?php include './functions/config.php';echo $dusk ?>"),
    $(".header_menu").mouseover(function () {
      $(this).css("color", "#873102"),
        $(".header_menu").mouseout(function () {
          $(this).css("color", "#fff");
        });
    });
  else if (n > 21 && n < 25)
    $("body").css("background-image", "url('../images/background-night.png')"),
    $('#time_message').text("<?php include './functions/config.php';echo $evening ?>"),
    $(".header_menu").mouseover(function () {
      $(this).css("color", "#1f5abe"),
        $(".header_menu").mouseout(function () {
          $(this).css("color", "#fff");
        });
    });
  else if (n > 0 && n < 5)
    $("body").css("background-image", "url('../images/background-night.png')"),
    $('#time_message').text("<?php include './functions/config.php';echo $evening ?>"),
    $(".header_menu").mouseover(function () {
      $(this).css("color", "#1f5abe"),
        $(".header_menu").mouseout(function () {
          $(this).css("color", "#fff");
        });
    });
  else
    $("body").css("background-image", "url('../images/background-day.png')"),
    $('#time_message').text("<?php include './functions/config.php';echo $day ?>"),
    $(".header_menu").mouseover(function () {
      $(this).css("color", "#05895e"),
        $(".header_menu").mouseout(function () {
          $(this).css("color", "#fff");
        });
    });
});
</script>