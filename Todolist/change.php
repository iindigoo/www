<?php 
require('config/config.php');
require("logic/change.logic.php");

$id = isset($_GET['id'])?$_GET['id']:null;

if ($id != null AND is_numeric($id))
{
	if (!empty($_POST)) {
		if ($_POST['prompt'] == "save") {
			change($conn, $id, $_POST['description']);
		}
		header("Location: index.php");	
	}

	$description = read($conn, $id);

	require("template/header.php");
	require("template/change.php");
	require("template/footer.php");
} else {
	header("Location: index.php");
}
