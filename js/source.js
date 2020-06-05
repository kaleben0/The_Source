// JavaScript Document
// Google Searches
function google_search() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://www.google.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.google.com/search?q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}


function calendar() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://calendar.google.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://calendar.google.com/calendar/r/search?q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function contact() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://contacts.google.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://contacts.google.com/search/";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function drive() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://drive.google.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://drive.google.com/drive/u/0/search?q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}


function earth() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://earth.google.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://earth.google.com/web/search/";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function keep() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://keep.google.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://keep.google.com/u/0/#search/text%253D";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function gmail() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://mail.google.com/mail/', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://mail.google.com/mail/u/0/#search/";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function hangouts() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://hangouts.google.com/', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://mail.google.com/mail/u/0/#search/in%3Achats+";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function maps() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://www.google.com/maps', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.google.com/maps/place/";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function music() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://play.google.com/music/', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://play.google.com/music/listen?u=0#/sr/";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function photo() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://photos.google.com/', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://photos.google.com/search/";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function play() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://play.google.com/store/', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://play.google.com/store/search?q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function scholar() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://scholar.google.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://scholar.google.com/scholar?hl=en&as_sdt=0%2C23&q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}


function gtranslate() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://translate.google.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://translate.google.com/#auto/en/";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function youtube() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://www.youtube.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.youtube.com/results?search_query=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

// Non-Google Searches

function amazon() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://www.amazon.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.amazon.com/s/ref=nb_sb_noss_2?url=search-alias%3Daps&field-keywords=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function bing() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://www.bing.com/', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.bing.com/search?q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}


function codepen() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://codepen.io/', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://codepen.io/search/pens?q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function duckduckgo() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://duckduckgo.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://duckduckgo.com/?q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}


function ebay() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://www.ebay.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.ebay.com/sch/i.html?_from=R40&_trksid=p2380057.m570.l1313.TR11.TRC2.A0.H0.XSTuff.TRS1&_nkw=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}


function fontawesome() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://fontawesome.com/', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://fontawesome.com/icons?d=gallery&m=free&q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function giphy() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://giphy.com/', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://giphy.com/search/";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function github() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://github.com/', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://github.com/search?q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}


function hulu() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://www.hulu.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.hulu.com/search?q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}


function imdb() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('http://www.imdb.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "http://www.imdb.com/find?ref_=nv_sr_fn&q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function imgur() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://imgur.com/new/time', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://imgur.com/search?q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}


function netflix() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://www.netflix.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.netflix.com/search?q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}



function reddit() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://www.reddit.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.reddit.com/search?q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}


function spotify() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://open.spotify.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://open.spotify.com/search/";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function stackoverflow() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://stackoverflow.com/', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://stackoverflow.com/search?q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}


function steam() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('http://store.steampowered.com/', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "http://store.steampowered.com/search/?term=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}


function tumblr() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://www.tumblr.com/', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.tumblr.com/search/";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function versus() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://versusutil.com/', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://versusutil.com/?seed=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function wallhaven() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://wallhaven.cc', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://wallhaven.cc/search?q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function wikipedia() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://en.wikipedia.org', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://en.wikipedia.org/wiki/";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function wolframalpha() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('http://www.wolframalpha.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "http://www.wolframalpha.com/input/?i=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function wowhead() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('http://www.wowhead.com/', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "http://www.wowhead.com/search?q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function wowpedia() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://wow.gamepedia.com', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://wow.gamepedia.com/index.php?search=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}

function justwatch() {
  if ($("#myonoffswitch").is(':not(:checked')) {
    window.open('https://www.justwatch.com/us/', '_blank');
  } else {
    var box = document.getElementById("gsearch").value;
    var boxurl = "https://www.justwatch.com/us/search?q=";
    var boxfin = boxurl + box;

    window.open(boxfin, '_blank');
  }
}


// Key Functions


document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "1") {
    toggle_book();
  }
});
document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "2") {
    toggle_cal();
  }
});
document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "3") {
    toggle_pass();
  }
});
document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "4") {
    toggle_bin();
  }
});
document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "5") {
    search_toggle();
  }
});
document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "6") {
    toggle_spot();
  }
});
document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "7") {
    toggle_term();
  }
});
document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "0") {
    toggle_sc();
  }
});


