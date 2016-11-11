<?php 
	session_start();
	if($_POST['submit']){
		include_once('connection.php');
		$username = strip_tags($_POST['username']);
		$email = strip_tags($_POST['email']);
		$contact = strip_tags($_POST['contact']);
		$query = "INSERT INTO response(username,email,contact) VALUES('$username', '$email','$contact')";
		$result = mysqli_query($db,$query);
		if($result) {
			echo "Succesfully registered";
			header('Location: success.html');
		}
		else {
			echo "Failed to register";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<h1>Register</h1>
<form method="post" action="register.php">
	<input type="text" name = "username" placeholder="Enter username">
	<input type="email" name="email" placeholder="Enter email here">
	<input type="number" name="contact" placeholder="Enter contact here">
	<input type="submit" name="submit" value="Register">
</form>
</body>
</html>