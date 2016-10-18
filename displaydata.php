<html>
<style>


#formdesign {
	background: linear-gradient(to bottom, #FFFFFF 0%, #F6F6F6 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: 1px solid #D5D5D5;
    padding: 12px;
    position: relative;
	margin: 20px auto;
	width: 40%;
	clear: both;
	height: 34px;
}
#filter {
	-moz-box-sizing: border-box;
    background: url("img/big_search.png") no-repeat scroll 10px 10px #FFFFFF;
    box-shadow: none;
    display: block;
    font-size: 12px;
    height: 34px;
    padding: 9px 140px 9px 28px;display: block;
    font-size: 12px;
    height: 18px;
    
    width: 76%;
	border: 1px solid #DADADA;
    transition: border 0.2s linear 0s, box-shadow 0.2s linear 0s;
	
	
	float: left;
}

</style>
</style>
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
<div id="log">
</div>
<div id="formdesign">
<input type="text" name="filter" value="" id="filter" placeholder="Search Report..." autocomplete="off" />

</div>
	<table border="1" align="center" cellspacing="0" cellpadding="0" width="1200" id="resultTable" >
<thead>
	<tr bgcolor="#D3D3D3">
		<th width="25%"> <h3>Document ID<h3> </th>
		<th width="25%"><h3> Reference Number</h3></th>
		<th width="25%"><h3> Date Of Incident</h3></th>
		<th width="25%"><h3> Action </h3></th>
	
	</tr>
</thead>
<tbody>
	<?php
		include('connect.php');		
		$result = $db->prepare("SELECT * FROM form_table
			LEFT JOIN info_table ON(info_table.form_id = form_table.form_id) ORDER BY form_table.form_id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="record" align = "center">
		<td><?php echo $row['form_id']; ?></td>
		<td><?php echo $row['ref_number']; ?></td>
		<td><?php echo $row['dateofincident']; ?></td>
		
		<td ><a rel="facebox" href="displayfunction.php?id=<?php echo $row['form_id']; ?>"> view </a> | 
		<a rel="facebox" href="editIt.php?id=<?php echo $row['form_id']; ?>"> edit </a> | 
		<a rel="facebox" href="analysisCopy.php?id=<?php echo $row['form_id']; ?>"> Analysis </a>|
		<a href="delete.php?id=<?php echo $row['form_id']; ?>" class="delbutton" >delete</a></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>



</html>