<?php

	include('databaseConnection.php');
	$ref_num = $_POST['documentId'];
	$ref_num = $_POST['refId'];
	$inv_date = $_POST['dateOfInv'];
	$team_leader = $_POST['timlida'];
	$f_name = $_POST['firstPerson'];
	$s_name = $_POST['secondPerson'];
	$th_name = $_POST['thirdPerson'];
	$forth_name = $_POST['fourthPerson'];
	$fv_name = $_POST['firthPerson'];
	$six_name = $_POST['sixthPerson'];
	$sign_one = $_POST['signone'];
	$sign_two = $_POST['signtwo'];
	$sign_three = $_POST['signthree'];
	$sign_four = $_POST['signfour'];
	$sign_five = $_POST['signfive'];
	$sign_six = $_POST['signsix'];
	$method = $_POST['method'];
	$findings = $_REQUEST['findings'];
	$cause = $_REQUEST['cause'];
	$leader_sign = $_REQUEST['leadersign'];
	$leader_date = $_REQUEST['dateLeader'];
	
		$result = mysql_query("INSERT INTO analysis(form_id,reference_number,investigation_date,team_leader,first_person,second_person,third_person,fourth_person,firth_person,sixth_person,first_sign,second_sign,third_sign,fourth_sign,firth_sign,sixth_sign,methods,causes,findings,leader_date,leader_sign) 
		VALUES ('$ref_num','$ref_num','$inv_date','$team_leader','$f_name','$s_name','$th_name','$forth_name','$fv_name','$six_name','$sign_one','$sign_two','$sign_three','$sign_four','$sign_five','$sign_six','$method','$cause','$findings','$leader_date','$leader_sign')", $db);
		if (!$result) 
		{
			die("Database query failed: " . mysql_error());
		}
	include ('index.php');
?>