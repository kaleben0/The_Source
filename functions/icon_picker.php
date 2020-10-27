<script>
$(document).ready(function() {
jQuery.expr[':'].Contains = function(a, i, m) { 
  return jQuery(a).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0; 
};
jQuery.expr[':'].contains = function(a, i, m) { 
  return jQuery(a).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0; 
};
$('#inpSearch').on('keyup',function(){
    $('#content div').not('#search-block').hide();
    var val = this.value;
    val = val.split(" ");
    var contains="";
    for(var i = 0; i < val.length;i++){
        contains.length >0?contains+=",div":'';
        contains+=":contains('"+val[i]+"')";
    }
    $('#content div'+contains).show();
});
});
</script>
</head>
<body>
<div class='icon_container'>
<section id="content">
<div id="search-block">
<input class="book_fields icon_input" type="text" id="inpSearch" placeholder="Font Awesome Search" />  
</div>
<div class="icon_results">
<?php
include 'source_db.php';
        $mysqli = new mysqli( "localhost", $username, $password, $dbname );
        $query_icon = "SELECT * FROM fa_icons ORDER BY id";
        if ( $result = $mysqli->query( $query_icon ) ) {
          while ( $row = $result->fetch_assoc() ) {
      	    $id = $row[ "id" ];
            $fa_name = $row[ "fa_name" ];
            $fa_id = $row[ "fa_name" ];
            $fa_code = $row[ "fa_code" ];
            $fa_name = str_replace('-',' ', $fa_name);           
            $fa_name = ucwords($fa_name);

            
echo "<div id='$fa_id'><div class='tooltip_copy'><div class='icon_box' ><i class='$fa_code'></i><span class='tooltiptext_copy' id='$id'>Click to Copy</span><span class='icon_name'>$fa_name</span>";
echo "<script>";
echo "$('#$fa_id').click(function () {";
echo "  copyToClipboard('$fa_code'), $('#$id').html('Copied');";
echo "});";
echo "$('#$fa_id').mouseout(function () {";
echo "  $('#$id').html('Click to Copy');";
echo "});";
echo "</script>";
echo "</div></div></div>";
        }
          $result->free();
        }
?>
</div>
</section>
</div>