<?php 
	include "common/login.php";
	include "common/header.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="dist/css/login.css">
	<script src="https://use.fontawesome.com/7a7f3effb0.js"></script>
</head>
<body>
<div id="wrapper">
	<form autocomplete="off">
		<div class="input-wrapper">
			<label for="username"><i class="fa fa-user fa-2x"></i></label><input type="text" id="username" placeholder="Username" spellcheck="false">
		</div>
		<div class="input-wrapper">
			<label for="password"><i class="fa fa-lock fa-2x"></i></label><input type="password" id="password" placeholder="Password">
		</div>
		<div class="input-wrapper">
			<input type="submit" value="Sign In">
		
		</div>
	</form>
</div>
</body>
</html>
