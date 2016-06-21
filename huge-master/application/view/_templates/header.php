<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Flat UI - Free Bootstrap Framework and Theme</title>
		<meta name="description" content="Flat UI Kit Free is a Twitter Bootstrap Framework design and Theme, this responsive framework includes a PSD and HTML version."/>

	<meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

		<!-- Loading Bootstrap -->
	<link href="<?php echo Config::get('URL'); ?>css/bootstrap.css" rel="stylesheet">

		<!-- Loading Flat UI -->
	<link href="<?php echo Config::get('URL'); ?>css/flat-ui.css" rel="stylesheet">

		
		<!-- Loading Font Awsome -->
	<link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/font-awesome.css">

		<!-- Loading Costum Flat UI -->
	<link href="<?php echo Config::get('URL'); ?>css/style.css" rel="stylesheet">

		 

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS t the end of file. -->
		<!--[if lt IE 9]>
			<script src="dist/js/vendor/html5shiv.js"></script>
			<script src="dist/js/vendor/respond.min.js"></script>
		<![endif]-->
</head>
<body>
	<header>
		<nav class="navbar navbar-default" role="navigation">
			<div class="box box-nav">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
							<span class="sr-only">Toggle navigation</span>
					</button>
					<a class="navbar-brand" href="index.php">Lucky4</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse-01">
					<ul class="nav navbar-nav">
						<li <?php if (View::checkForActiveController($filename, "profile")) { echo ' class="active" '; } ?> >
							<a href="<?php echo Config::get('URL'); ?>profile/index">Profiles</a>
						</li>
						<li><a href="roullete.php">Roullete</a></li>
						<li><a href="putin.php">Putin</a></li>
					</ul>
					<div class="navbar-right sign">
						<ul class="nav navbar-nav">
							<li class="sign"><a href="login.php">Sign in</a></li>
							<button class="btn btn-default navbar-btn btn-sm" type="button"><a href="register.php">Sign up</a></button>	
						</ul>
					</div>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav><!-- /navbar -->
	</header>