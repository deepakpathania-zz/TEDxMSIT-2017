<?php
session_start();

if($_POST['submit']) {
	include_once('connection.php');
	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);
	if($username == "" && $password == "") {
		echo "<b><i>correct credentials</i><b>";
		$_SESSION['id'] = 1;
		header('Location: responses.php');
	}
	else {
		echo "<b><i>Incorrect credentials</i><b>";

	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<h1>Login</h1>
<form method="post" action="admin.php">
	<input type="text" name = "username" placeholder="Enter username">
	<input type="password" name="password" placeholder="Enter password here">
	<input type="submit" name="submit" value="Login">
</form>
</body>
</html>