function edit_book() {
  window.open('db_index.php?&start=0&s=&f=&sort=id&ad=a', '_blank');
}


//Header Toggles

function toggleadmin() {
  if (event.altKey) {
    location.reload();
  } else {
    $('#search_section,#env_section,#network_section,#letter_mobile,#search,#directory_section,.letter_head,#up_bar').hide();
    $('#admin_section,.g_form,#letter_mobile,.letters').show();
    $('#admin').toggle();
  }
}

function toggledesign() {
  if (event.altKey) {
    location.reload();
  } else {
    $(".admin, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").show(),
      $(".admin,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").toggle();
    $('#search_section,#env_section,#network_section,#letter_mobile,#admin_section,.servers,.letter_title,.letters').hide();
    $('#directory_section,.g_form').show();
    $('#design').toggle();
  }
}

function toggleenvironmental() {
  if (event.altKey) {
    location.reload();
  } else {
    $(".admin, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").show(),
      $(".admin,.design,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").toggle();
    $('#search_section,#network_section,#letter_mobile, #bookmark_section,#admin_section,.servers,.letter_title,.letters').hide();
    $('#directory_section').show();
    $('#env_section,#directory_section,#enviro,.g_form').show();
  }
}

function togglegame() {
  if (event.altKey) {
    location.reload();
  } else {
    $(".admin, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").show(),
      $(".admin,.design,.finance,.environmental,.media,.medical,.network,.productivity,.web,.letter_head").toggle();
    $('#search_section,#env_section,#network_section,#letter_mobile,#admin_section,.servers,.letter_title,.letters').hide();
    $('#directory_section,.g_form').show();
    $('#game').toggle();
  }
}

function togglemedia() {
  if (event.altKey) {
    location.reload();
  } else {
    $(".admin, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").show(),
      $(".admin,.design,.finance,.game,.environmental,.medical,.network,.productivity,.web,.letter_head").toggle();
    $('#search_section,#env_section,#network_section,#letter_mobile,#admin_section,.servers,.letter_title,.letters').hide();
    $('#directory_section,.g_form').show();
    $('#media').toggle();
  }
}

function togglemedical() {
  if (event.altKey) {
    location.reload();
  } else {
    $(".admin, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").show(),
      $(".admin, .design,.finance,.game,.media,.environmental,.network,.productivity,.web,.letter_head").toggle();
    $('#search_section,#env_section,#network_section,#letter_mobile,#admin_section,.servers,.letter_title,.letters').hide();
    $('#directory_section,.g_form').show();
    $('#medical').toggle();
  }
}

function togglefinance() {
  if (event.altKey) {
    location.reload();
  } else {
    $(".admin, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").show(),
      $(".admin, .design,.environmental,.game,.media,.medical,.network,.productivity,.web,.letter_head").toggle();
    $('#search_section,#env_section,#network_section,#letter_mobile,#admin_section,.servers,.letter_title,.letters').hide();
    $('#directory_section,.g_form').show();
    $('#finance').toggle();
  }
}

function togglenetwork() {
  if (event.altKey) {
    location.reload();
  } else {
    $(".admin, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").show(),
      $(".admin, .design,.finance,.game,.media,.medical,.environmental,.productivity,.web,.letter_head").toggle();
    $('#search_section,#env_section,#letter_mobile,#admin_section,.servers,.letter_title,.letters').hide();
    $('#directory_section').show();
    $('#network_section,#directory_section,#network,.g_form').show(),
      $('#search_section, #env_section,#bookmark_section,#letter_mobile').hide();
  }
}

