// JavaScript Document

// Code Mirror

$(document).ready(function() {
  CodeMirror.fromTextArea(document.getElementById('editor'), {
    mode: 'css',
    theme: 'twilight',
    lineNumbers: true,
    tabSize: 2,
    lineWrapping: true
    });
});


// Directory Toggle

$(document).ready(function () {
  $("#list_toggle").click(function () {
    $("#list_css").prop('disabled', function () {
      return !$(this).prop('disabled');
    });
  });
});

// Settings - Update Toggles
function update_db_features() {
  $.get("./functions/features.php", function (data) {
      $("#features_box").html(data);
    }),
     $.get("./functions/features.php", function (data) {
      $("#features_box").html(data);
    }),
    $.get("./functions/features.php", function (data) {
      $("#features_box").html(data);
    }),
    $("#css_search").load('./functions/search_css.php');
  $("#css_search").load('./functions/search_css.php');
}

function update_db_search() {
    $.get("./functions/search_features.php", function (data) {
      $("#search_box").html(data);
    }),
    $.get("./functions/search_features.php", function (data) {
      $("#search_box").html(data);
    }),
    $.get("./functions/search_features.php", function (data) {
      $("#search_box").html(data);
    }),
    $("#css_search").load('./functions/search_css.php');
  $("#css_search").load('./functions/search_css.php');
}

function update_db_category() {
    $.get("./functions/categories.php", function (data) {
      $("#category_box").html(data);
    }),
    $.get("./functions/categories.php", function (data) {
      $("#category_box").html(data);
    }),
    $.get("./functions/categories.php", function (data) {
      $("#category_box").html(data);
    }),
    $("#css_search").load('./functions/search_css.php');
  $("#css_search").load('./functions/search_css.php');
}

$(document).ready(function () {
  $('#general_form, #weather_form, #media_form, #cat_form, #frame_form, #morn_form, #day_form, #dusk_form, #evening_form, #mobile_form, #logo_form, #search_feature_form, #book_add_form, #book_edit_form').submit(function () {
    window.open('', 'formpopup', 'width=400,height=300,resizeable,scrollbars');
    this.target = 'formpopup';
  });
});

$(document).ready(function () {
  $('#search_form1, #search_form2, #search_form3, #search_form4, #search_form4, #search_form5, #search_form6, #search_form7, #search_form8, #search_form9, #search_form10, #search_form11, #search_form12, #search_form13, #search_form14, #search_form15, #search_form16, #search_form17, #search_form18, #search_form19, #search_form20, #search_form21, #search_form22, #search_form23, #search_form24, #search_form25').submit(function () {
    window.open('', 'formpopup', 'width=400,height=300,resizeable,scrollbars');
    this.target = 'formpopup';
  });
});


$(document).ready(function () {
  $(document).on('click', '#search_feature_form', '#book_edit_form', function () {
    window.open('', 'formpopup', 'width=400,height=300,resizeable,scrollbars');
    this.target = 'formpopup';
  });
});

$(document).ready(function () {
  $(document).on('click', '#feature_form', function () {
    window.open('', 'formpopup', 'width=400,height=300,resizeable,scrollbars');
    this.target = 'formpopup';
  });
});

$(document).ready(function () {
  $(document).on('click', '#category_form', function () {
    window.open('', 'formpopup', 'width=400,height=300,resizeable,scrollbars');
    this.target = 'formpopup';
  });
});

$(document).ready(function () {
  $(document).on('click', '#add_form', function () {
    window.open('', 'formpopup', 'width=400,height=300,resizeable,scrollbars');
    this.target = 'formpopup';
  });
});
$(document).ready(function () {
  $(document).on('click', '#remove_form', function () {
    window.open('', 'formpopup', 'width=400,height=300,resizeable,scrollbars');
    this.target = 'formpopup';
  });
});


// Clear Search Boxes

$(document).ready(function () {
  var interval = 300000;
  setInterval(function () {
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
document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "h") {
    toggle_help();
  }
});
document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "b") {
    toggle_book();
  }
});
document.addEventListener("keydown", function (zEvent) {
  if (zEvent.ctrlKey && zEvent.altKey && zEvent.key === "f") {
    toggle_edit_book();
  }
});


