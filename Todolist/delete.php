<?php
	require("config/config.php");

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$id = $_POST['id'];

		// sql to delete a record
		$sql = "DELETE FROM activities WHERE id= $id";

		if ($conn->query($sql) === TRUE) {
		    echo "Record deleted successfully";
		} else {
		    echo "Error deleting record: " . $conn->error;
		}
		$conn->close();

		header("Location: index.php");
	} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
		if (!isset($_GET['id'])) {
		}
		$id = $_GET['id'];
		$sql = "SELECT * FROM `activities` WHERE id=$id";
		$result = $conn->query($sql);
		$activity = $result->fetch_assoc();
	} 

	require("template/header.php");
	require("template/delete.php");
	require("template/footer.php");
