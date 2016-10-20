

<!DOCTYPE html>
<html>
	<head>
	

		<title>UTH Incident Tracking System</title>

		<!-- Bootstrap Core CSS -->
		
	</head>
	<body>
	<?php
		include 'header.php';
	?>
		<div class=\"container\">

			<div class=\"hero-unit\">
				<form  action= "analysisSave.php" method="Post">
					<table class="tg" border="1" align="center" cellspacing="0" cellpadding="0" width="1200">
							<tr>
								<th width="192" rowspan="3" ><img src="1Zambia.jpg" width="150" height="150" /></th>
								<th class="tg-yw4l" colspan="9" bgcolor="grey"><h3>THE UNIVERSITY TEACHING HOSPITAL LABORATORY </h3>
								<p>&nbsp;</p></th>
								<th width="195" rowspan="3" ><img src="1Zambia.jpg" width="150" height="150" /></th>
							</tr>
							<tr>
							  <th class="tg-yw4l" colspan="9" ><h3>Non-Conforming Event (NCE) Report Form<h3></th>
						  </tr>
							<tr>
							  <th class="tg-yw4l" colspan="8" ><h3>Document ID:</h3>  </th>
							  
							  <th width="390" class="tg-yw4l"><label for="documentId">
							  <input type="text" name="documentId"  ></th>
							  
						  </tr>
							
						</table><br>
						<table border="1" cellspacing="0" cellpadding="0" align="center">
							<tr>
								<td width= "300" height="30" align="center" bgcolor="#D3D3D3"><h3>Reference No.</h3></td>
								<td width="300" height="30" > <h3>
								 <input type="text" name="refId" id="refId">
                                </h3></td>
					  </tr></br>
				  </table></br>
					<table width="1200" border="1" align="center" cellpadding="0" cellspacing="0">
							<tr>
									<td width= "405" height="30" align="left" bgcolor="#D3D3D3"><h3>Date of Investigation:</h3></td>
									<td width="789" height="30" > <h3>
									  <input type="date" name="dateOfInv" id="dateOfInv">
									</h3></td>
						  </tr>
						  <tr>
									<td width= "405" height="30" align="left" bgcolor="#D3D3D3"><h3>Team Leader:</h3></td>
									<td width="789" height="30" > <h3>
									  <input type="text" name="timlida" id="timlida">
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
								<td width="600"><h3>Name</h3></td>
								<td width="594"><h3>Signature</h3></td>
							  </tr>
						  </td>
						</tr>
						<tr>
							<td colspan="9">
							  <tr>
								<td width="600"><h3>1.
								  <input type="text" name="firstPerson" id="teamName1">
								</h3></td>
								<td width="600">
							    <input type="text" name="signone" id="teamName1sign"></td>
							  </tr>
						  </td>
						</tr>
						<tr>
							<td colspan="9">
							  <tr>
								<td width="600"><h3>2.
								  <input type="text" name="secondPerson" id="teamName2">
								</h3></td>
								<td width="600">
							    <input type="text" name="signtwo" id="teamNam21sign"></td>
							  </tr>
						  </td>
						</tr>
						<tr>
							<td colspan="9">
							  <tr>
								<td width="600"><h3>3.
								  <input type="text" name="thirdPerson" id="teamName3">
								</h3></td>
								<td width="600">
							    <input type="text" name="signthree" id="teamName3sign"></td>
							  </tr>
						  </td>
						</tr>
						<tr>
							<td colspan="9">
							  <tr>
								<td width="600"><h3>4.
								  <input type="text" name="fourthPerson" id="teamName4">
								</h3></td>
								<td width="600">
							    <input type="text" name="signfour" id="teamName4sign"></td>
							  </tr>
						  </td>
						</tr>
						<tr>
							<td colspan="9">
							  <tr>
								<td width="600"><h3>5.
								  <input type="text" name="firthPerson" id="teamName5">
								</h3></td>
								<td width="600">
							    <input type="text" name="signfive" id="teamName5sign"></td>
							  </tr>
						  </td>
						</tr>
						<tr>
							<td colspan="9">
							  <tr>
								<td width="600"><h3>6.
								  <input type="text" name="sixthPerson" id="teamName6">
								</h3></td>
								<td width="600">
							    <input type="text" name="signsix" id="teamName6sign"></td>
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
							    <input type="radio" name="method" id="brain" checked = "0/1" value="Brainstorming">Brainstorming
							  <input type="radio" name="method" id="whys" value="Whys">Whys
							  <input type="radio" name="method" id="staff" value="Staff Interviews">Staff Interviews
							  <input type="radio" name="method" id="fishdone" value="Fishbone diagram">Fishbone diagram
							  </h3><br>
							  <h3>(Attach evidence where necessary):<input type="file" name="evidenceFile"><h3>
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
							  <textarea name="findings" rows="4" cols="100" id="findings"></textarea>
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
							  <textarea name="cause" rows="4" cols="100" id="causes"></textarea>
							</h3></td>
						</tr>
					</table><br>
					<table border="0" align="center" cellspacing="0" cellpadding="0" width="1200">
						<tr>
							<th colspan="9" align="left" ><table width="1200" border="0" cellpadding="0" cellspacing="0">
							  <tr>
							    <td width="367">TEAM LEADER SIGNATURE:</td>
							    <td width="354">
						        <input type="text" name="leadersign" id="leadersign"></td>
							    <td width="115">Date :</td>
							    <td width="354">
						        <input type="date" name="dateLeader" id="dateLeader"></td>
						      </tr>
						    </table></th>
						</tr>
					</table>
					<table class="tg"  align="center" height="50" width="100">
						<tr>
						 
						  <th width="100"class="tg-yw4l"><label for="documentId"></label>
					      
				            <h1><input type="submit" name="submit" id="submit" value="Submit"></h1>
						  </tr>
					</table>
				</form>	
			</div>
		</div>
	</body>
	<?php
		include 'footer.php';
	?>
</html>
