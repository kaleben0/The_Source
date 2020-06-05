<div class="win_search">
  <div class="row">
    <span class="exit_search" ><i class="fas fa-window-close fa-lg"></i></span>
    <div class="search_head">Search</div>
    <div class="category_block"> </div>
    <div class="google_shell" id="mobile_google">
      <form autocomplete="off" method="get" action="https://google.com/search" target="_blank" >
        <i class="fas fa-search g_clear" id="spyglass" onclick="clear_box();"></i>
        <input required name="q" type="text" id="gsearch"  class="googlesearch" placeholder="Google"  />
      </form>
    </div>
    <div class="switches" >
      <div class="onoffswitch">
        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
        <label class="onoffswitch-label" for="myonoffswitch"> <span class="onoffswitch-inner"></span> <span class="onoffswitch-switch"></span> </label>
      </div>
      <div class="reset_button_border" onclick="clear_box();"> <i class="fas fa-sync" ></i>
        <input type="button" class="reset_button" value="Reset" />
      </div>
    </div>
    <div class="letter_head2">
      <hr class="blue-line3"/>
      <i class="fab fa-google"></i>
      <hr class="blue-line4"/>
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
      <div class="letter_head2">
        <hr class="blue-line3"/>
        <i class="fas fa-globe"></i>
        <hr class="blue-line4"/>
      </div>
      <div id="search_row"  class="search" >
        <div class="search_space" onclick="amazon();"id="amazon" >
          <div class="search_btn" title="Amazon" ><i class="fab fa-amazon"></i> </div>
          <div class="search_text">Amazon</div>
        </div>
        <div class="search_space" onclick="fontawesome();" id="awesone">
          <div class="search_btn" title="FontAwesome" ><i  class="fab fa-font-awesome-flag"></i></div>
          <div class="search_text">Awesome</div>
        </div>
        <div class="search_space" onclick="bing();" id="bing">
          <div class="search_btn" title="Bing" ><i class="fas fa-search"></i></div>
          <div class="search_text">Bing</div>
        </div>
        <div class="search_space" onclick="codepen();" id="codepen">
          <div class="search_btn" title="Codepen" ><i class="fab fa-codepen"></i> </div>
          <div class="search_text">CodePen</div>
        </div>
        <div class="search_space" onclick="duckduckgo();" id="giphy">
          <div class="search_btn" title="DuckDuckGo"><i class="fab fa-searchengin"></i></div>
          <div class="search_text">DuckDuckGo</div>
        </div>
        <div class="search_space" onclick="ebay();" id="ebay">
          <div class="search_btn" title="eBay" ><i class="fab fa-ebay"></i> </div>
          <div class="search_text">eBay</div>
        </div>
        <div class="search_space" onclick="github();" id="github">
          <div class="search_btn" title="GitHub" ><i class="fab fa-github"></i></div>
          <div class="search_text">GitHub</div>
        </div>
        <div class="search_space" onclick="giphy();" id="giphy">
          <div class="search_btn" title="Giphy" ><i class="fas fa-file-image"></i></div>
          <div class="search_text">Giphy</div>
        </div>
        <div class="search_space" onclick="hulu();" id="hulu">
          <div class="search_btn" title="Hulu" ><i class="fas fa-film"></i></div>
          <div class="search_text">Hulu</div>
        </div>
        <div class="search_space" onclick="imdb();" id="imdb">
          <div class="search_btn" title="IMDb" ><i class="fab fa-imdb"></i></div>
          <div class="search_text">IMDB</div>
        </div>
        <div class="search_space" onclick="imgur();" id="imgur">
          <div class="search_btn" title="Imgur"><i class="fas fa-arrow-alt-circle-up"></i></div>
          <div class="search_text">Imgur</div>
        </div>
        <div class="search_space" onclick="netflix();" id="netflix" >
          <div class="search_btn" title="Netflix" ><i class="fas fa-film"></i></div>
          <div class="search_text">Netflix</div>
        </div>
        <div class="search_space" onclick="stackoverflow();" id="overflow">
          <div class="search_btn"  title="Stack Overflow"><i  class="fab fa-stack-overflow"></i></div>
          <div class="search_text">Overflow</div>
        </div>
        <div class="search_space" onclick="reddit();" id="reddit">
          <div class="search_btn" title="Reddit"  ><i class="fab fa-reddit-alien"></i></div>
          <div class="search_text">Reddit</div>
        </div>
        <div class="search_space" onclick="spotify();" id="s_spotify">
          <div class="search_btn" title="Spotify" ><i class="fab fa-spotify"></i></div>
          <div class="search_text">Spotify</div>
        </div>
        <div class="search_space" onclick="steam();" id="steam">
          <div class="search_btn"  title="Steam"><i  class="fab fa-steam-symbol"></i></div>
          <div class="search_text">Steam</div>
        </div>
        <div class="search_space" onclick="versus();" id="versus">
          <div class="search_btn" title="Versus"><i class="fas fa-fist-raised"></i></div>
          <div class="search_text">Versus</div>
        </div>
        <div class="search_space" onclick="wallhaven();" id="wallhaven">
          <div class="search_btn" title="Wallhaven"><i class="far fa-file-image"></i></div>
          <div class="search_text">Wallhaven</div>
        </div>
        <div class="search_space" onclick="justwatch();" id="watch">
          <div class="search_btn" title="Just Watch" ><i class="fas fa-photo-video"></i></div>
          <div class="search_text">Watch</div>
        </div>
        <div class="search_space" onclick="wikipedia();" id="wikipedia">
          <div class="search_btn" title="Wikipedia"><i  class="fab fa-wikipedia-w"></i></div>
          <div class="search_text">Wikipedia</div>
        </div>
        <div class="search_space" onclick="wolframalpha();" id="wolfram" >
          <div class="search_btn" title="WolfRamAlpha" ><i  class="far fa-sun"></i></div>
          <div class="search_text">WolfRam</div>
        </div>
        <div class="search_space" onclick="wowhead();" id="wowhead">
          <div class="search_btn" title="WowHead"><i class="fas fa-chess-rook"></i></div>
          <div class="search_text">WowHead</div>
        </div>
      </div>
        </div>
  </div>
  </div>
