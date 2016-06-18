<?php 
	include "common/login.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="dist/css/login.css">
	<link rel="stylesheet" href="dist/css/bootstrap.css">
	<script src="https://use.fontawesome.com/7a7f3effb0.js"></script>

</head>
<body class="color">
<div class = "container">
	<div class="wrapper">
		<form action="" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Please Create Account</h3>
			  <hr class="colorgraph"><br>
			  
			  <input type="text" class="form-control" name="Username" placeholder="Username" required="" autofocus="" />

			  <input type="password" class="form-control" name="Password" placeholder="Password" required=""/>     

			  <input type="repeatpassword" class="form-control" name="repeatPassword" placeholder="Repeat Password" required=""/>  

			  <input type="email" class="form-control" name="email" placeholder="Email" required=""/>        
			 
			  <button class="btn btn-lg btn-danger btn-block"  name="Submit" value="Register" type="Submit">Register</button>


			  <div class="arrowleft">
			  	<a href="login.php"><i class="fa fa-arrow-left fa-4x"  aria-hidden="true"></i></a>
			  </div>

			  	
		</form>			
	</div>
</div>
</body>
</html>