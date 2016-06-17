<?php

require("config/config.php");
require("logic/change_logic.php");

$id = isset($_GET['id'])?$_GET['id']:null;

if ($id != null AND is_numeric($id))
{
	if (!empty($_POST)) {
		if ($_POST['prompt'] == "opslaan") {
			change($conn, $id, $_POST['omschrijving']);
		}
		header("Location: index.php");	
	}

	$omschrijving = read($conn, $id);

	require("templates/header.php");
	require("templates/change.php");
	require("templates/footer.php");
} else {
	header("Location: index.php");
}

