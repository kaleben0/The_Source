<?php ?>
<form action="./functions/add_weather.php" method="post" id="weather_form" >
  <div class="section_label" onclick="$('#set_weather').toggle();">Weather
    <input type="submit" name="submit" class="far fa-save" value="&#xf0c7" title="Save Changes" onclick='update_db();'>
  </div>
  <div class="settings_box" id="set_weather">
  <div class="set_label">Weather
    <div class="tooltip"><i class="fas fa-info-circle fa-sm"></i><span class="tooltiptext">Create a 110px widget at <a href="https://weatherwidget.io/" target="_blank" style="font-weight:bold;font-style: italic;">Weatherwidget.io</a> and paste your code here</span></div>
  </div>
  <textarea type="text" class="set_fields long box" name="weather" placeholder="Paste WeatherWidget.io Code Here"></textarea>
</form>
</div>
