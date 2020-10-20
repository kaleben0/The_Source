<?php ?>
<div class="win_search">
  <div class="row"> <span class="exit_search" ><i class="fas fa-window-close fa-lg"></i></span>
    <div class="search_head">Search </div>
    <div class="category_block"> </div>
    <div class="google_shell" id="mobile_google">
      <form autocomplete="off" method="get" action="https://google.com/search" target="_blank" >
        <i class="fas fa-search g_clear" id="spyglass" onclick="clear_box();"></i>
        <input required name="q" type="text" id="gsearch"  class="googlesearch" placeholder="Google"  />
      </form>
    </div>
    <div class="search_head_i">
      <i class="fab fa-google"></i>
    </div>
    <div class="search_center">
      <div id="search_row"  class="search"  >
        <div class="search_space" onclick="calendar();" id="cal_search">
          <div class="search_btn"  title="Google Calendar" ><i class="far fa-calendar-alt"></i></div>
          <div class="search_text">Calendar</div>
        </div>
        <div class="search_space" onclick="contact();" id="contacts">
          <div class="search_btn"  title="Google Contacts" ><i class="far fa-id-badge"></i></div>
          <div class="search_text">Contacts</div>
        </div>
        <div class="search_space" onclick="drive();" id="drive">
          <div class="search_btn"  title="Google Drive" ><i  class="fab fa-google-drive"></i></div>
          <div class="search_text">Drive</div>
        </div>
        <div class="search_space" onclick="earth();" id="drive">
          <div class="search_btn"  title="Google Earth" ><i class="fas fa-globe-americas"></i></div>
          <div class="search_text">Earth</div>
        </div>
        <div class="search_space" onclick="keep();" id="keep">
          <div class="search_btn"   title="Google Keep" ><i class="fas fa-tasks"></i></div>
          <div class="search_text">Keep</div>
        </div>
        <div class="search_space" onclick="gmail();" id="gmail">
          <div class="search_btn" title="Gmail" ><i class="far fa-envelope"></i></div>
          <div class="search_text">Gmail</div>
        </div>
        <div class="search_space" onclick="hangouts();" id="hangouts">
          <div class="search_btn" title="Google Hangouts" ><i class="far fa-comment-dots"></i></div>
          <div class="search_text">Hangouts</div>
        </div>
        <div class="search_space" onclick="maps();" id="maps">
          <div class="search_btn" title="Google Maps" ><i class="far fa-map"></i></div>
          <div class="search_text">Maps</div>
        </div>
        <div class="search_space" onclick="photo();" id="photos">
          <div class="search_btn" title="Google Photos" ><i class="fas fa-file-image"></i></div>
          <div class="search_text">Photos</div>
        </div>
        <div class="search_space" onclick="play();" id="play">
          <div class="search_btn" title="Google Play" ><i  class="fab fa-google-play"></i></div>
          <div class="search_text">Play</div>
        </div>
        <div class="search_space" onclick="scholar();" id="scholar">
          <div class="search_btn" title="Google Scholar" ><i class="fas fa-graduation-cap"></i></div>
          <div class="search_text">Scholar</div>
        </div>
        <div class="search_space" onclick="google_search();" id="g_search">
          <div class="search_btn" title="Google Search" ><i  class="fab fa-google"></i></div>
          <div class="search_text">Search</div>
        </div>
        <div class="search_space" onclick="gtranslate();" id="translate">
          <div class="search_btn" title="Google Translate" ><i class="fas fa-language"></i></div>
          <div class="search_text">Translate</div>
        </div>
        <div class="search_space" onclick="youtube();" id="youtube">
          <div class="search_btn" title="Youtube" ><i class="fab fa-youtube"></i></div>
          <div class="search_text">YouTube</div>
        </div>
      </div>
      <div class="search_head_i">
        <i class="fas fa-globe"></i>
      </div>
      <div class="search" >
     <?php
      include './functions/search_custom.php';
        ?>
      </div>
    </div>
  </div>
</div>
