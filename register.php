<?php 
session_start();
if($_POST['submit']){
	include_once('connection.php');
	$username = strip_tags($_POST['username']);
	$email = strip_tags($_POST['email']);
	$contact = strip_tags($_POST['contact']);
	$ans1 = strip_tags($_POST['ans1']);
	$ans2 = strip_tags($_POST['ans2']);
	$ans3 = strip_tags($_POST['ans3']);
	$ans4 = strip_tags($_POST['ans4']);
	$ans5 = strip_tags($_POST['ans5']);
	$query = "INSERT INTO response(username,email,contact,ans1,ans2,ans3,ans4,ans5) VALUES('$username', '$email' , '$contact' , '$ans1', '$ans2', '$ans3', '$ans4', '$ans5')";
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Cookie">
	<style type="text/css">
	body {
		font-family: Georgia, Serif;
	}
	.center {
		text-align: center;
	}
	.register {
		margin: 0 auto;
		font-size: 30px;
		border-radius: 0;

	}
	.register:hover {
		box-shadow: 0px 6px 6px 0px gray;
		background-color: #f5f5f5;
		color: #337ab7;
		border: 1px dashed #f5f5f5 ;
	}
	.form1{
		box-shadow: 0px 6px 6px 0px gray;
	}
	textarea {
		resize:none;
	}
	</style>
</head>
<body class="container">
	<div class="center">
		<h1><b>Register</b></h1><hr>
	</div>
	<form class="well form1" method="post" action="register.php">
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
		<div class="center">
    		<input name="submit" type="submit" class="btn btn-primary register" value ="Register">
    		<br/><br/>
    	</div>
	</form>
</body>
</html>