function toggleproductivity() {
  if (event.altKey) {
    location.reload();
  } else {
    $(".admin, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").show(),
      $(".admin,.design,.finance,.game,.media,.medical,.network,.environmental,.web,.letter_head").toggle();
    $('#search_section,#env_section,#network_section,#letter_mobile,#admin_section,.servers,.letter_title,.letters').hide();
    $('#directory_section,.g_form').show();
    $('#product').toggle();
  }
}

function toggleweb() {
  if (event.altKey) {
    location.reload();
  } else {
    $(".admin, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web,.letter_head").show(),
      $(".admin,.design,.finance,.game,.media,.medical,.network,.productivity,.environmental,.letter_head").toggle();
    $('#search_section,#env_section,#network_section,#letter_mobile,#admin_section,.servers,.letter_title,.letters').hide();
    $('#directory_section,.g_form').show();
    $('#web').toggle();
  }
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
    $(".admin, .design,.environmental,.finance,.game,.media,.medical,.network,.productivity,.web").show();
}
function toggle_book() {
  $(".win_book").toggle();
}
function toggle_cal() {
  $(".win_cal").toggle();
}
function toggle_pass() {
  $(".win_pass").toggle();
}
function toggle_bin() {
  $(".win_bin").toggle();
}
function search_toggle() {
  $('.win_search').toggle();
}
function toggle_spot() {
  $('.win_spot').toggle();
}
function toggle_term() {
  $(".win_ssh").toggle();
}
function toggle_sc() {
  $('.win_sc').toggle();
}

function favorite_edit() {
if($(".book_icon i").is(":visible")){
  $('.favorite').show();
  $('.book_icon i').hide();
  $('.remove').hide();
} else {
  $('.book_icon i').show();
  $('.favorite').hide();
  $('.remove').hide();
}
}
function delete_edit() {
if($(".book_icon i").is(":visible")){
  $('.remove').show();
  $('.favorite').hide();
  $('.book_icon i').hide();
} else {
  $('.book_icon i').show();
  $('.remove').hide();
  $('.favorite').hide();
}
}

//Bookmark Add
$(document).ready(function () {
  $('.googlesearch').focus(function () {
    $('.g_clear').css('color', '#000');
  });
});
$(document).ready(function () {
  $('.googlesearch').focusout(function () {
    $('.g_clear').css('color', '#fff');
  });
});

$(document).ready(function () {
  $('.googlesearch2').focus(function () {
    $('.g_clear').css('color', '#000');
  });
});
$(document).ready(function () {
  $('.googlesearch2').focusout(function () {
    $('.g_clear').css('color', '#fff');
  });
});


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
  $(".win_cal").draggable();
});

$(document).ready(function () {
  $(".win_pass").draggable();
});

$(document).ready(function () {
  $(".win_ssh").draggable();
});

$(document).ready(function () {
  $(".win_spot").draggable();
});

$(document).ready(function () {
  $(".win_search").draggable();
});

$(document).ready(function () {
  $(".win_bin").draggable();
});
$(document).ready(function () {
  $(".win_sc").draggable();
});

// Frames

$(document).ready(function () {
  $('.exit_term').click(function () {
    $('.win_ssh').css('display', 'none');
  });
});
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
  $('.exit_cal').click(function () {
    $('.win_cal').css('display', 'none');
  });
});
$(document).ready(function () {
  $('.exit_search').click(function () {
    $('.win_search').css('display', 'none');
  });
});
$(document).ready(function () {
  $('.exit_spot').click(function () {
    $('.win_spot').css('display', 'none');
  });
});

$(document).ready(function () {
  $('.exit_bin').click(function () {
    $('.win_bin').css('display', 'none');
  });
});

$(document).ready(function () {
  $('.exit_sc').click(function () {
    $('.win_sc').css('display', 'none');
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

