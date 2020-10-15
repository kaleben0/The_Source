// JavaScript Document

// Directory Toggle

$(document).ready(function() {
     $("#list_toggle").click(function(){
      $("#list_css").prop('disabled', function () {
          return ! $(this).prop('disabled');
});
});
});

// Database Updates

$(document).ready(function() {
    $('#general_form, #weather_form, #media_form, #frame_form, #morn_form, #day_form, #dusk_form, #evening_form, #search_feature_form, #book_add_form').submit(function() {
        window.open('', 'formpopup', 'width=400,height=300,resizeable,scrollbars');
        this.target = 'formpopup';
    });
});

$(document).ready(function() {
    $(document).on('click',  '#search_feature_form', function() {
        window.open('', 'formpopup', 'width=400,height=300,resizeable,scrollbars');
        this.target = 'formpopup';
    });
});

$(document).ready(function() {
    $(document).on('click',  '#feature_form', function() {
        window.open('', 'formpopup', 'width=400,height=300,resizeable,scrollbars');
        this.target = 'formpopup';
    });
});

$(document).ready(function() {
    $(document).on('click',  '#category_form', function() {
        window.open('', 'formpopup', 'width=400,height=300,resizeable,scrollbars');
        this.target = 'formpopup';
    });
});

$(document).ready(function() {
    $(document).on('click',  '#add_form', function() {
        window.open('', 'formpopup', 'width=400,height=300,resizeable,scrollbars');
        this.target = 'formpopup';
    });
});
$(document).ready(function() {
    $(document).on('click',  '#remove_form', function() {
        window.open('', 'formpopup', 'width=400,height=300,resizeable,scrollbars');
        this.target = 'formpopup';
    });
});



function update_db() {
     $.get("./functions/features.php", function(data) {
        $(".settings_features").html(data)}),
     $.get("./functions/search_features.php", function(data) {
        $(".settings_search_features").html(data)}),
     $.get("./functions/categories.php", function(data) {
        $(".settings_categories").html(data)}),
     $.get("./functions/features.php", function(data) {
        $(".settings_features").html(data)}),
     $.get("./functions/search_features.php", function(data) {
        $(".settings_search_features").html(data)}),
     $.get("./functions/categories.php", function(data) {
        $(".settings_categories").html(data)}),
     $.get("./functions/features.php", function(data) {
        $(".settings_features").html(data)}),
     $.get("./functions/search_features.php", function(data) {
        $(".settings_search_features").html(data)}),
     $.get("./functions/categories.php", function(data) {
        $(".settings_categories").html(data)}),
     $("#css_search").load('./functions/search_css.php');
     $("#css_search").load('./functions/search_css.php');
}
// Clear Search Boxes

$(document).ready(function(){
  var interval = 300000;
  setInterval(function(){
    $("#gsearch2, #gsearch").val('');
  }, interval);
});

// Google Searches
function google_search() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.google.com/search?q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}


function calendar() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://calendar.google.com/calendar/r/search?q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function contact() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://contacts.google.com/search/";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function drive() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://drive.google.com/drive/u/0/search?q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}


function earth() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://earth.google.com/web/search/";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function keep() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://keep.google.com/u/0/#search/text%253D";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function gmail() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://mail.google.com/mail/u/0/#search/";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function hangouts() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://mail.google.com/mail/u/0/#search/in%3Achats+";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function maps() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.google.com/maps/place/";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function music() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://play.google.com/music/listen?u=0#/sr/";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function photo() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://photos.google.com/search/";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function play() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://play.google.com/store/search?q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function scholar() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://scholar.google.com/scholar?hl=en&as_sdt=0%2C23&q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}


function gtranslate() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://translate.google.com/#auto/en/";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function youtube() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.youtube.com/results?search_query=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

// Non-Google Searches

function amazon() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function bing() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.bing.com/search?q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}


function codepen() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://codepen.io/search/pens?q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function duckduckgo() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://duckduckgo.com/?q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}


function ebay() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.ebay.com/sch/i.html?_from=R40&_trksid=p2380057.m570.l1313.TR11.TRC2.A0.H0.XSTuff.TRS1&_nkw=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}


function fontawesome() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://fontawesome.com/icons?d=gallery&m=free&q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
 }

function giphy() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://giphy.com/search/";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function github() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://github.com/search?q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}


function hulu() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.hulu.com/search?q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}


function imdb() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "http://www.imdb.com/find?ref_=nv_sr_fn&q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function imgur() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://imgur.com/search?q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}


function netflix() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.netflix.com/search?q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function reddit() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.reddit.com/search?q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}


function spotify() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://open.spotify.com/search/";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function stackoverflow() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://stackoverflow.com/search?q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}


function steam() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "http://store.steampowered.com/search/?term=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}


function tumblr() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.tumblr.com/search/";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function versus() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://versusutil.com/?seed=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function wallhaven() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://wallhaven.cc/search?q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function wikipedia() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://en.wikipedia.org/wiki/";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function wolframalpha() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "http://www.wolframalpha.com/input/?i=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function wowhead() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "http://www.wowhead.com/search?q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function wowpedia() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://wow.gamepedia.com/index.php?search=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

