<?php

function read($conn, $id) {
	
	$stmt = $conn->prepare("SELECT omschrijving FROM activiteiten WHERE id=?");
	$stmt->bind_param("i", $id);

	$stmt->execute();

	$stmt->bind_result($omschrijving);

	$stmt->fetch();
	$conn->close();

	return $omschrijving;
}

function delete($conn, $id) {
	$stmt = $conn->prepare("DELETE FROM activiteiten WHERE id=?");
	$stmt->bind_param("i", $id);

	$stmt->execute();

	$conn->close();
}