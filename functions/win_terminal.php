<div class="win_ssh"><span class="exit_term" ><i class="fas fa-window-close fa-lg"></i></span>
  <div class="red_head">Terminal</div>
  <iframe src="" seamless="seamless" style="border-width:0" width="1000" height="600" frameborder="0" scrolling="no" class="ssh_frame"></iframe>
</div>
<script>
function toggle_term() {
  $(".ssh_frame").attr('src','<?php include './functions/config.php';echo $shellinabox ?>')
  $(".win_ssh").toggle();
}
</script>