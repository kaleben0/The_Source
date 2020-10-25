<?php

// no direct access
if(strtolower(basename($_SERVER['PHP_SELF'])) == strtolower(basename(__FILE__))) die('No access...');


class MySQLtabledit {

   /**
    * MySQL Edit Table
	*
	* Copyright (c) 2018 Martin Meijer
	*
	* https://www.bookman.nl
	* https://sourceforge.net/projects/sql-edit-table/
	*
	* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
	* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
	* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
	* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
	* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
	* THE SOFTWARE.
	*
	*/

	var $head_1;
	var $version = 'Edit Bookmarks';

	# text
	var $text;

	# language
	var $language = 'en';

	# database settings
	var $mysqli;
	var $database;
	var $host;
	var $user;
	var $pass;

	# table of the database
	var $table;

	# the primary key of the table
	var $primary_key;

	# the fields you want to see in "list view"
	var $fields_in_list_view;
	var $edit_all = true;

	# numbers of rows/records in "list view"
	var $num_rows_list_view = 15;

	# required fields in edit or add record
	var $fields_required;

	# Fields you want to edit:
	var $fields_to_edit;

	# help text
	var $help_text;

	# visible name of the fields
	var $show_text;

	# visible name of the fields in listview
	var $show_text_listview;

	var $width_editor = '100%';
	var $width_input_fields = '500px';
	var $width_text_fields = '498px';
	var $height_text_fields = '200px';

	# warning no .htacces ('on' or 'off')
	var $no_htaccess_warning = 'on';

	var $javascript; // Thanks Jules Rommens this and other corrections.


	###########################
	function database_connect() {
	###########################

		$this->mysqli = mysqli_connect($this->host, $this->user, $this->pass, $this->database);
		if (mysqli_connect_errno()) {
			echo "Error... " . mysqli_connect_error();
			exit;
		}
		mysqli_query($this->mysqli,"set character_set_client='utf8'");
        mysqli_query($this->mysqli,"set character_set_results='utf8'");
	}



	##############################
	function database_disconnect() {
	##############################

		mysqli_close($this->mysqli);
	}




	################
	function do_it() {
	################
		include '/functions/config_categories.php';
		require_once("../lang/en.php");
		require_once("../lang/" . $this->language . ".php");

		// Don't edit everything if fields_to_edit is array
		if (is_array($this->fields_to_edit)) $this->edit_all = false;

		// head text
		if ($this->head_1) {
			$this->version = '';
		}
		else {
			$this->head_1 = $this->version;
		}

		# No cache
		if(!headers_sent()) {
			header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
			header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
			header('Cache-Control: no-store, no-cache, must-revalidate');
			header('Cache-Control: post-check=0, pre-check=0', false);
			header('Pragma: no-cache');
			header("Cache-control: private");
		}

		if (!isset($this->url_base)) $this->url_base = '.';

		# name of the script
		$break = explode('/', $_SERVER["SCRIPT_NAME"]);
		$this->url_script = $break[count($break) - 1];

		# PHP-notices... (the wrong way)
		if (!isset($_GET['mte_a'])) $_GET['mte_a'] = '';
		if (!isset($_POST['mte_a'])) $_POST['mte_a'] = '';
		if (!isset($_GET['sort'])) $_GET['sort'] = '';
		if (!isset($_GET['start'])) $_GET['start'] = '';
		if (!isset($_GET['ad'])) $_GET['ad'] = '';
		if (!isset($_GET['s'])) $_GET['s'] = '';
		if (!isset($_GET['f'])) $_GET['f'] = '';
		$this->content_deleted = '';
		$this->nav_top = '';
		$this->nav_bottom = '';
		$this->content_saved = '';


		# GO TO...
		if ($_GET['mte_a'] == 'edit') {
			$this->edit_rec();
		}
		elseif ($_GET['mte_a'] == 'new') {
			$this->edit_rec();
		}
		elseif ($_GET['mte_a'] == 'del') {
			 $this->del_rec();
		}
		elseif ($_POST['mte_a'] == 'save') {
			$this->save_rec();
		}
		else {
			$this->show_list();
		}

		$this->close_and_print();

	}




