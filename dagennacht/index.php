<!DOCTYPE html>

<?php 

	$time = date("H:i");
	$daypart ;

	if ($time < 11.59) {
		echo "<h1>goeden morgen!</h1>";
		$daypart = "Morgen";
	}
	elseif ($time < 17.59) {
		echo "<h1>Goeden Middag!</h1>";
		$daypart = "Middag";
	}
	elseif ($time < 23.59) {
		echo "<h1>Goeden Avond!</h1>";
		$daypart = "Avond";
	}
	
	elseif ($time < 6.00) {
		echo "<h1>Goeden Nacht!</h1>";
		$daypart = "Nacht";
		}
?>




<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Goeden <?php echo $daypart ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class ="<?php echo $daypart ?>">

<?php

	echo "<h2>het is nu $time</h2>" ;
?>


</body>
</html>