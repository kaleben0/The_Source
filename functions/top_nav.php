<div class="top_nav">
  <div><img src="./images/logo.png" class="logo_icon" alt="Logo" onClick="location.reload();" /></div>
  <form autocomplete="off" method="get" action="https://google.com/search"  target="_blank" class="g_form" >
    <i class="fas fa-search g_clear" id="spyglass" onclick="clear_box2();"></i>
    <input required name="q" type="text" id="gsearch2"  class="googlesearch2" placeholder="Google"  />
    <i class="fas fa-search-plus g_clear_search" id="spyglassplus" onclick="search_toggle();"></i>
  </form>
  <div class="letter_head" id="favorite"><i class="far fa-star icons3"></i></div>
  <div class="letter_head" id="design">Design</div>
  <div class="letter_head" id="enviro">Environmental</div>
  <div class="letter_head" id="finance">Finance</div>
  <div class="letter_head" id="game">Games</div>
  <div class="letter_head" id="media">Media</div>
  <div class="letter_head" id="medical">Medical</div>
  <div class="letter_head" id="network">Network</div>
  <div class="letter_head" id="product">Productivity</div>
  <div class="letter_head" id="web">Web</div>
  <div class="letter_head" id="settings">Settings</div>
  <div class="tzone"><span id="txt"></span>&nbsp;|&nbsp<i class="fas fa-cogs fa-1x" onclick="togglesettings();"></i>&nbsp;|&nbsp<i class="fas fa-user-cog" onclick="window.open('./htam-panel.php','_blank')""></i>&nbsp;|&nbsp<span id="time_message">Good Morning</span>&nbsp;|&nbsp; </div>
  <img class="mini_weather" src="<?php include './functions/config.php';echo"https://www.weatherwx.com/forecast.php?forecast=hourly&place=$city&state=$state&country=$cc&config=png&alt=hwitransparentwww&hwvbg=transparent";?>" onclick="window.open('<?php include './functions/config.php';echo"https://www.wunderground.com/weather/$cc/$state/$city";?>','_blank');"> </div>
<div class="main">
<a id="up_bar" href="#page-top"><i class="fas fa-arrow-circle-up fa-lg"></i></a>
<div class="letter_head2" id="logo_header">
  <hr class="blue-line3"/>
  <img src="./images/logo.png" class="logo_icon2" alt="logo"/>
  <hr class="blue-line4"/>
</div>
