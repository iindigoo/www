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

function change($conn,$id, $omschrijving) {
	$stmt = $conn->prepare("UPDATE activiteiten SET omschrijving=? WHERE id=?");
	$stmt->bind_param("si", $omschrijving, $id);

	$stmt->execute();

	$conn->close();
}