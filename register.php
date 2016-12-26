<?php 
session_start();
if($_POST['submit']){
	include_once('connection.php');
	$username = strip_tags($_POST['username']);
	$email = strip_tags($_POST['email']);
	$contact = strip_tags($_POST['contact']);
	$course = strip_tags($_POST['course']);
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
	<title>TEDxMSIT | Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
	<link rel='shortcut icon' href='img/favicon.ico' type='image/x-icon'/ >
</head>
<body class="container">
	<div class="center white">
		<h1>Register</h1>
	</div>
	<form class="well form1 panel panel-default dshadow" method="post" action="register.php">
		<div class="form-group col-md-6">
			<label for="exampleInputName1">Name</label>
			<input type="text" name ="username" class="form-control" placeholder="Enter your name" required >
			<small id="nameHelp" class="form-text text-muted">So that we know what to write on your admit card.</small>
		</div>
		<div class="form-group col-md-6">
			<label for="exampleInputEmail1">Email address</label>
			<input type="email" name ="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
			<small id="emailHelp" class="form-text text-muted">So that we can send you your flashy invite later.</small>
		</div>
		<div class="form-group col-md-6">
			<label for="example-tel-input">Contact no.</label>
			<input class="form-control" type="tel" name = "contact" placeholder="9876543210" id="example-tel-input" required>
			<small id="contactHelp" class="form-text text-muted">So that we can call you to come over once everything is ready.</small>
		</div>
		<div class="form-group col-md-6">
			<label for="example-tel-input">Course Name</label>
			<input class="form-control" type="text" name = "course" placeholder="B.tech CSE 5th Sem" id="example-course-input" required>
			<small id="courseHelp" class="form-text text-muted">So that we know what sort of crowd we are expecting.</small>
		</div>
		<div class="col-md-12"></div>
		<div class="form-group col-md-12">
			<label for="exampleTextarea">Question 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</label>
			<textarea class="form-control" id="exampleTextarea1" rows="3" name ="ans1" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit." required></textarea>
		</div>
		<br/>
		<div class="form-group col-md-12">
			<label for="exampleTextarea">Question 2: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</label>
			<textarea class="form-control" id="exampleTextarea2" rows="3" name ="ans2" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit." required></textarea>
		</div>
		<br/>
		<div class="form-group col-md-12">
			<label for="exampleTextarea">Question 3: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</label>
			<textarea class="form-control" id="exampleTextarea3" rows="3" name ="ans3" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit." required></textarea>
		</div>
		<br/>
		<div class="form-group col-md-12">
			<label for="exampleTextarea">Question 4: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</label>
			<textarea class="form-control" id="exampleTextarea4" rows="3" name ="ans4" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit." required></textarea>
		</div>
		<br/>
		<div class="form-group col-md-12">
			<label for="exampleTextarea">Question 5: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ?</label>
			<textarea class="form-control" id="exampleTextarea5" rows="3" name ="ans5" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit." required></textarea>
		</div>
		<br/>
		<div class="center">
    		<input name="submit" type="submit" class="btn btn-primary register" value ="Register">
 
    	</div>
	</form>
</body>
</html>