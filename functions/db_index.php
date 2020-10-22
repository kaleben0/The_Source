<?php

session_start();
require_once("../plugins/mte/mte.php");
$tabledit = new MySQLtabledit();



		#####################
		# required settings #
		#####################


# database settings:
$tabledit->database = 'the_source';
$tabledit->host = 'localhost';
$tabledit->user = 'source';
$tabledit->pass = 'IamTheSource69';


# table of the database you want to edit:
$tabledit->table = 'bookmark';


# the primary key of the table (must be AUTO_INCREMENT):
$tabledit->primary_key = 'id';


# the fields you want to see in "list view"
# Always add the primary key (`employeeNumber)`:
$tabledit->fields_in_list_view = array('id','letter','category','url','fonta','subcategory','title','status','favorite');



		#####################
		# optional settings #
		#####################


# Head of the page (<h1>head_1<h1>):
$tabledit->head_1 = "";


# language (en=English, de=German, fr=French, nl=Dutch, sv=Swedish):
$tabledit->language = 'en';


# numbers of rows/records in "list view":
$tabledit->num_rows_list_view = 50;


# required fields in edit or add record:
$tabledit->fields_required = array('letter','category','url','fonta','subcategory','title','status','favorite');


# Fields you want to edit (remove this to edit all the fields).
# $tabledit->fields_to_edit = array('lastName','email','job');


# help texts:
$tabledit->help_text = array(
	'active' => 'Active user, yes or no?',
	'firstName' => '',
	'lastName' => '',
	'email' => '',
	'job' => 'These are values from table `jobs`'
);


# visible name of the fields:
$tabledit->show_text = array(
	'id' => 'ID',
	'letter' => 'First Letter',
	'category' => 'Category',
	'url' => 'URL',
	'fonta' => 'Font Awesome',
	'subcategory' => 'Subcategory',
	'title' => 'Title',
	'status' => 'Status (enabled/disabled)',
	'favorite' => 'Favorite (yes/no)',
);


# visible name of the fields in list view:
$tabledit->show_text_listview = array(
	'id' => 'ID',
	'letter' => 'First Letter',
	'category' => 'Category',
	'url' => 'URL',
	'fonta' => 'Font Awesome',
	'subcategory' => 'Subcategory',
	'title' => 'Title',
	'status' => 'Status',
	'favorite' => 'Favorite',
);


# Make selectlist on inputfield based on another table
# in this example: `employees`.`job` is based on `jobs`.`jobname`:
$tabledit->lookup_table = array(
	'category' => array(
		'query' => "SELECT `id`, `type` FROM `category`;",
		'option_value' => 'type',
		'option_text' => 'type'
	)
);


$tabledit->width_editor = '100%';
$tabledit->width_input_fields = '500px';
$tabledit->width_text_fields = '498px';
$tabledit->height_text_fields = '50px';


# warning no .htaccess ('on' or 'off'):
$tabledit->no_htaccess_warning = 'off';



		####################################
		# connect, show editor, disconnect #
		####################################


$tabledit->database_connect();

echo "<!DOCTYPE html>
<html lang='en'>
<head>

	<meta charset='utf-8'>

	<title>Edit Bookmarks</title>
	</head>
	<body>
";

$tabledit->do_it();

echo "
	</body>
	</html>"
;

$tabledit->database_disconnect();
?>
