<?php

	include ('connect2.php');
	$form_id = $_POST['documentId'];
	$ref_num = $_POST['refId'];
	$inc_time = $_POST['incidentTime'];
	$inc_date = $_POST['dateOfIncident'];
	$lab_unit = $_POST['labUnit'];
	$inc_site = $_POST['indentSite'];
	$lot_id = $_POST['lotId'];
	$name_patient = $_POST['nameOfPatient'];
	$area_notified = $_POST['clinicalAreaIde'];
	$notified_person = $_POST['personNotified'];
	$date_notified = $_POST['dateNotified'];
	$reported_to = $_POST['reportedTo'];
	$reporter_name = $_POST['reporter'];
	$reported_date = $_POST['dateReported'];
	$report_iniater = $_POST['reportInitiater'];
	$dis = $_POST['disignation'];
	$sign = $_POST['signature'];
	$specimen = $_REQUEST['Specimen'];
	$identifier = $_REQUEST['idButton'];
	$desc = $_REQUEST['description'];

	
	 
	$error=''; // Variable To Store Error Message
if(isset($_POST['submit']))
{
	$result = mysql_query("INSERT INTO form_table(form_id,ref_number) 
	VALUES ('$form_id','$ref_num')", $db);
	if (!$result || empty($_POST['documentId']) || empty($_POST['refId'])) 
	{	
		header("location:index.php");
		die( mysql_error());
	}
	else
	{
	
		if(!empty($_POST['category'])){
						
				$compln = json_encode($_POST['category']);
				$result = mysql_query("INSERT INTO complaints(mismatch,form_id) 
				VALUES ('$compln','$form_id')", $db);
									
									
				if (!$result) 
				{
					die("Database query failed: " . mysql_error());
				}
			
		}

		if(!empty($_POST['report']))
		{
						
			    
				$rep = json_encode($_POST['report']);
				$result = mysql_query("INSERT INTO report_col(incorrect_results,form_id) 
				VALUES ('$rep','$form_id')", $db);
									
									
				if (!$result) 
				{
					die("Database query failed: " . mysql_error());
				}
			
		}
				
		if(!empty($_POST['QC/EQA']))
		{
			$qc_eqa = json_encode($_POST['QC/EQA']);
				$result = mysql_query("INSERT INTO qc_eqa(unacceptable_results,form_id) 
				VALUES ('$qc_eqa','$form_id')", $db);
				if (!$result) 
				{
					die("Database query failed: " . mysql_error());
				}
		}

		if(!empty($_POST['supplies']))
		{
			$sup = json_encode($_POST['supplies']);		
				$result = mysql_query("INSERT INTO supplies(external_problem,form_id) 
				VALUES ('$sup','$form_id')", $db);
									
									
				if (!$result) 
				{
					die("Database query failed: " . mysql_error());
				}
		}
		if(!empty($_POST['complaints']))
		{
			$clin = json_encode($_POST['complaints']);
				$result = mysql_query("INSERT INTO complaints_by(clinician,form_id) 
				VALUES ('$clin','$form_id')", $db);
				if (!$result) 
				{
					die("Database query failed: " . mysql_error());
				}
		}

		if(!empty($_POST['computer']))
		{
						
			$comp = json_encode($_POST['computer']);
			
				$result = mysql_query("INSERT INTO computer(software_failure,form_id) 
				VALUES ('$comp','$form_id')", $db);
									
									
				if (!$result) 
				{
					die("Database query failed: " . mysql_error());
				}
			
		}
				
		if(!empty($_POST['equipment']))
		{
			 $equip =  json_encode($_POST['equipment']);
			
				$result = mysql_query("INSERT INTO equipment(mulfunction,form_id) 
				VALUES ('$equip','$form_id')", $db);
									
									
				if (!$result) 
				{
					die("Database query failed: " . mysql_error());
				}
			
		}

		if(!empty($_POST['safety']))
		{
			$safe = json_encode($_POST['safety']);
				$result = mysql_query("INSERT INTO safety(biological,form_id) 
				VALUES ('$safe','$form_id')", $db);
									
									
				if (!$result) 
				{
					die("Database query failed: " . mysql_error());
				}
		}
		if(!empty($_POST['others']))
		{
			$other = json_encode($_POST['others']);		
			
				$result = mysql_query("INSERT INTO other(other,form_id) 
				VALUES ('$other','$form_id')", $db);
									
									
				if (!$result) 
				{
					die("Database query failed: " . mysql_error());
				}
		}
		$result = mysql_query("INSERT INTO info_table(dateofincident,incidentTime,lab_unit,incidence_site,nameofpatient,lot_id,specimen,identifier,clinicalArea,personNotified,notificationDate,responsiblePerson,name,date_res,report_initiator,destination,sign,form_id) 
		VALUES ('$inc_date','$inc_time','$lab_unit','$inc_site','$name_patient','$lot_id','$specimen','$identifier','$area_notified','$notified_person','$date_notified','$reported_to','$reporter_name','$reported_date','$report_iniater','$dis','$sign','$form_id')", $db);
		if (!$result) 
		{
			die("Database query failed: " . mysql_error());
		}
		$reslt = mysql_query("INSERT INTO disc_action(action_taken,form_id) 
		VALUES ('$desc','$form_id')", $db);
		if (!$reslt) 
		{
			die("Database query failed: " . mysql_error());
		}
		
	}

	
}
?>
 <?php
//Step5
 mysql_close($db);
 include "index.php";
?>
