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
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Cookie">
	<style type="text/css">
	body {
		font-family: Georgia, Serif;
	}
	.center {
		text-align: center;
	}
	textarea {
		resize:none;
	}
	</style>
</head>
<body>
	<div class="center">
		<h1><b>Register</b></h1>
	</div>
	<form class="container" method="post" action="register.php">
		<hr>
		<div class="form-group">
			<label for="exampleInputName1">Name</label>
			<input type="text" name ="username" class="form-control" placeholder="Enter your name">
			<small id="nameHelp" class="form-text text-muted">So that we know what to write on your admit card.</small>
		</div>
		<div class="form-group">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" name ="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			<small id="emailHelp" class="form-text text-muted">So that we can send you your flashy invite later.</small>
		</div>
		<div class="form-group">
			<label for="example-tel-input">Contact no.</label>
			<input class="form-control" type="tel" name = "contact" placeholder="9876543210" id="example-tel-input">
			<small id="contactHelp" class="form-text text-muted">So that we can call you to come over once everything is ready.</small>
		</div> 
		<div class="form-group">
			<label for="exampleTextarea">Question 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</label>
			<textarea class="form-control" id="exampleTextarea1" rows="3" name ="ans1" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit."></textarea>
		</div>
		<br/>
		<div class="form-group">
			<label for="exampleTextarea">Question 2: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</label>
			<textarea class="form-control" id="exampleTextarea2" rows="3" name ="ans2" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit."></textarea>
		</div>
		<br/>
		<div class="form-group">
			<label for="exampleTextarea">Question 3: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</label>
			<textarea class="form-control" id="exampleTextarea3" rows="3" name ="ans3" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit."></textarea>
		</div>
		<br/>
		<div class="form-group">
			<label for="exampleTextarea">Question 4: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</label>
			<textarea class="form-control" id="exampleTextarea4" rows="3" name ="ans4" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit."></textarea>
		</div>
		<br/>
		<div class="form-group">
			<label for="exampleTextarea">Question 5: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</label>
			<textarea class="form-control" id="exampleTextarea5" rows="3" name ="ans5" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit."></textarea>
		</div>
		<br/>
		<input name="submit" type="submit" class="btn btn-primary" value ="Register">
	</form>
</body>
</html>