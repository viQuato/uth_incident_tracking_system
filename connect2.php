<?php
//Step1
	$db = mysql_connect("localhost","root",""); 
	if (!$db) {
	die("Database connection failed miserably: " . mysql_error());
	}
//Step2
	$db_select = mysql_select_db("categories",$db);
	if (!$db_select) {
	die("Database selection also failed miserably: " . mysql_error());
	}
	

?>