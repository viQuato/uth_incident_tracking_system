<html>

	<body>
		<?php
		$id=$_GET['id'];
		include ('connect2.php');
		
	

		$result = mysql_query("SELECT *
		FROM complaints
		INNER JOIN supplies ON (complaints.form_id = supplies.form_id)
		INNER JOIN report_col ON (report_col.form_id = complaints.form_id)
		INNER JOIN computer ON (complaints.form_id = computer.form_id)
		INNER JOIN complaints_by ON (complaints_by.form_id = complaints.form_id)
		INNER JOIN other ON (complaints.form_id = other.form_id)
		INNER JOIN safety ON (safety.form_id = complaints.form_id)
		INNER JOIN qc_eqa ON (complaints.form_id = qc_eqa.form_id)
		INNER JOIN equipment ON (equipment.form_id = complaints.form_id) WHERE supplies.form_id='$id'", $db);
		
		$sql = mysql_query("SELECT * FROM info_table INNER JOIN disc_action ON (info_table.form_id = disc_action.form_id) WHERE info_table.form_id = '$id'",$db);
		
		$run = mysql_query("SELECT * FROM form_table WHERE form_id='$id'",$db);
		
		$quary = mysql_fetch_array($run, MYSQL_ASSOC);
		$rows = mysql_fetch_array($sql, MYSQL_ASSOC);
		$row = mysql_fetch_array($result, MYSQL_ASSOC);
		
		if (!$result) 
			{
				die("Database query failed: " . mysql_error());
			}
		?>
			
<!DOCTYPE html>
<html>
	<head>
	

		<title>UTH Incident Tracking System</title>

		<!-- Bootstrap Core CSS -->
		
	</head>
	<body>
		<div class=\"container\">

			<div class=\"hero-unit\">
			
				<form  action= "databaseConnect.php" method="Post">
					<table class="tg" border="1" align="center" width="1200">
						<tr>
							<th width="192" rowspan="3" align="center"><img src="1Zambia.jpg" width="150" height="150" /></th>
							<th class="tg-yw4l" colspan="9" bgcolor="grey" align="center"><h3>THE UNIVERSITY TEACHING HOSPITAL LABORATORY</h3>
						    <p>&nbsp;</p></th>
							<th width="195" rowspan="3" align="center"><img src="1Zambia.jpg" width="150" height="150" /></th>
						</tr>
						<tr>
						  <th class="tg-yw4l" colspan="9" align="center"><h3>Non-Conforming Event (NCE) Report Form<h3></th>
					  </tr>
						<tr>
						  <th class="tg-yw4l" colspan="8" align="center"><h3>Document ID:</h3>  </th>
						  
						  <th width="390" class="tg-yw4l" align="center"><h3>
					      <?php echo $id ;?></h3></th>
						  
				      </tr>
						
					</table>
					<table border="1" cellspacing="0" cellpadding="0" align="center">
							<tr>
								<td width= "300" height="30" align="center" bgcolor="#D3D3D3"><h3>Reference No.</h3></td>
								<td width="300" height="30" align="center"> <h3>
								  <?php echo $quary['ref_number'];?>
                                </h3></td>
					  </tr></br>
				  </table></br>
					<table border="1" align="center" cellspacing="0" cellpadding="0" width="1200">
					  <tr>
						<td colspan="3" bgcolor="#D3D3D3"><h3>SPECIMEN MANAGEMENT</h3></td>
						<th colspan="3" bgcolor="#D3D3D3"><h3> REPORTING</h3></th>
						<th colspan="3" bgcolor="#D3D3D3"><h3> QC/ EQA</h3></th>
					  </tr>
					  <tr>
						<td colspan="3" rowspan="3" valign="top">
					  <textarea name="description"  id="description" ><?php $mismatch = json_decode($row['mismatch']);
								
								foreach($mismatch as $mismatch1){
								echo $mismatch1; 
								}
								?></textarea>
				
				    
				    </td>
						<td colspan="3" rowspan="3" valign="top">
						<h4><textarea name="description"  id="description" ><?php $incorrect = json_decode($row['incorrect_results']);
								
								foreach($incorrect as $res){
								echo $res; 
								}
								?></textarea></h4>
					
					</td>
					<td colspan="3" rowspan="3" valign="top">
						<h4><textarea name="description"  id="description" ><?php $unacceptable = json_decode($row['unacceptable_results']);
								
								foreach($unacceptable as $resul){
								echo $resul; 
								}
								?></textarea><h4>
					</td>
					  </tr>
					  <tr>
					  </tr>
					  <tr>
					  </tr>
					  <tr>
						<td colspan="3" bgcolor="#D3D3D3"><h3> SUPPLIES</h3></td>
						<td colspan="3" bgcolor="#D3D3D3"><h3> COMPLAINTS</h3></td>
						<td colspan="3" bgcolor="#D3D3D3"><h3> COMPUTER</h3></td>
					  </tr>
					  <tr>
						<td colspan="3" rowspan="3" valign="top">
							<h4><textarea name="description"  id="description" ><?php $problem = json_decode($row['external_problem']);
								
								foreach($problem as $pro){
								echo $pro; 
								}
								?></textarea><h4>
						</td>
						<td colspan="3" rowspan="3" valign="top">
							<h4><textarea name="description"  id="description" ><?php $clinic = json_decode($row['clinician']);
								
								foreach($clinic as $clin){
								echo $clin; 
								}
								?></textarea><h4>
						</td>
						<td colspan="3" rowspan="3" valign="top">
								<h4><textarea name="description"  id="description" ><?php $failure = json_decode($row['software_failure']);
								
								foreach($failure as $software){
								echo $software; 
								}
								?></textarea><h4>
						</td>
					  </tr>
					  <tr>
					  </tr>
					  <tr>
					  </tr>
					  <tr>
						<td colspan="3" bgcolor="#D3D3D3"><h3> EQUIPMENT</h3></td>
						<td colspan="3" bgcolor="#D3D3D3"><h3> SAFETY</h3></td>
						<td colspan="3" bgcolor="#D3D3D3"><h3>OTHERS</h3></td>
					  </tr>
					  <tr>
						<td colspan="3" rowspan="3" valign="top">
							<h4><textarea name="description"  id="description" ><?php $mul = json_decode($row['mulfunction']);
								
								foreach($mul as $function){
								echo $function; 
								}
								?></textarea><h4>
						
						</td>
						<td colspan="3" rowspan="3" valign="top">
							<h4><textarea name="description"  id="description" ><?php $biology = json_decode($row['biological']);
								
								foreach($biology as $bio){
								echo $bio; 
								}
								?></textarea><h4></td>
						<td colspan="3" rowspan="3" valign="top">
							<h4><textarea name="description"  id="description" ><?php $other = json_decode($row['other']);
								
								foreach($other as $others){
								echo $others; 
								}
								?></textarea><h4>
						
						</td>
					  </tr>
					  <tr>
					  </tr>
					  <tr>
					  </tr>
					</table><br>
					<table border="1"  align="center" cellspacing="0" cellpadding="0" width="1200">
						  <tr>
							<th colspan="11" align="left" bgcolor="#D3D3D3"><h3>INFORMATION</h3></th>
						  </tr>
						  <tr>
							<td colspan="6"><h3>Date of Incident : <input type="Date" name="dateOfIncident" value="<?php echo $rows['dateofincident']; ?>">
							</h3></td>
							<td colspan="5"><h3>Time of Incident : <input type="Time" name="incidentTime" value="<?php echo $rows['IncidentTime']; ?>"></h3></td>
						  </tr>
						  <tr>
							<td colspan="6"><h3>Laboratory Unit : <input type="text" value="<?php echo $rows['lab_unit']; ?>" id="reporter">
							</h3></td>
							<td colspan="5"><h3>Site of Incident : <input type="text" name="indentSite" value="<?php echo $rows['incidence_site']; ?>"></h3></td>
						  </tr>
						  <tr>
							<td colspan="7"><h3>Name(of equipment/supply/patient):<input type="text" name="nameOfPatient" value="<?php echo $rows['nameofpatient']; ?>">
							</h3></td>
							<td colspan="4"><h3>Lot#/ID #:<input type="text" name="lotId" value="<?php echo $rows['lot_id']; ?>" >
							</h3></td>
						  </tr>
						  <tr>
							<td colspan="11"><h3>Specimen : <input type="text" name="infoSpecimen" value="<?php echo $rows['specimen']; ?>" id="infoSpecimen">
							</h3></td>
						  </tr>
						  <tr>
							<td colspan="11"><h3>NCE Identified by: <input value="<?php echo $rows['identifier']; ?>" type="text" name="idetifiedBy" id="idetifiedBy">
							</h3></td>
						  </tr>
						  <tr>
							<td colspan="5" width="500"><h3>Clinical area notified? <input type="text" name="clinicalAreaIde" value=" <?php echo $rows['clinicalArea']; ?>">
							</h3></td>
							<td colspan="4" width="400"><h3>Person notified: <input type="text" name="personNotified" value ="<?php echo $rows['personNotified']; ?>"></h3></td>
							<td colspan="2" width="300"><h3>Date: <input type="Date" name="dateNotified" value="<?php echo $rows['notificationDate']; ?>" id="dateNotified">
							</h3></td>
						  </tr>
						  <tr>
							<td colspan="5" width="500"><h3>Incident reported to/Responsible person:<input type="text" name="reportedTo" id="reportedTo" value="<?php echo $rows['responsiblePerson']; ?>">
							</h3></td>
							<td colspan="4" width="400"><h3>Name: <input type="text" name="reporter" id="reporter" value="<?php echo $rows['name']; ?>">
							</h3></td>
							<td colspan="2" width="300"><h3>Date: <input type="Date" name="dateReported" id="dateReported" value="<?php echo $rows['date_res']; ?>">
							</h3></td>
						  </tr>
						  <tr>
							<td colspan="5" width="500"><h3>Report Initiated by: <input type="text" name="reportInitiater" id="reportInitiater" value="<?php echo $rows['report_initiator']; ?>">
							</h3></td>
							<td colspan="4" width="400"><h3>Designation: <input type="text" name="disignation" value=" <?php echo $rows['destination']; ?>" >
							</h3></td>
							<td colspan="2"  width="300"><h3>Sign: <input type="text" name="signature" id="signature" value="<?php echo $rows['sign']; ?>">
							</h3></td>
						  </tr>
					</table><br>
					<table border="1" align="center" cellspacing="0" cellpadding="0" width="1200">
						<tr>
							<th colspan="9" bgcolor="#D3D3D3" align="left" ><h3>DESCRIPTION OF NCE and IMMEDIATE ACTION taken</h3></th>
						</tr>
						<tr>
					    </tr>
						<tr>
							<td colspan="9"><label for="description"></label><h3>
							  <textarea name="description" rows="4" cols="100"   id="description"><?php echo $rows['action_taken']; ?></textarea>
							</h3></td>
						</tr>
					</table><br>
					
					<table class="tg"  align="center" height="50" width="100">
						<tr>
						 
						  <th width="100"class="tg-yw4l"><label for="documentId"></label>
					      
				            <h3><input type="submit" name="submit" id="submit" value="Submit"></h3>
						  </tr>
					</table>
				</form>	
				
			</div>
		</div>
	</body>
</html>