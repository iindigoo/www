<?php

function read($conn, $id) {
	
	$stmt = $conn->prepare("SELECT description FROM activities WHERE id=?");
	$stmt->bind_param("i", $id);

	$stmt->execute();

	$stmt->bind_result($description);

	$stmt->fetch();
	$conn->close();

	return $description;
}

function change($conn,$id, $description) {
	$stmt = $conn->prepare("UPDATE activities SET description=? WHERE id=?");
	$stmt->bind_param("si", $description, $id);

	$stmt->execute();

	$conn->close();
}