	####################
	function show_list() {
	####################

		# message after add or edit
		if (isset($_SESSION['content_saved'])) $this->content_saved = $_SESSION['content_saved'];
		$_SESSION['content_saved'] = '';

		# default sort (a = ascending)
		$ad = 'a';

		if ($_GET['sort'] && in_array($_GET['sort'],$this->fields_in_list_view,true) ) {
			if ($_GET['ad'] == 'a') $asc_des = 'ASC';
			if ($_GET['ad'] == 'd') $asc_des = 'DESC';
			$order_by = "ORDER by " . $_GET['sort'] . ' ' . $asc_des ;
		}
		else {
			$order_by = "ORDER by $this->primary_key DESC";
		}


		# navigation 1/3

		$start = 0;
		if (isset($_GET["start"])) {
			$start = $_GET["start"]*1;
		}




		// build query_string
		// navigation
		$query_string = '&start=' . $start;
		// sorting
		$query_string .= '&ad=' . $_GET['ad']  . '&sort=' . $_GET['sort'] ;
		// searching
		$query_string .= '&s=' . $_GET['s']  . '&f=' . $_GET['f'] ;


		# search
		$in_search_field = '';
		$where_search = '';
		if ($_GET['s'] && $_GET['f']) {

			$in_search = addslashes(stripslashes($_GET['s']));
			$in_search_field = $_GET['f'];

			if ($in_search_field == $this->primary_key) {
				$where_search = "WHERE $in_search_field = '$in_search' ";
			}
			else {
				$where_search = "WHERE $in_search_field LIKE '%$in_search%' ";
			}
		}

		# select
		$sql = "SELECT * FROM `$this->table` $where_search $order_by";
		$result = mysqli_query($this->mysqli, $sql);

		# navigation 2/3
		$hits_total = mysqli_num_rows($result);

		$sql .= " LIMIT $start, $this->num_rows_list_view";
		$result = mysqli_query($this->mysqli, $sql);

		if (mysqli_num_rows($result)>0) {
			$count = 0;
			$head = '';
			$rows = '';
			while ($rij = mysqli_fetch_assoc($result)) {
				$count++;
				$this_row = '';
				if (!isset($background)) $background = '';
				if ($background == '#eee') {$background='#fff';}
					else {$background='#eee';}

				foreach ($rij AS $key => $value) {

					$sort_image = '';
					if (in_array($key, $this->fields_in_list_view,true)) {
						if ($count == 1) {

							// show nice text of a value
							if ($this->show_text_listview[$key]) {$show_key = $this->show_text_listview[$key];}
								else {$show_key = $key;}

							// sorting
							if ($_GET['sort'] == $key && $_GET['ad'] == 'a') {
								$sort_image = "<img src='../images/sort_a.png' style='width:9px;height:8px' alt=''>";
								$ad = 'd';
							}
							if ($_GET['sort'] == $key && $_GET['ad'] == 'd') {
								$sort_image = "<img src='../images/sort_d.png' style='width:9px;height:8px' alt=''>";
								$ad = 'a';
							}

							// remove sort  and ad and add new ones
							$query_sort = preg_replace('/&(sort|ad)=[^&]*/','', $query_string) . "&sort=$key&ad=$ad";

							$head .= "<td nowrap><a href='$this->url_script?$query_sort' class='mte_head'>$show_key</a> $sort_image</td>";
						}
						if ($key == $this->primary_key) {
							$buttons = "<td nowrap><a href='javascript:void(0)' onclick='del_confirm($value)' title='Delete {$this->show_text_listview[$key]} $value'><img src='../images/del.png' class='icons' title='{$this->text['Delete']}'></a>&nbsp;&nbsp;<a href='?$query_string&mte_a=edit&id=$value' title='Edit {$this->show_text_listview[$key]} $value'><img src='../images/edit.png' class='icons' title='{$this->text['Edit']}'></a></td>";
							$this_row .= "<td>$value</td>";
						}
						else {

							$this_row .= '<td>' . substr(strip_tags($value), 0, 300) . '</td>';
						}
					}
				}

				$rows .= "<tr style='background:$background'>$buttons $this_row</tr>";

			}
		}
		else {
			$head = "<td style='padding:50px'>{$this->text['Nothing_found']}...</td>";
		}


		# navigation 3/3

		# remove start= from url
		$query_nav = preg_replace('/&(start|mte_a|id)=[^&]*/','', $query_string );


		# this page
		$this_page = ($this->num_rows_list_view + $start)/$this->num_rows_list_view;


		# last page
		$last_page = ceil($hits_total/$this->num_rows_list_view);


		# navigatie numbers
		if ($this_page>10) {
			$vanaf = $this_page - 10;
		}
		else {$vanaf = 1;}
		if ($last_page>$this_page + 10) {
			$tot = $this_page + 10;
		}
		else {$tot = $last_page; }

		$navigation = '';
		for ($f=$vanaf;$f<=$tot;$f++) {

			$nav_toon = $this->num_rows_list_view * ($f-1);

			if ($f == $this_page) {
				$navigation .= "<td class='mte_nav' style='color:#fff;background: #808080;font-weight: bold'>$f</td> ";
			}
			else {
				$navigation .= "<td class='mte_nav' style='background: #fff'><a href='$this->url_script?$query_nav&start=$nav_toon'>$f</a></td>";
			}
		}
		if ($hits_total<$this->num_rows_list_view) { $navigation = '';}




		# Previous if
		$last_page_html = '';
		$next_page_html = '';
		if ($this_page > 1) {
			$last =  (($this_page - 1) * $this->num_rows_list_view ) - $this->num_rows_list_view;
			$last_page_html = "<a href='$this->url_script?$query_nav&start=$last' class='mte_nav_prev_next'>{$this->text['Previous']}</a>";
		}

		# Next if:
		if ($this_page != $last_page && $hits_total>1) {
			$next =  $start + $this->num_rows_list_view;
			$next_page_html =  "<a href='$this->url_script?$query_nav&start=$next' class='mte_nav_prev_next'>{$this->text['Next']}</a>";
		}


		if ($navigation) {
			$nav_table = "
				<table cellspacing=5 cellpadding=0 style='border: 0'>
					<tr>
						<td style='padding-right:6px;vertical-align: middle'>$last_page_html</td>
						$navigation
						<td style='padding-left:6px;vertical-align: middle'>$next_page_html</td>
					</tr>
				</table>
			";

			$this->nav_top = "
				<div style='margin: -10px 0 20px 0;width: $this->width_editor'>
				<center>
					$nav_table
				</center>
				</div>
			";

			$this->nav_bottom = "
				<div style='margin: 10px 0 0 0;width: $this->width_editor'>
				<center>
					$nav_table
				</center>
				</div>
			";
		}




		# Search form + Add Record button
		$options = '';
		foreach ($this->fields_in_list_view AS $option) {

			if ($this->show_text_listview[$option]) {$show_option = $this->show_text_listview[$option];}
			else {$show_option = $option;}

			if ($option == $in_search_field) {
					$options .= "<option selected value='$option'>$show_option</option>";
				}
				else {
					$options .= "<option value='$option'>$show_option</option>";
				}
			}
		$in_search_value = htmlentities(trim(stripslashes($_GET['s'])), ENT_QUOTES, "UTF-8");



		$seach_form = "
			<table cellspacing=0 cellpadding=0 border=0>
			<tr>

				<td style='padding: 15px 15px 0px 10px;width: $this->width_editor'>
					<button onclick='window.location=\"$this->url_script?$query_string&mte_a=new\"' style='margin: 0 0 15px 0; border: 1px solid #000;'>{$this->text['Add_Record']}</button>
				</td>

				<td nowrap style='text-align: right'>
					<form method=get action='$this->url_script' style='padding: 15px'>
						<input type='text' name='s' value='$in_search_value' style='width:200px;height:24px;border: 0;' placeholder=' {$this->text['Search']}'>
						<select name='f' style='height:26px;border: 0;'>$options</select>
						<input type='submit' value='Search' style='width:40px;min-width:80px;border: 0;'>
					</form>
			";


		if ($_GET['s'] && $_GET['f']) {
			$seach_form .= "<button onclick='window.location=\"$this->url_script\"' style='margin: 0 15px 15px 0; border: 1px solid #000;'>{$this->text['Clear_search']}</button>";
		}

		$seach_form .= "
				</td>


			</tr>
			</table>
		";

		$this->javascript = "
			function del_confirm(id) {
				if (confirm('{$this->text['Delete']} record {$this->show_text_listview[$this->primary_key]} ' + id + '...?')) {
					window.location='$this->url_script?$query_string&mte_a=del&id=' + id
				}
			}
		";


		# page content
		$this->content = "
			<div style='width: $this->width_editor;background:#454545;margin:0'>$seach_form</div>
			<table cellspacing=0 cellpadding=10 style='text-align:center;margin:0 0 5px 0; width: $this->width_editor;'>
				<tr style='background:#626262; color: #fff'><td></td>$head</tr>
				$rows
			</table>
			<div style=\"line-height: 1.4em;\">

			</div>
			$this->nav_bottom

		";


	}




