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
				<table class="tg" border="1" align="center" cellspacing="0" cellpadding="0" width="1200">
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
								  
								  <th width="390" class="tg-yw4l"  align="center"><h3><?php echo $id;?></h3></th>
								  
							  </tr>
								
							</table><br>
							<table border="1" cellspacing="0" cellpadding="0" align="center">
								<tr>
									<td width= "300" height="30" align="center" bgcolor="#D3D3D3" align="center"><h3>Reference No.</h3></td>
									<td width="300" height="30" align="center"> <h3>
									  <?php echo $quary['ref_number']?>
									</h3></td>
						  </tr></br>
					  </table></br>
				<table border="1" align="center" cellspacing="0" cellpadding="0" width="1200">
					<tr bgcolor='#CCCCCC' align = 'center'>
						<td><h3>SPECIMEN MANAGEMENT</h3></td>
						<td><h3>REPORTING</h3></td>
						<td><h3>QC/ EQA</h3></td>
					</tr>
					<?php
					
						
							echo "<tr>";
							if(!empty($row['mismatch']))
								{
									$mismatch = json_decode($row['mismatch']);
									echo "<td><h3>";
									foreach($mismatch as $mismatch1){
									echo $mismatch1;echo"<br/>";
									}
									echo "</3></td>";
								}
							if(!empty($row['incorrect_results']))
								{
									$incorrect = json_decode($row['incorrect_results']);
									echo "<td><h3>";
									foreach($incorrect as $res){
									echo $res;echo"<br/>";
									}
									echo "</h3></td>";
								}
							if(!empty($row['unacceptable_results']))
								{
									$unacceptable = json_decode($row['unacceptable_results']);
									echo "<td><h3>";
									foreach($unacceptable as $resul){
									echo $resul;echo"<br/>";
									}
									echo "</h3></td>";
								}
							echo "</tr>";
						
					?>
					<tr bgcolor='#CCCCCC' align = 'center'>
						<td><h3>SUPPLIES</h3></td>
						<td><h3>COMPLAINTS</h3></td>
						<td><h3>COMPUTERS</h3></td>
					</tr>
					<?php
					
					
						
							echo "<tr>";
							if(!empty($row['external_problem']))
								{
									$problem = json_decode($row['external_problem']);
									echo "<td><h3>";
									foreach($problem as $pro){
									echo $pro;echo"<br/>";
									}
									echo "</3></td>";
								}
							if(!empty($row['clinician']))
								{
									$clinic = json_decode($row['clinician']);
									echo "<td><h3>";
									foreach($clinic as $clin){
									echo $clin;echo"<br/>";
									}
									echo "</h3></td>";
								}
							if(!empty($row['software_failure']))
								{
									$failure = json_decode($row['software_failure']);
									echo "<td><h3>";
									foreach($failure as $software){
									echo $software;echo"<br/>";
									}
									echo "</h3></td>";
								}
							echo "</tr>";
						
					?>
					<tr bgcolor='#CCCCCC' align = 'center'>
						<td><h3>EQUIPMENT</h3></td>
						<td><h3>SAFETY</h3></td>
						<td><h3>OTHERS</h3></td>
					</tr>
					<?php
					
				
						
							echo "<tr>";
							if(!empty($row['mulfunction']))
								{
									$mul = json_decode($row['mulfunction']);
									echo "<td><h3>";
									foreach($mul as $function){
									echo $function;echo"<br/>";
									}
									echo "</h3></td>";
								}
							if(!empty($row['biological']))
								{
									$biology = json_decode($row['biological']);
									echo "<td><h3>";
									foreach($biology as $bio){
									echo $bio;echo"<br/>";
									}
									echo "</h3></td>";
								}
							if(!empty($row['other']))
								{
									$other = json_decode($row['other']);
									echo "<td><h3>";
									foreach($other as $others){
									echo $others;echo"<br/>";
									}
									echo "</h3></td>";
								}
							echo "</tr>";
						
					?>
				</table><br>	
				<table border="1"  align="center" cellspacing="0" cellpadding="0" width="1200">
				
							  <tr>
								<th colspan="11" align="left" bgcolor="#D3D3D3"><h3>INFORMATION</h3></th>
							  </tr>
							  <tr>
								<td colspan="6"><h3>Date of Incident : <?php echo $rows['dateofincident']; ?>
								</h3></td>
								<td colspan="5"><h3>Time of Incident : <?php echo $rows['IncidentTime']; ?></h3></td>
							  </tr>
							  <tr>
								<td colspan="6"><h3>Laboratory Unit : <?php echo $rows['lab_unit']; ?> </h3></td>
								<td colspan="5"><h3>Site of Incident: <?php echo $rows['incidence_site']; ?> </h3></td>
							  </tr>
							  <tr>
								<td colspan="7"><h3>Name(of equipment/supply/patient) : <?php echo $rows['nameofpatient']; ?>
								</h3></td>
								<td colspan="4"><h3>Lot ID # :<?php echo $rows['lot_id']; ?>
								</h3></td>
							  </tr>
							  <tr>
								<td colspan="11"><h3>Specimen : <?php echo $rows['specimen']; ?>
								</h3></td>
							  </tr>
							  <tr>
								<td colspan="11"><h3>NCE Identified by :  <?php echo $rows['identifier']; ?></h3></td>
							  </tr>
							  <tr>
								<td colspan="5" width="500"><h3>Clinical area notified : <?php echo $rows['clinicalArea']; ?>
								</h3></td>
								<td colspan="4" width="400"><h3>Person notified : <?php echo $rows['personNotified']; ?>
								</h3></td>
								<td colspan="2" width="300"><h3>Date: <?php echo $rows['notificationDate']; ?>
								</h3></td>
							  </tr>
							  <tr>
								<td colspan="5" width="500"><h3>Incident reported to/Responsible person : <?php echo $rows['responsiblePerson']; ?>
								</h3></td>
								<td colspan="4" width="400"><h3>Name : <?php echo $rows['name']; ?>
								</h3></td>
								<td colspan="2" width="300"><h3>Date : <?php echo $rows['date_res']; ?>
								</h3></td>
							  </tr>
							  <tr>
								<td colspan="5" width="500"><h3>Report Initiated by : <?php echo $rows['report_initiator']; ?>
								</h3></td>
								<td colspan="4" width="400"><h3>Designation : <?php echo $rows['destination']; ?>
								</h3></td>
								<td colspan="2"  width="300"><h3>Sign: <?php echo $rows['sign']; ?>
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
								  <?php echo $rows['action_taken']; ?>
								</h3></td>
							</tr>
						</table><br>
			
				<?php
					$runaway = mysql_query("SELECT * FROM correcctive_review WHERE form_id='$id'",$db);
					$runs = mysql_query("SELECT * FROM corrective_actions WHERE form_id='$id'",$db);
					$query = mysql_fetch_array($runaway, MYSQL_ASSOC);
					$queries = mysql_fetch_array($runs, MYSQL_ASSOC);
					if($query['form_id']== null){
						include "supervisorview.php";
						
					}else{
						include "supervisorsection.php";
					}
				?>
	</body>
</html>