<html>
	<form action="search.php" method="POST">
		FILE NAME : <input type="text" name="name"> <p>
		<input type="submit" value="search">
	</form>
	<p>
	<h2>FILES</h2>
</html>

<?php
	$full_path = ".";
	$dir = @opendir($full_path) or die("unable to open the directory");
	while($file = readdir($dir)){
		if($file == "."||$file == ".."||$file == "1Zambia.jpg"||$file == "admin"||
		$file == "analysis.php"||$file == "apple-touch-icon.png"||$file == "apple-touch-icon-57x57-precomposed.png"||$file == "apple-touch-icon-72x72-precomposed.png"||$file == "apple-touch-icon-114x114-precomposed.png"||$file == "apple-touch-icon-144x144-precomposed.png"||
		$file == "apple-touch-icon-precomposed.png"||
		$file == "css"||$file == "analysisReport.php"||$file == "connect.php"||$file == "contact.php" || $file == "databaseConnect.php"||$file == "db_list.php"||
		$file == "designe.php"||$file == "designee.php"||$file == "footer.php"||$file == "img"||$file == "inc"||$file == "index.html"||$file == "index.php")
			
		continue;
		echo "<a href='file'>$file</a>....<a href='edit.php'?name = $file>Edit</a>....<a href='delete.php?name=$file'>Delete</a><br> ";
	}
	closedir($dir);
?>