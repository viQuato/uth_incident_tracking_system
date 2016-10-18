<form action="actionDbConnect.php?id=<?php echo $row['form_id']; ?>" method="POST">
						<table border="1" align="center" cellspacing="0" cellpadding="0" width="1200">
							<tr>
								<th colspan="9" bgcolor="#D3D3D3" align="left"><h3>CORRECTIVE ACTION/PREVENTIVE ACTION :</h3></th>
							</tr>
							<tr>
								<td colspan="9"><label for="correctiveAction"></label>							  <h3>
								  <textarea name="correctiveReview" id="correctiveAction"></textarea>
								</h3></td>
							</tr>
							<tr>
								<td colspan="5" width="400"><h3>Name: <input type="text" name="correctiveName" id="correctiveName">
								</h3></td>
								<td colspan="2" width="400"><h3>Date: <input type="Date" name="correctiveDate" id="correctiveDate">
								</h3></td>
								<td colspan="2" width="400"><h3>Sign: <input type="text" name="correctiveSign" id="correctiveSign">
								</h3></td>
							</tr>
						</table><br>
						<table border="1" align="center" cellspacing="0" cellpadding="0" width="1200">
							<tr>
								<th colspan="9" bgcolor="#D3D3D3" align="left"><h3>REVIEW OF EFFECTIVENESS OF CORRECTIVE/PREVENTIVE ACTION </h3></th>
							</tr>
							<tr>
								<td colspan="9"><label for="correctiveAction"></label>							  <h3>
								  <textarea name="correctiveAction" id="correctiveAction"></textarea>
								</h3></td>
							</tr>
							<tr>
								<td colspan="5" width="400"><h3>Name: <input type="text" name="effectiveName" id="effectiveName">
								</h3></td>
								<td colspan="2" width="400"><h3>Date: <input type="Date" name ="effectiveDate" id="effectiveDate">
								</h3></td>
								<td colspan="2" width="400"><h3>Sign: <input type="text" name="effectiveSign" id="effectiveSign">
								</h3></td>
							</tr>
						</table><br>
						<table class="tg"  align="center" height="50" width="100">
							<tr>
							 
							  <th width="100"class="tg-yw4l"><label for="documentId"></label>
							  
								<h3><input type="submit" name="submit" value="SAVE"></h3>
							  </tr>
					</table>
				</form>