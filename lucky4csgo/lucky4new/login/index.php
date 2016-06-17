<?php 
	include "common/login.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="dist/css/login.css">
	<link rel="stylesheet" href="dist/css/bootstrap.css">
	<script src="https://use.fontawesome.com/7a7f3effb0.js"></script>
</head>
<body class="color">
<div class = "container">
	<div class="wrapper">
		<form action="" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="Username" placeholder="Username" required="" autofocus="" />
			  <input type="passwordlogin" class="form-control" name="Password" placeholder="Password" required=""/>     		  
			 
			 
			  <button class="btn btn-lg btn-danger btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>

			  <a href="register.php"><button class="btn btn-lg btn-primary btn-block test"  name="Register" value="Register" type="button">Register</button></a>



			  <div class="home">
			  	<a href="index.php"><i class="fa fa-home fa-4x"  aria-hidden="true"></i></a>
			  </div>
		</form>			

	</div>
</div>
</body>
</html>