<?php
	include_once('connection.php');
	$query = "SELECT * FROM response";
	$result = mysqli_query($db,$query);
	if($result) {
		echo "<h1>Responses</h1><hr>";
		echo "<table>";
		while($row = mysqli_fetch_array($result)){
			echo "<tr><td>".$row['username']."</td><td>" .$row['email']."</td><td>" . $row['contact']."</td></tr>";
		}  
		echo "</table>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Responses</title>
	<style type="text/css">
		table, td {
		   border: 1px solid #000000;
		}
	</style>
</head>
<body>
</body>
</html>