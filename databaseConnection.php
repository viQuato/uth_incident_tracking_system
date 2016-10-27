<?php
//Step1
	$db = mysqli_connect("localhost","root","");
	if (!$db) {
	die("Database connection failed miserably: " . mysql_error());
	}
//Step2
	$db_select = mysqli_select_db($db, "categories");
	if (!$db_select) {
	die("Database selection also failed miserably: " . mysql_error());
	}


?>