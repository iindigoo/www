<?php 
	require_once "index.logic.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Verjaardagskalender</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php foreach ($datums as $datum) {
        if(!($datum['month'] == $currentMonth)){
            $currentMonth = $datum['month'];
            ?>
            <h1><?= $months[$datum['month']]; ?></h1>
            <?php
        }
        if (!($datum['day'] == $currentDay)){
            $currentDay = $datum['day'];
            ?>
            <h2><?= $datum['day'] ?></h2>
            <?php
        } ?>
        <p>
            <?= $datum['person'];?>
        </p>
        <?php
    } ?>
<p><a href="create.php">+ Toevoegen</a></p>	
</body>
</html>