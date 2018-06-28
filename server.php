<?php 
	session_start();
	$username='';
	$password='';
	$con=mysqli_connect('localhost','root','','hospital');
	if (isset($_POST['submi'])) 
	{
	 						 			# code...
		$username=mysqli_real_escape_string($con,$_POST['username']);
		$password=mysqli_real_escape_string($con,$_POST['password']);
		$com="SELECT * FROM patients WHERE username='$username' LIMIT 1";
		$com="SELECT * FROM doctor WHERE username='$username' LIMIT 1";
		
		$bb=mysqli_query($con,$com);
		$ss=mysqli_fetch_assoc($bb);
		if ($ss['username']===$username) {
	 			# code...
			echo "";
		}else{
			echo "user does not exist";
		}
		$password=md5($password);
		if ($ss['password']===$password) {
	 			# code...
			echo "succesful login";
		}
		

	}
	$firstname='';
	$secondname='';
	$username='';
	$email='';
	$contact='';
	$pass1='';
	$pass2='';
	if (isset($_POST['submit'])) {
					# code...
		$firstname=mysqli_real_escape_string($con,$_POST['firstname']);
		$secondname=mysqli_real_escape_string($con,$_POST['secondname']);
		$username=mysqli_real_escape_string($con,$_POST['username']);
		$email=mysqli_real_escape_string($con,$_POST['email']);
		$contact=mysqli_real_escape_string($con,$_POST['contact']);
		$pass1=mysqli_real_escape_string($con,$_POST['pass1']);
		$pass2=mysqli_real_escape_string($con,$_POST['pass2']);

		if (!$pass1===$pass2) {
					# code...
			echo "password mis-match";
		}
		$com="SELECT * FROM patients WHERE username='$username' LIMIT 1";
		$com="SELECT * FROM doctor WHERE username='$username' LIMIT 1";
		$bb=mysqli_query($con,$com);
		$ss=mysqli_fetch_assoc($bb);
		if ($ss['username']===$username) {
	 				# code...
			echo "user exist";
		}
		else{
			
		}
		$pass1=md5($pass1);
		$ins="INSERT INTO patients(firstname,secondname,username,email,contact,password) VALUES ('$firstname','$secondname','$username','$email','$contact','$pass1')";

		$ins="INSERT INTO doctor(firstname,secondname,username,email,contact,password) VALUES ('$firstname','$secondname','$username','$email','$contact','$pass1')";
		mysqli_query($con,$ins);
	}	
	session_destroy();
	?>