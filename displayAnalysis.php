

<!DOCTYPE html>
<html>
	<head>
	

		<title>UTH Incident Tracking System</title>

		<!-- Bootstrap Core CSS -->
		
	</head>
	<body>
	<?php
		include 'header.php';
		include ('connect2.php');
		$id=$_GET['id'];
		$result = mysql_query("SELECT * FROM analysis WHERE form_id = '$id' ", $db);
		if (!$result) 
		{
			die("Database query failed: " . mysql_error());
		}
		$rows = mysql_fetch_array($result, MYSQL_ASSOC);
	?>
		<div class=\"container\">

			<div class=\"hero-unit\">
				<form  action= "analysisSave.php" method="Post">
					<table class="tg" border="1" align="center" cellspacing="0" cellpadding="0" width="1200">
							<tr>
								<th width="192" rowspan="3" align="center"><img src="1Zambia.jpg" width="150" height="150" /></th>
								<th class="tg-yw4l" colspan="9" bgcolor="grey" align="center"><h3>THE UNIVERSITY TEACHING HOSPITAL LABORATORY</h3>
								<p>&nbsp;</p></th>
								<th width="195" rowspan="3" align="center" ><img src="1Zambia.jpg" width="150" height="150" /></th>
							</tr>
							<tr>
							  <th class="tg-yw4l" colspan="9" align="center"><h3>Non-Conforming Event (NCE) Report Form<h3></th>
						  </tr>
							<tr>
							  <th class="tg-yw4l" colspan="8" align="center"><h3>Document ID:</h3>  </th>
							  
							  <th width="390" class="tg-yw4l" align="center"><h3><?php echo $rows['form_id']; ?></h3></th>
							  
						  </tr>
							
						</table><br>
						<table border="1" cellspacing="0" cellpadding="0" align="center">
							<tr>
								<td width= "300" height="30" align="center" bgcolor="#D3D3D3"><h3>Reference No.</h3></td>
								<td width="300" height="30" align="center"> <h3><?php echo $rows['reference_number']; ?> </h3></td>
					  </tr></br>
				  </table></br>
					<table width="1200" border="1" align="center" cellpadding="0" cellspacing="0">
							<tr>
									<td width= "405" height="30" align="left" bgcolor="#D3D3D3"><h3>Date of Investigation:</h3></td>
									<td width="789" height="30" > <h3>
									<?php echo $rows['investigation_date']; ?>
									</h3></td>
						  </tr>
						  <tr>
									<td width= "405" height="30" align="left" bgcolor="#D3D3D3"><h3>Team Leader:</h3></td>
									<td width="789" height="30" > <h3>
									  <?php echo $rows['team_leader']; ?>
									</h3></td>
						  </tr>
						 </table><br>
						<table border="" align="center" cellspacing="0" cellpadding="0" width="1200">
						<tr>
							<th colspan="9" bgcolor="#D3D3D3" align="left" ><h3>Investigation Team</h3></th>
						</tr>
						<tr>
							<td colspan="9">
							  <tr>
								<td width="600" align="center"><h3>Name</h3></td>
								<td width="594" align="center"><h3>Signature</h3></td>
							  </tr>
						  </td>
						</tr>
						<tr>
							<td colspan="9">
							  <tr>
								<td width="600"><h3>1.
								  <?php echo $rows['first_person']; ?>
								</h3></td>
								<td width="600"><h3>
							   <?php echo $rows['first_sign']; ?></td>
							  </h3></tr>
						  </td>
						</tr>
						<tr>
							<td colspan="9">
							  <tr>
								<td width="600"><h3>2.
								  
							   <?php echo $rows['second_person']; ?></td>
							  
								</h3></td>
								<td width="600">
							    <h3>
							   <?php echo $rows['second_sign']; ?></td>
							  </h3>
							  </tr>
						  </td>
						</tr>
						<tr>
							<td colspan="9">
							  <tr>
								<td width="600"><h3>3.
								 
							    <?php echo $rows['third_person']; ?></td>
							  
								</h3></td>
								<td width="600">
							    <h3>
							   <?php echo $rows['third_sign']; ?></td>
							  </h3></td>
							  </tr>
						  </td>
						</tr>
						<tr>
							<td colspan="9">
							  <tr>
								<td width="600"><h3>4.
								 
							     <?php echo $rows['fourth_person']; ?></td>
							  
								</h3></td>
								<td width="600">
							    <h3>
							   <?php echo $rows['fourth_sign']; ?></td>
							  </h3>
							  </tr>
						  </td>
						</tr>
						<tr>
							<td colspan="9">
							  <tr>
								<td width="600"><h3>5.
								 
							      <?php echo $rows['firth_person']; ?></td>
							  
								</h3></td>
								<td width="600">
							    <h3>
							    <?php echo $rows['firth_sign']; ?></td>
							   </h3>
							  </tr>
						  </td>
						</tr>
						<tr>
							<td colspan="9">
							  <tr>
								<td width="600"><h3>6.
								  
							    <?php echo $rows['sixth_person']; ?></td>
							  
								</h3></td>
								<td width="600">
							    <h3>
							   <?php echo $rows['sixth_sign']; ?></td>
							  </h3>
							  </tr>
						  </td>
						</tr>
					</table><br>
					<table border="" align="center" cellspacing="0" cellpadding="0" width="1200">
						<tr>
							<th colspan="9" bgcolor="#D3D3D3" align="left" ><h3>Method of Investigation</h3></th>
						</tr>
						<tr>
							<td colspan="11"><h3>
							   <?php echo $rows['methods']; ?></td>
							  </h3>
							  </td>
						  </tr>
					
					</table><br>
					<table border="1" align="center" cellspacing="0" cellpadding="0" width="1200">
						<tr>
							<th colspan="9" bgcolor="#D3D3D3" align="left" ><h3>Findings of the investigations</h3></th>
						</tr>
						<tr>
					    </tr>
						<tr>
							<td colspan="9"><h3>
							   <?php echo $rows['findings']; ?></td>
							  </h3></td>
						</tr>
					</table><br>
					<table border="1" align="center" cellspacing="0" cellpadding="0" width="1200">
						<tr>
							<th colspan="9" bgcolor="#D3D3D3" align="left" ><h3>Root cause (s)</h3></th>
						</tr>
						<tr>
					    </tr>
						<tr>
							<td colspan="9"><h3>
							   <?php echo $rows['causes']; ?></td>
							  </h3></td>
						</tr>
					</table><br>
					<table border="0" align="center" cellspacing="0" cellpadding="0" width="1200">
						<tr>
							<th colspan="9" align="left" ><table width="1200" border="0" cellpadding="0" cellspacing="0">
							  <tr>
							    <td width="367">TEAM LEADER SIGNATURE:</td>
							    <td width="354">
						        <h3>
							   <?php echo $rows['leader_sign']; ?></td>
							  </h3></td>
							    <td width="115">Date :</td>
							    <td width="354">
								<h3>
							   <?php echo $rows['leader_date']; ?></td>
							  </h3>
						      </tr>
						    </table></th>
						</tr>
					</table>
					
				</form>	
			</div>
		</div>
	</body>
	
</html>
