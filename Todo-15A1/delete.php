<?php

require("config/config.php");
require("logic/delete_logic.php");

$id = isset($_GET['id'])?$_GET['id']:null;

if ($id != null AND is_numeric($id))
{
	if (!empty($_POST)) {
		if ($_POST['prompt'] == "ja") {
			delete($conn, $id);
		}
		header("Location: index.php");	
	}

	$omschrijving = read($conn, $id);

	require("templates/header.php");
	require("templates/delete.php");
	require("templates/footer.php");
} else {
	header("Location: index.php");
}

