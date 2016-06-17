<?php

function create($conn, $data) {
	$stmt = $conn->prepare("INSERT INTO activiteiten (omschrijving) VALUES (?)");
	$stmt->bind_param("s", $omschrijving);

	$omschrijving = $data['omschrijving'];

	$stmt->execute();
}