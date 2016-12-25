<?php
		session_start();
		if (isset($_SESSION['id'])){
		include_once('connection.php');
		$query = "SELECT * FROM response";
		$result = mysqli_query($db,$query);
		if($result) {
			echo "<h1 class='center'>Responses</h1><hr>";
			echo "<table id='hor-zebra'>";
			echo "<thead>
		    		<tr>
		        		<th scope='col'>S no.</th>
		            	<th scope='col'>Name</th>
		            	<th scope='col'>Email</th>
		            	<th scope='col'>Contact no.</th>
		            	<th scope='col'>Answer 1</th>
		            	<th scope='col'>Answer 2</th>
		            	<th scope='col'>Answer 3</th>
		            	<th scope='col'>Answer 4</th>
		            	<th scope='col'>Answer 5</th>
		        	</tr>
	    		</thead>";
			$ctr=0;
			while($row = mysqli_fetch_array($result)){
				++$ctr;
				if($ctr%2!=0) {
				echo "<tr class='odd'><td>".$ctr."</td><td>".$row['username']."</td><td>" .$row['email']."</td><td>" . $row['contact']."</td><td>".$row['ans1']."</td><td>".$row['ans2']."</td><td>".$row['ans3']."</td><td>".$row['ans4']."</td><td>".$row['ans5']."</td></tr>";
				}
				else {
					echo "<tr><td>".$ctr."</td><td>".$row['username']."</td><td>" .$row['email']."</td><td>" . $row['contact']."</td><td>".$row['ans1']."</td><td>".$row['ans2']."</td><td>".$row['ans3']."</td><td>".$row['ans4']."</td><td>".$row['ans5']."</td></tr>";
				}
			}  
			echo "</table>";
		}
	}
	else {
		header('Location: admin.php');
		die();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Responses</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/table.css">
</head>
<body>
<form action="logout.php" style="position:absolute;left:93.5%;top:5%">
	<input type="submit" name="logout" value="Logout" class="btn btn-primary"> 
</form>
</body>
</html>