function justwatch() {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.justwatch.com/us/search?q=";
    var boxfin = boxurl + box;
    window.open(boxfin, '_blank');
}

// Key Functions

document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "1") {
    togglefavorite();
  }
});
document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "2") {
    toggle_pass();
  }
});
document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "3") {
    search_toggle();
  }
});
document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "4") {
    togglesettings();
  }
});
document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "5") {
    toggle_frame1();
  }
});
document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "6") {
    toggle_frame2();
  }
});
document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "7") {
    toggle_frame3();
  }
});
document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "8") {
    toggle_frame4();
  }
});
document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "9") {
    toggle_frame5();
  }
});

document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "0") {
    toggle_sc();
  }
});

function edit_book() {
  window.open('./functions/db_index.php?&start=0&s=&f=&sort=id&ad=a', '_blank');
}

//Header Toggles

function togglefavorite() {
    $('#search_section,#env_section,#settings_section,#network_section,#letter_mobile,#search,#directory_section,.letter_head,#up_bar').hide();
    $('#favorite_section,.g_form,#letter_mobile,.letters,.favorite_center,#letter_row').show();
    $('#favorite').toggle();
}

function toggledesign() {
    $(".favorite, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").show(),
      $(".favorite,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").toggle();
    $('#search_section,#env_section,#settings_section,#network_section,#letter_mobile,#favorite_section,.servers,.letter_title,.letters').hide();
    $('#directory_section,.g_form').show();
    $('#design').toggle();
}

function toggleenvironmental() {
    $(".favorite, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").show(),
      $(".favorite,.design,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").toggle();
    $('#search_section,#network_section,#settings_section,#letter_mobile, #bookmark_section,#favorite_section,.servers,.letter_title,.letters').hide();
    $('#directory_section').show();
    $('#env_section,#directory_section,#enviro,.g_form').show();
}

function togglegame() {
    $(".favorite, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").show(),
      $(".favorite,.design,.finance,.environmental,.media,.medical,.network,.productivity,.web,.letter_head").toggle();
    $('#search_section,#env_section,#settings_section,#network_section,#letter_mobile,#favorite_section,.servers,.letter_title,.letters').hide();
    $('#directory_section,.g_form').show();
    $('#game').toggle();
}

function togglemedia() {
    $(".favorite, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").show(),
      $(".favorite,.design,.finance,.game,.environmental,.medical,.network,.productivity,.web,.letter_head").toggle();
    $('#search_section,#env_section,#settings_section,#network_section,#letter_mobile,#favorite_section,.servers,.letter_title,.letters').hide();
    $('#directory_section,.g_form').show();
    $('#media').toggle();
}

function togglemedical() {
    $(".favorite, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").show(),
      $(".favorite, .design,.finance,.game,.media,.environmental,.network,.productivity,.web,.letter_head").toggle();
    $('#search_section,#env_section,#settings_section,#network_section,#letter_mobile,#favorite_section,.servers,.letter_title,.letters').hide();
    $('#directory_section,.g_form').show();
    $('#medical').toggle();
}

function togglefinance() {
    $(".favorite, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").show(),
      $(".favorite, .design,.environmental,.game,.media,.medical,.network,.productivity,.web,.letter_head").toggle();
    $('#search_section,#env_section,#settings_section,#network_section,#letter_mobile,#favorite_section,.servers,.letter_title,.letters').hide();
    $('#directory_section,.g_form').show();
    $('#finance').toggle();
}

function togglenetwork() {
    $(".favorite, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").show(),
      $(".favorite, .design,.finance,.game,.media,.medical,.environmental,.productivity,.web,.letter_head").toggle();
    $('#search_section,#env_section,#settings_section,#letter_mobile,#favorite_section,.servers,.letter_title,.letters').hide();
    $('#directory_section').show();
    $('#network_section,#directory_section,#network,.g_form').show(),
      $('#search_section, #env_section,#bookmark_section,#letter_mobile').hide();
}

function toggleproductivity() {
    $(".favorite, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").show(),
      $(".favorite,.design,.finance,.game,.media,.medical,.network,.environmental,.web,.letter_head").toggle();
    $('#search_section,#env_section,#settings_section,#network_section,#letter_mobile,#favorite_section,.servers,.letter_title,.letters').hide();
    $('#directory_section,.g_form').show();
    $('#product').toggle();
}

function toggleweb() {
    $(".favorite, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").show(),
      $(".favorite,.design,.finance,.game,.media,.medical,.network,.productivity,.environmental,.letter_head").toggle();
    $('#search_section,#env_section,#settings_section,#network_section,#letter_mobile,#favorite_section,.servers,.letter_title,.letters').hide();
    $('#directory_section,.g_form').show();
    $('#web').toggle();
}
function togglesettings() {
    $('#search_section,#env_section,#settings_section,#favorite_section,#network_section,#letter_mobile,#search,#directory_section,.letter_head,#letter_row,#up_bar').hide();
    $('#settings_section,.g_form,#letter_mobile,.letters,.favorite_center').show();
    $('#settings').toggle();
}
function toggle_weather() {
  $('.weather').fadeToggle("slow", "linear");
}


