<form action="actionDbConnect.php?id=<?php echo $row['form_id']; ?>" method="POST">
						<table border="1" align="center" cellspacing="0" cellpadding="0" width="1200">
							<tr>
								<th colspan="9" bgcolor="#D3D3D3" align="left"><h3>CORRECTIVE ACTION/PREVENTIVE ACTION :</h3></th>
							</tr>
							<tr>
								<td colspan="9"><h3>
								  <?php  echo $queries['correctiveAction']; ?>
								</h3></td>
							</tr>
							<tr>
								<td colspan="5" width="400"><h3>Name: <?php  echo $queries['correctiveName']; ?>
								</h3></td>
								<td colspan="2" width="400"><h3>Date: <?php  echo $queries['correctiveDate']; ?>
								</h3></td>
								<td colspan="2" width="400"><h3>Sign: <?php  echo $queries['correctiveSign']; ?>
								</h3></td>
							</tr>
						</table><br>
						<table border="1" align="center" cellspacing="0" cellpadding="0" width="1200">
							<tr>
								<th colspan="9" bgcolor="#D3D3D3" align="left"><h3>REVIEW OF EFFECTIVENESS OF CORRECTIVE/PREVENTIVE ACTION </h3></th>
							</tr>
							<tr>
								<td colspan="9"><h3>
								  <?php  echo $query['correctiveReview']; ?>
								</h3></td>
							</tr>
							<tr>
								<td colspan="5" width="400"><h3>Name: <?php  echo $query['effectiveName']; ?>
								</h3></td>
								<td colspan="2" width="400"><h3>Date: <?php  echo $query['effectiveDate']; ?>
								</h3></td>
								<td colspan="2" width="400"><h3>Sign: <?php  echo $query['effectiveSign']; ?>
								</h3></td>
							</tr>
						</table><br>
						
				</form>