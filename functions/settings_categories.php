<?php ?>
<form action="./functions/add_categories.php" method="post" id="category_form">
  <div class="section_label" onclick="$('#set_cat,#save_cat').toggle();">Custom Categories
    <input type="submit" name="submit" id="save_cat" class="far fa-save" value="&#xf0c7" title="Save Changes">
  </div>
  <div class="settings_box" id="set_cat">
    <div class="set_label">Category 1
      <div class='tooltip'><i class='fas fa-info-circle fa-sm'></i><span class='tooltiptext'>Change Title to 'empty' (without quotes) to disable</span></div>
    </div>
    <div class="category_field">Name
      <input type="text" class="set_fields" name="category1_title" value="<?php include './functions/config_categories.php';echo$category1_title ?>" maxlength="16" >
    </div>
    <div class="category_field">Font Awesome Icon
      <input type="text" class="set_fields" name="category1_fa" value="<?php include './functions/config_categories.php';echo$category1_fa ?>">
    </div>
    <br/>
    <div class="set_label">Category 2
      <div class='tooltip'><i class='fas fa-info-circle fa-sm'></i><span class='tooltiptext'>Change Title to 'empty' (without quotes) to disable</span></div>
    </div>
    <div class="category_field">Name
      <input type="text" class="set_fields" name="category2_title" value="<?php include './functions/config_categories.php';echo$category2_title ?>" maxlength="16">
    </div>
    <div class="category_field">Font Awesome Icon
      <input type="text" class="set_fields" name="category2_fa" value="<?php include './functions/config_categories.php';echo$category2_fa ?>">
    </div>
    <br/>
    <div class="set_label">Category 3
      <div class='tooltip'><i class='fas fa-info-circle fa-sm'></i><span class='tooltiptext'>Change Title to 'empty' (without quotes) to disable</span></div>
    </div>
    <div class="category_field">Name
      <input type="text" class="set_fields" name="category3_title" value="<?php include './functions/config_categories.php';echo$category3_title ?>" maxlength="16">
    </div>
    <div class="category_field">Font Awesome Icon
      <input type="text" class="set_fields" name="category3_fa" value="<?php include './functions/config_categories.php';echo$category3_fa ?>">
    </div>
    <br/>
    <div class="set_label">Category 4
      <div class='tooltip'><i class='fas fa-info-circle fa-sm'></i><span class='tooltiptext'>Change Title to 'empty' (without quotes) to disable</span></div>
    </div>
    <div class="category_field">Name
      <input type="text" class="set_fields" name="category4_title" value="<?php include './functions/config_categories.php';echo$category4_title ?>" maxlength="16">
    </div>
    <div class="category_field">Font Awesome Icon
      <input type="text" class="set_fields" name="category4_fa" value="<?php include './functions/config_categories.php';echo$category4_fa ?>">
    </div>
    <br/>
    <div class="set_label">Category 5
      <div class='tooltip'><i class='fas fa-info-circle fa-sm'></i><span class='tooltiptext'>Change Title to 'empty' (without quotes) to disable</span></div>
    </div>
    <div class="category_field">Name
      <input type="text" class="set_fields" name="category5_title" value="<?php include './functions/config_categories.php';echo$category5_title ?>" maxlength="16">
    </div>
    <div class="category_field">Font Awesome Icon
      <input type="text" class="set_fields" name="category5_fa" value="<?php include './functions/config_categories.php';echo$category5_fa ?>">
    </div>
    <br/>

    <br/>
    <div class="set_label">Category 6
      <div class='tooltip'><i class='fas fa-info-circle fa-sm'></i><span class='tooltiptext'>Change Title to 'empty' (without quotes) to disable</span></div>
    </div>
    <div class="category_field">Name
      <input type="text" class="set_fields" name="category6_title" value="<?php include './functions/config_categories.php';echo$category6_title ?>" maxlength="16">
    </div>
    <div class="category_field">Font Awesome Icon
      <input type="text" class="set_fields" name="category6_fa" value="<?php include './functions/config_categories.php';echo$category6_fa ?>">
    </div>
    <br/>

    <br/>
    <div class="set_label">Category 7
      <div class='tooltip'><i class='fas fa-info-circle fa-sm'></i><span class='tooltiptext'>Change Title to 'empty' (without quotes) to disable</span></div>
    </div>
    <div class="category_field">Name
      <input type="text" class="set_fields" name="category7_title" value="<?php include './functions/config_categories.php';echo$category7_title ?>" maxlength="16">
    </div>
    <div class="category_field">Font Awesome Icon
      <input type="text" class="set_fields" name="category7_fa" value="<?php include './functions/config_categories.php';echo$category7_fa ?>">
    </div>
    <br/>


    <br/>
    <div class="set_label">Category 8
      <div class='tooltip'><i class='fas fa-info-circle fa-sm'></i><span class='tooltiptext'>Change Title to 'empty' (without quotes) to disable</span></div>
    </div>
    <div class="category_field">Name
      <input type="text" class="set_fields" name="category8_title" value="<?php include './functions/config_categories.php';echo$category8_title ?>" maxlength="16">
    </div>
    <div class="category_field">Font Awesome Icon
      <input type="text" class="set_fields" name="category8_fa" value="<?php include './functions/config_categories.php';echo$category8_fa ?>">
    </div>
    <br/>


    <br/>
    <div class="set_label">Category 9
      <div class='tooltip'><i class='fas fa-info-circle fa-sm'></i><span class='tooltiptext'>Change Title to 'empty' (without quotes) to disable</span></div>
    </div>
    <div class="category_field">Name
      <input type="text" class="set_fields" name="category9_title" value="<?php include './functions/config_categories.php';echo$category9_title ?>" maxlength="16">
    </div>
    <div class="category_field">Font Awesome Icon
      <input type="text" class="set_fields" name="category9_fa" value="<?php include './functions/config_categories.php';echo$category9_fa ?>">
    </div>

    <br/>
    <div class="set_label">Category 10
      <div class='tooltip'><i class='fas fa-info-circle fa-sm'></i><span class='tooltiptext'>Change Title to 'empty' (without quotes) to disable</span></div>
    </div>
    <div class="category_field">Name
      <input type="text" class="set_fields" name="category10_title" value="<?php include './functions/config_categories.php';echo$category10_title ?>" maxlength="16">
    </div>
    <div class="category_field">Font Awesome Icon
      <input type="text" class="set_fields" name="category10_fa" value="<?php include './functions/config_categories.php';echo$category10_fa ?>">
    </div>
    <br/>
  </div>
</form>
