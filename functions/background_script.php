<script>
$(document).ready(function () {
  var d = new Date();
  var n = d.getHours();
  if (n > 4 && n < 10)
    $("body").css("background-image", "url('../images/background-morning.png')"),
    $('#time_message').text("<?php include './functions/config.php';echo $morning ?>");
        });
    });
  else if (n > 16 && n < 22)
    $("body").css("background-image", "url('../images/background-dusk.png')"),
    $('#time_message').text("<?php include './functions/config.php';echo $dusk ?>");
        });
    });
  else if (n > 21 && n < 25)
    $("body").css("background-image", "url('../images/background-night.png')"),
    $('#time_message').text("<?php include './functions/config.php';echo $evening ?>");
        });
    });
  else if (n > 0 && n < 5)
    $("body").css("background-image", "url('../images/background-night.png')"),
    $('#time_message').text("<?php include './functions/config.php';echo $evening ?>");
        });
    });
  else
    $("body").css("background-image", "url('../images/background-day.png')"),
    $('#time_message').text("<?php include './functions/config.php';echo $day ?>");
        });
    });
});
</script>
