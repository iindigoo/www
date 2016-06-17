<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RustServer</title>	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?
if ($_SERVER['REQUEST_URI'] == '/rustserver/store.php') {
  echo "halo";

}
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapser" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapser">
      <ul class="nav navbar-nav">
        <li class=""><a href="index.php">Home</a></li>
        <li><a href="store.php">Store</a></li>
      </ul>
    </div>
  </div>
</nav>