// Google Search Box
function google_box_clear() {
  setTimeout(function () {
    document.getElementById('gsearch').value = '';
  }, 60000)
}

function clear_box() {
  document.getElementById('gsearch').value = ''
  document.getElementById("myonoffswitch").checked = false;
}

function clear_box2() {
  document.getElementById('gsearch2').value = '';
}

// Toggles

function directory_toggle() {
  $('.letter_title,#directory_section,#up_bar').show(),
    $(".favorite, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web").show();
    $(".letter_head, .favorite_center ").hide();
}
function toggle_book() {
  $(".win_book").toggle();
}
function toggle_pass() {
  $(".win_pass").toggle();
}
function search_toggle() {
  $('.win_search').toggle();
}
function toggle_sc() {
  $('.win_sc').toggle();
}
function toggle_frame1() {
  $(".win_frame1").toggle();
}
function toggle_frame2() {
  $(".win_frame2").toggle();
}
function toggle_frame3() {
  $(".win_frame3").toggle();
}
function toggle_frame4() {
  $(".win_frame4").toggle();
}
function toggle_frame5() {
  $(".win_frame5").toggle();
}

function favorite_edit() {
if($(".book_icon i").is(":visible")){
  $('.favorite_icon').show();
  $('.book_icon i').hide();
  $('.remove').hide();
} else {
  $('.book_icon i').show();
  $('.favorite_icon').hide();
  $('.remove').hide();
}
}
function delete_edit() {
if($(".book_icon i").is(":visible")){
  $('.remove').show();
  $('.favorite_icon').hide();
  $('.book_icon i').hide();
} else {
  $('.book_icon i').show();
  $('.remove').hide();
  $('.favorite_icon').hide();
}
}


//Bookmark Add
$(document).ready(function () {
  $('.googlesearch').focus(function () {
    $('.g_clear, .g_clear_search').css('color', '#000');
  });
});
$(document).ready(function () {
  $('.googlesearch').focusout(function () {
    $('.g_clear, .g_clear_search').css('color', '#fff');
  });
});

$(document).ready(function () {
  $('.googlesearch2').focus(function () {
    $('.g_clear, .g_clear_search').css('color', '#000');
  });
});
$(document).ready(function () {
  $('.googlesearch2').focusout(function () {
    $('.g_clear, .g_clear_search').css('color', '#fff');
  });
});

 //Password Generator

function generatepass(plength) {

  var keylist = "abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ!#$%&*+-=?@_";
  var temp = '';
  var plength = document.getElementById('thelength').value;

  temp = ''
  for (i = 0; i < plength; i++)
    temp += keylist.charAt(Math.floor(Math.random() * keylist.length))
  return temp
}

function populateform(enterlength) {
  document.pgenerate.output.value = generatepass(enterlength)
}

//Window Drag

$(document).ready(function () {
  $(".win_book").draggable();
});
$(document).ready(function () {
  $(".win_pass").draggable();
});
$(document).ready(function () {
  $(".win_search").draggable();
});
$(document).ready(function () {
  $(".win_sc").draggable();
});
$(document).ready(function () {
  $(".weather").draggable();
});

// Custom Frame Draggables

$(document).ready(function () {
  $(".win_frame1").draggable();
});
$(document).ready(function () {
  $(".win_frame2").draggable();
});
$(document).ready(function () {
  $(".win_frame3").draggable();
});
$(document).ready(function () {
  $(".win_frame4").draggable();
});
$(document).ready(function () {
  $(".win_frame5").draggable();
});

// Frames


$(document).ready(function () {
  $('.exit_pass').click(function () {
    $('.win_pass').css('display', 'none');
  });
});

$(document).ready(function () {
  $('.exit_book').click(function () {
    $('.win_book').css('display', 'none');
  });
});
$(document).ready(function () {
  $('.exit_search').click(function () {
    $('.win_search').css('display', 'none');
  });
});

$(document).ready(function () {
  $('.exit_sc').click(function () {
    $('.win_sc').css('display', 'none');
  });
});

//Custom Frames

$(document).ready(function () {
  $('.exit_term1').click(function () {
    $('.win_frame1').css('display', 'none');
  });
});
$(document).ready(function () {
  $('.exit_term2').click(function () {
    $('.win_frame2').css('display', 'none');
  });
});
$(document).ready(function () {
  $('.exit_term3').click(function () {
    $('.win_frame2').css('display', 'none');
  });
});
$(document).ready(function () {
  $('.exit_term4').click(function () {
    $('.win_frame2').css('display', 'none');
  });
});
$(document).ready(function () {
  $('.exit_term5').click(function () {
    $('.win_frame2').css('display', 'none');
  });
});


//Clock
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}

function checkTime(i) {
  if (i < 10) {
    i = "0" + i
  };
  return i;
}
