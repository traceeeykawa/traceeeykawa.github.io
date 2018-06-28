<!DOCTYPE html>
<html>
<head>
	<title>welcome to care hosp</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
$conn
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> <img src="logo.jpg" width="160px">THE CARE HOSP</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">About</a></li> 
      <li><a href="#">Testimonial</a></li> 
      <li><a href="services.php">loginas</a></li>
      	<a href="services.php"><button type="submit" class="btn btn-default">Submit</button></a> 
    </ul>
  </div>
</nav>
<div >

	
<br>
<br>
<br>
<div class="panel panel-default col-md-4 col-md-offset-4">
     	<div class="panel-body">


<br>
LOGIN :

	<form role="form" action="mysql" method="post">
<div class="form-group">
 <label for=name> Name:</label>
 <input type="text" class="form-control" id=" name" >
</div>
	</form>

<br>

<form role="form" action="mysql" method="post">
    <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">

 </div> 
</form>
<br>

<form role="form" action="mysql" method="post">
	<div class="form-group">
	<label for="password">Password:</label>
	<input type="text" class="form-control" name="password" id="password" >
</div>
</form>


<br>

<form role="form" action="mysql" method="post">
	<div class="form-group">
	<label for="confirm password">confirm Password:</label>
	<input type="text" class="form-control" id="confirm password" >
</div>
</form>

<br>
</div>
</div>


</body>
</html>