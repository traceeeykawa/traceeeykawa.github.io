	<!DOCTYPE html>
	<html>
	<head>
		<title>login</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<style type="text/css">
body{background-image:url(welcome-picture-CY105.jpg);
	background-repeat:no-repeat;
	background-size:100%;
}
		
	</style>
	</head>
	<body>
	 	<div class="container-fluid" class="well">
	 		<nav class="navbar navbar-default ">
	 			<ul class="nav navbar-nav"> 
	 				<li><a href="care.php">Home</a></li>
	 				<li><a href="care.php">Contact Us</a></li>
	 				<li><a href="care.php">About Us</a></li>
	 			</ul>
	 		</nav>
	 	</div>
	 	<div class="row">
	 	<div class="panel panel-default col-md-4 col-md-offset-1">
	 			<div class="panel-body">
	 				<span class="glyphicon glyphicon-user"></span>
	 				<span><b>Sign in as Patient</b></span>
	 				<form action="patient.php" method="post">
	 					User name:<br>
	 					<input type="text" name="username" placeholder="Enter name" class="form-control"><br>
	 					Password:<br>
	 					<input type="Password" name="password" placeholder="Enter Password" class="form-control"><br>
	 					<input type="submit" name="submi" value="submit" class="btn btn-info">
	 						<?php include('server.php') ?>
	 				</form>
	 			</div>
	 		</div>
	 		<div class="panel panel-default col-md-4 col-md-offset-1">
	 			<div class="panel-body">
	 				<span class="glyphicon glyphicon-user"></span>
	 				<span><b>Sign up as Patient</b></span>
	 				<form method="post" action="patient.php">
	 					First name:<br>
	 					<input type="text" name="firstname" placeholder="Enter first name" class="form-control"><br>
	 					Second name:<br>
	 					<input type="text" name="secondname" placeholder="Enter second name" class="form-control"><br>
	 					User name:<br>
	 					<input type="text" name="username" placeholder="Enter user name" class="form-control"><br>
	 					Email:<br>
	 					<input type="text" name="email" placeholder="Enter email" class="form-control"><br>
	 					Contact:<br>
	 					<input type="text" name="contact" placeholder="contact" class="form-control"><br>
	 					Password:<br>
	 					<input type="password" name="pass1" placeholder="Enter password" class="form-control"><br>
	 					Confirm password:<br>
	 					<input type="password" name="pass2" placeholder="Confirm password" class="form-control"><br>
	 					<input type="submit" name="submit" value="sign up" class="btn btn-info">
	 						<?php include('server.php') ?>
	 				</form>
	 			</div>
	 		</div>
	 	</div><!--class row-->
	</body>
	</html>