//Header Toggles



function toggle_category1() {
$(".favorite, .category_1, .category_2, .category_3, .category_4, .category_5, .category_6, .category_7, .category_8, .category_9, .category_10, .letter_head").show(), $(".favorite, .category_2, .category_3, .category_4, .category_5, .category_6, .category_7, .category_8, .category_9, .category_10, .letter_head").toggle();
$("#search_section,#settings_section,#network_section,#letter_mobile,#favorite_section,.servers,.letter_title,.letters").hide();
$("#directory_section,.g_form").show();
  $("#cat_1").toggle();
}

function toggle_category2() {
  $(".favorite, .category_1, .category_2, .category_3, .category_4, .category_5, .category_6, .category_7, .category_8, .category_9, .category_10, .letter_head").show(), $(".favorite, .category_1, .category_3, .category_4, .category_5, .category_6, .category_7, .category_8, .category_9, .category_10, .letter_head").toggle();
  $("#search_section, #settings_section, #network_section, #letter_mobile, #favorite_section, .servers, .letter_title, .letters").hide();
  $("#directory_section,.g_form").show();
    $("#cat_2").toggle();
}

function toggle_category3() {
  $(".favorite, .category_1, .category_2, .category_3, .category_4, .category_5, .category_6, .category_7, .category_8, .category_9, .category_10, .letter_head").show(), $(".favorite, .category_1, .category_2, .category_4, .category_5, .category_6, .category_7, .category_8, .category_9, .category_10, .letter_head").toggle();
  $("#search_section, #settings_section, #network_section, #letter_mobile, #favorite_section, .servers, .letter_title, .letters").hide();
  $("#directory_section,.g_form").show();
    $("#cat_3").toggle();
}

function toggle_category4() {
  $(".favorite, .category_1, .category_2, .category_3, .category_4, .category_5, .category_6, .category_7, .category_8, .category_9, .category_10, .letter_head").show(), $(".favorite, .category_1, .category_2, .category_3, .category_5, .category_6, .category_7, .category_8, .category_9, .category_10, .letter_head").toggle();
  $("#search_section, #settings_section, #network_section, #letter_mobile, #favorite_section, .servers, .letter_title, .letters").hide();
  $("#directory_section,.g_form").show();
    $("#cat_4").toggle();
}

function toggle_category5() {
  $(".favorite, .category_1, .category_2, .category_3, .category_4, .category_5, .category_6, .category_7, .category_8, .category_9, .category_10, .letter_head").show(), $(".favorite, .category_1, .category_2, .category_3, .category_4, .category_6, .category_7, .category_8, .category_9, .category_10, .letter_head").toggle();
  $("#search_section, #settings_section, #network_section, #letter_mobile, #favorite_section, .servers, .letter_title, .letters").hide();
  $("#directory_section,.g_form").show();
    $("#cat_5").toggle();
}

function toggle_category6() {
  $(".favorite, .category_1, .category_2, .category_3, .category_4, .category_5, .category_6, .category_7, .category_8, .category_9, .category_10, .letter_head").show(), $(".favorite, .category_1, .category_2, .category_3, .category_4, .category_5, .category_7, .category_8, .category_9, .category_10, .letter_head").toggle();
  $("#search_section, #settings_section, #network_section, #letter_mobile, #favorite_section, .servers, .letter_title, .letters").hide();
  $("#directory_section,.g_form").show();
    $("#cat_6").toggle();
}

function toggle_category7() {
  $(".favorite, .category_1, .category_2, .category_3, .category_4, .category_5, .category_6, .category_7, .category_8, .category_9, .category_10, .letter_head").show(), $(".favorite, .category_1, .category_2, .category_3, .category_4, .category_5, .category_6, .category_8, .category_9, .category_10, .letter_head").toggle();
  $("#search_section, #settings_section, #network_section, #letter_mobile, #favorite_section, .servers, .letter_title, .letters").hide();
  $("#directory_section,.g_form").show();
    $("#cat_7").toggle();
}