	##################
	function del_rec() {
	##################

		$in_id = $_GET['id'];

		if (mysqli_query($this->mysqli,"DELETE FROM $this->table WHERE `$this->primary_key` = '$in_id'")) {
			$this->content_deleted = "
				<div style='width: $this->width_editor'>
					<div style='padding: 10px; color:#fff; background: #FF8000; font-weight: bold'>Record {$this->show_text[$this->primary_key]} $in_id {$this->text['deleted']}</div>
				</div>
			";
			$this->show_list();
		}
		else {
			$this->content = "
			</div>
				<div style='padding:2px 20px 20px 20px;margin: 0 0 20px 0; background: #DF0000; color: #fff;'><h3>Error</h3>" .
				mysqli_error($this->mysqli) .
				"</div><a href='$this->url_script'>List records...</a>
			</div>";
		}

	}




	###################
	function edit_rec() {
	###################

		if (isset ($_GET['id'])) $in_id = $_GET['id'];

		# edit or new?
		if ($_GET['mte_a'] == 'edit') $edit=1;
		else $edit = 0;

		$count_required = 0;
		$rows = '';

		$result = mysqli_query($this->mysqli,"SHOW COLUMNS FROM `$this->table`");

		# get field types
		while ($rij = mysqli_fetch_assoc($result)) {
			extract($rij);
			$field_type[$Field] = $Type;
		}

		if (!$edit) {
			$rij = $field_type;
		}
		else {
			if ($edit) $where_edit = "WHERE `$this->primary_key` = $in_id";
			$result = mysqli_query($this->mysqli,"SELECT * FROM `$this->table` $where_edit LIMIT 1 ;");
			$rij = mysqli_fetch_assoc($result);
		}


		foreach ($rij AS $key => $value) {
			if ($this->edit_all) $this->fields_to_edit[] = $key;
			if (!$edit) $value = '';
			$field = '';
			$options = '';
			$style = '';
			$field_id = '';
			$readonly = '';
			$value_htmlentities = '';

			if (in_array($key, $this->fields_required,true)) {
				$count_required++;
				$style = "class='mte_req'";
				$field_id = "id='id_" . $count_required . "'";
			}
			else {
				$field_id = "id='$key'";
			}


			$field_kind = $field_type[$key];

			# different fields
			# textarea
			if (preg_match("/text/", $field_kind)) {
				$field = "<textarea name='$key' $style $field_id>$value</textarea>";
			}
			# select/options
			elseif (preg_match("/enum\((.*)\)/", $field_kind, $matches)) {
				$all_options = substr($matches[1],1,-1);
				$options_array = explode("','",$all_options);
				foreach ($options_array AS $option) {
					if ($option == $value) {
						$options .= "<option selected>$option</option>";
					}
					else {
						$options .= "<option>$option</option>";
					}
				}
				$field = "<select name='$key' $style $field_id>$options</select>";
			}
			# input
			elseif (!preg_match("/blob/", $field_kind)) {
				if (preg_match("/\(*(.*)\)*/", $field_kind, $matches)) {
					if ($key == $this->primary_key) {
						$style = "style='background:#ccc'";
						$readonly = 'readonly';
					}
					$value_htmlentities = htmlentities($value, ENT_QUOTES, "UTF-8");
					if (!$edit && $key == $this->primary_key) {

						$field = "<input type='hidden' name='$key' value=''>[auto increment]";

						// if you want to change the value of the primary_key,
						// remove the <input hidden> and use these 4 lines:
						/* *** START ***
						$result = mysqli_query ($this->mysqli, "SELECT $this->primary_key FROM $this->table ORDER BY $this->primary_key DESC LIMIT 1");
						$row = mysqli_fetch_array ($result, MYSQLI_NUM);
						$new_last_id = $row[0]+1;
						$field = "<input type='text' name='$key' value='$new_last_id'>[auto increment]";
						*** END ***
						Thanks Jules Rommens! */
					}
					else {

						if (isset($this->lookup_table[$key])) {
							if (is_array($this->lookup_table[$key])) {
								$result = mysqli_query($this->mysqli,$this->lookup_table[$key]['query']);
								if (mysqli_num_rows($result) > 0) {
									while ($menu_items = mysqli_fetch_assoc($result)) {
										$option_value = $menu_items[$this->lookup_table[$key]['option_value']];
										$option_text = $menu_items[$this->lookup_table[$key]['option_text']];
										$option_value = str_replace('"',"&quot;",$option_value);
										if (str_replace("&quot;",'"',$option_value) == $value) {
											$options .= "<option selected value=\"$option_value\">$option_text</option>";
										}
										else {
											$options .= "<option value=\"$option_value\">$option_text</option>";
										}
									}
									$field = "<select name='$key' $style $field_id>$options</select>";
								}
								$field = "<select name='$key' $style $field_id>$options</select>";

							}
						}
						else {
							$field = "<input type='text' name='$key' value='$value_htmlentities' maxlength='{$matches[1]}' $style $readonly $field_id>";
						}
					}
				}
			}


			# blob: don't show
			elseif (preg_match("/blob/", $field_kind)) {
				$field = '[<i>binary</i>]';
			}

			# make table row
			if (!isset($background)) $background = '';
			if ($background == '#eee') {$background='#fff';}
				else {$background='#eee';}
			if ($this->show_text[$key]) {$show_key = $this->show_text[$key];}
				else {
					$show_key = $key;
				}

			if ($key == $this->primary_key || in_array($key,$this->fields_to_edit,true)) {
				$rows .= "\n\n<tr style='background:$background'>\n<td><b>$show_key</b></td>\n<td>$field</td>\n<td>{$this->help_text[$key]}</td>\n</tr>";
			}
		}

		$this->javascript = "
			function submitform() {
				var ok = 0;
				for (f=1;f<=$count_required;f++) {

					var elem = document.getElementById('id_' + f);

					if(elem.options) {
						if (elem.options[elem.selectedIndex].text!=null && elem.options[elem.selectedIndex].text!='') {
							ok++;
						}
					}
					else {
						if (elem.value!=null && elem.value!='') {
							ok++;
						}
					}
				}
				//	console.log($count_required + ' ' + ok);

				if (ok == $count_required) {
					return true;
				}
				else {
					alert('{$this->text['Check_the_required_fields']}...')
					return false;
				}
			}
		";


		$this->content = "


				<div style='width: $this->width_editor;background:#454545'>

					<table cellspacing=0 cellpadding=0 style='border: 0'>
						<tr>
						<td>
							<button onclick='window.location=\"{$_SESSION['hist_page']}\";' style='margin: 20px 15px 25px 15px; border: 1px solid #000;'>{$this->text['Go_back']}</button></td>
						<td>
							<form method=post action='$this->url_script' onsubmit='return submitform()'>
							<input type='submit' value='{$this->text['Save']}' style='width: 80px;border: 1px solid #000;float:left; margin: 20px 0 25px 0'></td>
						</tr>
					</table>

				</div>

				<div style='width: $this->width_editor'>
					<table cellspacing=0 cellpadding=10 style='margin: 0'>
						$rows
					</table>
				</div>
		";

		if (!$edit) $this->content .= "<input type='hidden' name='mte_new_rec' value='1'>";

		$this->content .= "
				<input type='hidden' name='mte_a' value='save'/>
	</form>

<table border='1' class='info_table'>
  <tbody>
    <tr>
      <th>Catergories</th>
      <th>Number</th>
    </tr>
    <tr>
		<td>$category1_number</td>
		<td>$category1_name</td>
	</tr>
	<tr>
	<td>$category2_number</td>
	<td>$category2_name</td>
	</tr>
	<tr>
	<td>$category3_number</td>
	<td>$category3_name</td>
	</tr>
	<tr>
	<td>$category4_number</td>
	<td>$category4_name</td>
	</tr>
	<tr>
	<td>$category5_number</td>
	<td>$category5_name</td>
	</tr>
	<tr>
	<td>$category6_number</td>
	<td>$category6_name</td>
	</tr>
	<tr>
	<td>$category7_number</td>
	<td>$category7_name</td>
	</tr>
	<tr>
	<td>$category8_number</td>
	<td>$category8_name</td>
    </tr>
    <tr>
		<td>$category9_number</td>
		<td>$category9_name</td>
    </tr>
		<tr>
		<td>$category10_number</td>
		<td>$category10_name</td>
    </tr>
  </tbody>
</table>
		";
	}




