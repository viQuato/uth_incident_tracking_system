<?php

include('databaseConnection.php');
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


$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    $result = mysql_query("INSERT INTO form_table(ref_number) 
	VALUES ('$ref_num')", $db);
    if (!$result || empty($_POST['refId'])) {
        header("location:index.php");
        die(mysql_error());
    } else {

        if (!empty($_POST['category'])) {

            $compln = json_encode($_POST['category']);
            $result = mysql_query("INSERT INTO complaints(mismatch,ref_number) 
				VALUES ('$compln','$ref_num')", $db);


            if (!$result) {
                die("Database query failed: " . mysql_error());
            }

        }

        if (!empty($_POST['report'])) {


            $rep = json_encode($_POST['report']);
            $result = mysql_query("INSERT INTO report_col(incorrect_results,ref_number) 
				VALUES ('$rep','$ref_num')", $db);


            if (!$result) {
                die("Database query failed: " . mysql_error());
            }

        }

        if (!empty($_POST['QC/EQA'])) {
            $qc_eqa = json_encode($_POST['QC/EQA']);
            $result = mysql_query("INSERT INTO qc_eqa(unacceptable_results,ref_number) 
				VALUES ('$qc_eqa','$ref_num')", $db);
            if (!$result) {
                die("Database query failed: " . mysql_error());
            }
        }

        if (!empty($_POST['supplies'])) {
            $sup = json_encode($_POST['supplies']);
            $result = mysql_query("INSERT INTO supplies(external_problem,ref_number) 
				VALUES ('$sup','$ref_num')", $db);


            if (!$result) {
                die("Database query failed: " . mysql_error());
            }
        }
        if (!empty($_POST['complaints'])) {
            $clin = json_encode($_POST['complaints']);
            $result = mysql_query("INSERT INTO complaints_by(clinician,ref_number) 
				VALUES ('$clin','$ref_num')", $db);
            if (!$result) {
                die("Database query failed: " . mysql_error());
            }
        }

        if (!empty($_POST['computer'])) {

            $comp = json_encode($_POST['computer']);

            $result = mysql_query("INSERT INTO computer(software_failure,ref_number) 
				VALUES ('$comp','$ref_num')", $db);


            if (!$result) {
                die("Database query failed: " . mysql_error());
            }

        }

        if (!empty($_POST['equipment'])) {
            $equip = json_encode($_POST['equipment']);

            $result = mysql_query("INSERT INTO equipment(mulfunction,ref_number) 
				VALUES ('$equip','$ref_num')", $db);


            if (!$result) {
                die("Database query failed: " . mysql_error());
            }

        }

        if (!empty($_POST['safety'])) {
            $safe = json_encode($_POST['safety']);
            $result = mysql_query("INSERT INTO safety(biological,ref_number) 
				VALUES ('$safe','$ref_num')", $db);


            if (!$result) {
                die("Database query failed: " . mysql_error());
            }
        }
        if (!empty($_POST['others'])) {
            $other = json_encode($_POST['others']);

            $result = mysql_query("INSERT INTO other(other,ref_number) 
				VALUES ('$other','$ref_num')", $db);


            if (!$result) {
                die("Database query failed: " . mysql_error());
            }
        }
        $result = mysql_query("INSERT INTO info_table(dateofincident,incidentTime,lab_unit,incidence_site,nameofpatient,lot_id,specimen,identifier,clinicalArea,personNotified,notificationDate,responsiblePerson,name,date_res,report_initiator,destination,sign) 
		VALUES ('$inc_date','$inc_time','$lab_unit','$inc_site','$name_patient','$lot_id','$specimen','$identifier','$area_notified','$notified_person','$date_notified','$reported_to','$reporter_name','$reported_date','$report_iniater','$dis','$sign')", $db);
        if (!$result) {
            die("Database query failed: " . mysql_error());
        }
        $reslt = mysql_query("INSERT INTO disc_action(action_taken) 
		VALUES ('$desc')", $db);
        if (!$reslt) {
            die("Database query failed: " . mysql_error());
        }

    }


}
?>
<?php
//Step5
mysqli_close($db);
include "index.php";
?>