function toggle_category8() {
  $(".favorite, .category_1, .category_2, .category_3, .category_4, .category_5, .category_6, .category_7, .category_8, .category_9, .category_10, .letter_head").show(), $(".favorite, .category_1, .category_2, .category_3, .category_4, .category_5, .category_6, .category_7, .category_9, .category_10, .letter_head").toggle();
  $("#search_section, #settings_section, #network_section, #letter_mobile, #favorite_section, .servers, .letter_title, .letters").hide();
  $("#directory_section,.g_form").show();
    $("#cat_8").toggle();
}

function toggle_category9() {
  $(".favorite, .category_1, .category_2, .category_3, .category_4, .category_5, .category_6, .category_7, .category_8, .category_9, .category_10, .letter_head").show(), $(".favorite, .category_1, .category_2, .category_3, .category_4, .category_5, .category_6, .category_7, .category_8, .category_10, .letter_head").toggle();
  $("#search_section, #settings_section, #network_section, #letter_mobile, #favorite_section, .servers, .letter_title, .letters").hide();
  $("#directory_section,.g_form").show();
    $("#cat_9").toggle();
}

function toggle_category10() {
  $(".favorite, .category_1, .category_2, .category_3, .category_4, .category_5, .category_6, .category_7, .category_8, .category_9, .category_10, .letter_head").show(), $(".favorite, .category_1, .category_2, .category_3, .category_4, .category_5, .category_6, .category_7, .category_8, .category_9, .letter_head").toggle();
  $("#search_section, #settings_section, #network_section, #letter_mobile, #favorite_section, .servers, .letter_title, .letters").hide();
  $("#directory_section,.g_form").show();
    $("#cat_10").toggle();
}

function togglesettings() {
  $("#search_section,#settings_section,#favorite_section,#network_section,#letter_mobile,#search,#directory_section,.letter_head,#letter_row,#up_bar").hide();
  $("#settings_section,.g_form,#letter_mobile,.letters,.favorite_center").show();
  $("#settings").toggle();
}
function togglefavorite() {
  $("#search_section,#settings_section,#network_section,#letter_mobile,#search,#directory_section,.letter_head,#up_bar").hide();
  $("#favorite_section,.g_form,#letter_mobile,.letters,.favorite_center,#letter_row").show();
  $("#favorite").toggle();
}
function toggle_weather() {
  $(".weather").fadeToggle("slow", "linear");
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
    $(".favorite, .category_1, .category_2, .category_3, .category_4, .category_5, .category_6, .category_7, .category_8, .category_9, .category_10").show();
  $(".letter_head, .favorite_center ").hide();
}
function toggle_main_menu() {
  $(".main_menu_box").fadeToggle("slow", "linear");
  $(".main_menu").toggle();
}
function toggle_book() {
  $(".win_book_add").toggle();
}
function toggle_edit_book() {
  $(".win_book_edit").toggle();
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
function toggle_help() {
  $('.win_help').toggle();
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
  if ($(".book_icon i").is(":visible")) {
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
  if ($(".book_icon i").is(":visible")) {
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
  $(".win_book_add").draggable();
});
$(document).ready(function () {
  $(".win_book_edit").draggable();
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
  $(".win_help").draggable();
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
  $('.exit_book_add').click(function () {
    $('.win_book_add').css('display', 'none');
  });
});
$(document).ready(function () {
  $('.exit_book_edit').click(function () {
    $('.win_book_edit').css('display', 'none');
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
$(document).ready(function () {
  $('.exit_help').click(function () {
    $('.win_help').css('display', 'none');
  });
});
//Custom Frames

$(document).ready(function () {
  $('.exit_frame1').click(function () {
    $('.win_frame1').css('display', 'none');
  });
});
$(document).ready(function () {
  $('.exit_frame2').click(function () {
    $('.win_frame2').css('display', 'none');
  });
});
$(document).ready(function () {
  $('.exit_frame3').click(function () {
    $('.win_frame3').css('display', 'none');
  });
});
$(document).ready(function () {
  $('.exit_frame4').click(function () {
    $('.win_frame4').css('display', 'none');
  });
});
$(document).ready(function () {
  $('.exit_frame5').click(function () {
    $('.win_frame5').css('display', 'none');
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
