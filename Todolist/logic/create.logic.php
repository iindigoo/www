<?php
function create($conn, $data) {
	$stmt = $conn->prepare("INSERT INTO activities (description) VALUES (?)");
	$stmt->bind_param("s", $description);

	$description = $data['omschrijving'];

	$stmt->execute();
}