	###################
	function save_rec() {
	###################

		if (isset ($_POST['mte_new_rec'])) $in_mte_new_rec = $_POST['mte_new_rec'];
		else $in_mte_new_rec = 0;

		$insert_fields = '';
		$insert_values = '';
		$updates = '';

		foreach($_POST AS $key => $value) {
			if ($key == $this->primary_key) {
				$in_id = $value;
				$where = "$key = $value";
			}
			if ($key != 'mte_a' && $key != 'mte_new_rec' && $key != 'option') {
				if ($in_mte_new_rec) {
					$insert_fields .= " `$key`,";
					if ($key == $this->primary_key) {
						$insert_values .= " NULL ,";
					}
					else {
						$insert_values .= " '" . addslashes(stripslashes($value)) . "',";
					}
				}
				else {
					$updates .= " `$key` = '" . addslashes(stripslashes($value)) . "' ,";
				}
			}
		}
		$insert_fields = substr($insert_fields,0,-1);
		$insert_values = substr($insert_values,0,-1);
		$updates = substr($updates,0,-1);


		# new record:
		if ($in_mte_new_rec) {
			$sql = "INSERT INTO `$this->table` ($insert_fields) VALUES ($insert_values); ";
		}
		# edit record:
		else {
			$sql = "UPDATE `$this->table` SET $updates WHERE $where LIMIT 1; ";
		}


		//echo $sql; exit;
		if (mysqli_query($this->mysqli,$sql)) {
			if ($in_mte_new_rec) {
				$saved_id = mysqli_insert_id($this->mysqli);
				$_GET['s'] = $saved_id;
				$_GET['f'] = $this->primary_key;
			}
			else {
				$saved_id = $in_id;
			}
			if ($this->show_text[$this->primary_key]) {$show_primary_key = $this->show_text[$this->primary_key];}
				else {$show_primary_key = $this->primary_key;}

			$_SESSION['content_saved'] = "
				<div style='width: $this->width_editor'>
					<div style='padding: 10px; color:#fff; background: #67B915; font-weight: bold'>Record $show_primary_key $saved_id {$this->text['saved']}</div>
				</div>
				";
			if ($in_mte_new_rec) {
				echo "<script>window.location='?start=0&f=&sort=" . $this->primary_key . "&ad=d";
				echo "'</script>";
			}
			else {
				echo "<script>window.location='" . $_SESSION['hist_page'] . "'</script>";
			}
		}
		else {
			$this->content = "
				<div style='width: $this->width_editor'>
					<div style='padding:2px 20px 20px 20px;margin: 0 0 20px 0; background: #DF0000; color: #fff;'><h3>Error</h3>" .
					mysqli_error($this->mysqli) .
					"</div><a href='{$_SESSION['hist_page']}'>{$this->text['Go_back']}...</a>
				</div>";
		}
	}




