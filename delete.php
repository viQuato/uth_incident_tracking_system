<?php
	include('databaseConnection.php');
	$id=$_GET['id'];
	
	$result = mysql_query("DELETE FROM complaints WHERE complaints.form_id = '$id'");
	if (!$result) {
	die("Database selection also failed miserably: " . mysql_error());
	}
	
	$run = mysql_query("DELETE FROM complaints_by WHERE complaints_by.form_id = '$id'");
	if (!$run) {
	die("Database selection also failed miserably: " . mysql_error());
	}
	$res = mysql_query("DELETE FROM other WHERE other.form_id = '$id'");
	if (!$res) {
	die("Database selection also failed miserably: " . mysql_error());
	}
	
	$quary = mysql_query("DELETE FROM analysis WHERE analysis.form_id = '$id'");
	if (!$quary) {
	die("Database selection also failed miserably: " . mysql_error());
	}
	
	$rt = mysql_query("DELETE FROM info_table WHERE info_table.form_id = '$id'");
	if (!$rt) {
	die("Database selection also failed miserably: " . mysql_error());
	}
	
	$rets = mysql_query("DELETE FROM qc_eqa WHERE qc_eqa.form_id = '$id'");
	if (!$rets) {
	die("Database selection also failed miserably: " . mysql_error());
	}
	
	$rlts = mysql_query("DELETE FROM report_col WHERE report_col.form_id = '$id'");
	if (!$rlts) {
	die("Database selection also failed miserably: " . mysql_error());
	}
	
	$reslts = mysql_query("DELETE FROM computer WHERE computer.form_id = '$id'");
	if (!$reslts) {
	die("Database selection also failed miserably: " . mysql_error());
	}
	
	$results = mysql_query("DELETE FROM disc_action WHERE disc_action.form_id = '$id'");
	if (!$results) {
	die("Database selection also failed miserably: " . mysql_error());
	}
	
	$resuts = mysql_query("DELETE FROM equipment WHERE equipment.form_id = '$id'");
	if (!$resuts) {
	die("Database selection also failed miserably: " . mysql_error());
	}
	
	$sult = mysql_query("DELETE FROM correcctive_review WHERE correcctive_review.form_id = '$id'");
	if (!$sult) {
	die("Database selection also failed miserably: " . mysql_error());
	}
	$go = mysql_query("DELETE FROM safety WHERE safety.form_id = '$id'");
	if (!$go) {
	die("Database selection also failed miserably: " . mysql_error());
	}
	
	$runaway = mysql_query("DELETE FROM supplies WHERE supplies.form_id = '$id'");
	if (!$runaway) {
	die("Database selection also failed miserably: " . mysql_error());
	}
	$rt = mysql_query("DELETE FROM corrective_actions WHERE corrective_actions.form_id = '$id'");
	if (!$rt) {
	die("Database selection also failed miserably: " . mysql_error());
	}
	
	$sql = mysql_query("DELETE FROM form_table WHERE form_table.form_id = '$id'");
	if (!$sql) {
	die("Database selection also failed miserably: " . mysql_error());
	}
	include "index.php";
	
?>