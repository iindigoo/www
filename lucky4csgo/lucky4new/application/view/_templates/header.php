<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bootstrap 101 Template</title>

	<!-- Bootstrap -->
	<link href="<?php echo Config::get('URL'); ?>css/bootstrap.css" rel="stylesheet">

	<!-- Style -->
	<link href="<?php echo Config::get('URL'); ?>css/style.css" rel="stylesheet">

	<!-- Font-Awsome -->
	<link href="<?php echo Config::get('URL'); ?>css/font-awesome.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container-fluid container">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo Config::get('URL'); ?>index/index">Lucky4</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class=""><a href="<?php echo Config::get('URL'); ?>tickets/index">Free tickets</a></li>
				<li><a href="<?php echo Config::get('URL'); ?>roulette/index">Roulette</a></li>
				<li><a href="#">Depoist</a></li>
				<li><a href="#">Market</a></li>
			</ul>
			 
			<ul class="nav navbar-nav navbar-right">
				<?php if (Session::userIsLoggedIn()) { ?>
				<li><a href="" id="ticketsValue"> </a></li>
				<?php } else { ?>
				<!-- for not logged in users -->
				<li <?php if (View::checkForActiveControllerAndAction($filename, "login/index")) { echo ' class="active" '; } ?> >
				<a href="<?php echo Config::get('URL'); ?>login/index">Login</a>
				</li> 
				<?php } ?>
				<li class="dropdown">

				<?php if (Session::userIsLoggedIn()) : ?>
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acount<span class="caret"></span></a>
				<ul class="dropdown-menu">


				<!-- Profiel foto van gebruiker -->
					<div class="profielInfo">
						<?php if (Config::get('USE_GRAVATAR')) { ?>
							<img class="avatar img-circle" src='<?= $this->user_gravatar_image_url; ?>' />
						<?php } else { ?>
							<img class="avatar img-circle" src='<?= $this->user_avatar_file; ?>' />
						<?php } ?>
							<li><?=  $this->user_name; ?></li>
					</div>
							<li role="separator" class="divider"></li>
							<li><a href="<?php echo Config::get('URL'); ?>user/index">Settings<span class="glyphicon glyphicon-cog pull-right"></span></a></li>
							<li><a href="<?php echo Config::get('URL'); ?>login/logout">Logout<span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
							<?php if (Session::get("user_account_type") == 7) : ?>
							<li><a href="<?php echo Config::get('URL'); ?>admin/">Admin</a></li>
						<?php endif; ?>
					<?php endif; ?>
				</ul>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