	##########################
	function close_and_print() {
	##########################


		# warning no htaccess
		$this->htaccess_warning = '';
		if (!file_exists('./.htaccess') && $this->no_htaccess_warning == 'on') {
			$this->htaccess_warning = "
				<div style='width: $this->width_editor'>
					<div class='mte_mess' style='background: #DD0000'>
						{$this->text['Protect_this_directory_with']} .htaccess
					</div>
				</div>";
		}


		# save page location
		$session_hist_page = $this->url_script . '?' . $_SERVER['QUERY_STRING'];

		// no page history on the edit page because after refresh the Go Back is useless
		if (!$_GET['mte_a']) {
			$_SESSION['hist_page'] = $session_hist_page;
		}


		echo "
			<script language='javascript'>
				$this->javascript
			</script>

			<link href='../css/mte.css' rel='stylesheet' type='text/css'>

			<style type='text/css'>
				.mte_content input {
					width: $this->width_input_fields;
				}
				.mte_content textarea {
					width: $this->width_text_fields;
					height: $this->height_text_fields;
				}
			</style>

			<div class='mte_content'>
				<div class='mte_head_1'><a href='$this->url_script'>
				$this->head_1</a></div>
				$this->nav_top
				$this->htaccess_warning
				$this->content_saved
				$this->content_deleted
				$this->content
			</div>
		";

	}
}
?>
