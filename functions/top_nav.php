<div class="top_nav">
  <div><img src="./images/logo.png" class="logo_icon" alt="Logo" onClick="location.reload();" /></div>
  <form autocomplete="off" method="get" action="https://google.com/search"  target="_blank" class="g_form" >
    <i class="fas fa-search g_clear" id="spyglass" onclick="clear_box2();"></i>
    <input required name="q" type="text" id="gsearch2"  class="googlesearch2" placeholder="Google"  />
    <i class="fas fa-search-plus g_clear_search" id="spyglassplus" onclick="search_toggle();"></i>
  </form>
  <div class="letter_head" id="favorite"><i class="far fa-star icons3"></i></div>
  <?php
  include './functions/config_categories.php';
  echo"<div class='letter_head' id='cat_1'>$category1_name</div>";
  echo"<div class='letter_head' id='cat_2'>$category2_name</div>";
  echo"<div class='letter_head' id='cat_3'>$category3_name</div>";
  echo"<div class='letter_head' id='cat_4'>$category4_name</div>";
  echo"<div class='letter_head' id='cat_5'>$category5_name</div>";
  echo"<div class='letter_head' id='cat_6'>$category6_name</div>";
  echo"<div class='letter_head' id='cat_7'>$category7_name</div>";
  echo"<div class='letter_head' id='cat_8'>$category8_name</div>";
  echo"<div class='letter_head' id='cat_9'>$category9_name</div>";
  echo"<div class='letter_head' id='cat_10'>$category10_name</div>";
  ?>
  <div class="letter_head" id="settings">Settings</div>
  <div class="tzone"><i class="fa-solid fa-clock" onclick="window.open('https://www.worldtimebuddy.com/','_blank')"></i>&nbsp;|&nbsp;<span class="timeclock"><span id="txt" ></span><span id="txt2" ></span></span>&nbsp;|&nbsp;<i class="fas fa-cloud-sun fa-1x" title="Weather" onclick="toggle_weather();"></i>&nbsp;|&nbsp;<span id="time_message">Good Morning</span>&nbsp;|&nbsp;&nbsp;<i class="fas fa-bars fa-1x" onclick="toggle_main_menu();"></i>&nbsp;&nbsp;</div>
  </div>
<div class="weather"><?php include './functions/config.php';echo $weather;?></div>
<div class="main">
<a id="up_bar" href="#page-top"><i class="fas fa-arrow-circle-up fa-lg"></i></a>
<div class="letter_head2" >
  <img src="./images/logo.png" class="logo_icon2" alt="logo"/>
</div>
<div class="main_menu_box" onclick="toggle_main_menu();">
</div>
<div class="main_menu">
<div class="main_menu_item" onclick="togglefavorite();toggle_main_menu();"><i class="far fa-star fa-1x" title="Favorites" ></i>Favorites</div>
<div class="main_menu_item" onclick="directory_toggle();toggle_main_menu();"><i class="fas fa-th fa-1x" title="Main Directory" ></i>Main Directory</div>
<div class="main_menu_item" onclick="toggle_book();toggle_main_menu();"><i class="far fa-bookmark fa-1x" title="Add Bookmark"  ></i>Add Bookmark</div>
<div class="main_menu_item" onclick="toggle_edit_book();toggle_main_menu();"><i class="far fa-edit fa-1x" title="Edit Bookmarks" ></i>Edit Bookmarks</div>
<div class="main_menu_item" onclick="toggle_sc();toggle_main_menu();"><i class="fas fa-reply fa-1x" title="Keyboard Shortcuts" ></i>Keyboard Shortcuts</div>
<div class="main_menu_item" onclick="togglesettings();toggle_main_menu();"><i class="fas fa-cogs fa-1x" title="Settings" ></i>Settings</div>
<div class="main_menu_item" onclick="toggle_main_menu();window.open('./htam-panel.php','_blank');"><i class="fas fa-user-cog fa-1x" title="User Management" ></i>User Managment</div>
<div class="main_menu_item" onclick="toggle_help();toggle_main_menu();"><i class="far fa-question-circle fa-1x" title="Help"></i>Help</div>
<div class="main_menu_item" onclick="location.reload();"><i class="fas fa-redo-alt fa-1x" title="Reload"></i>Reload Page</div>
</div>
