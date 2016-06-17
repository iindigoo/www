<?php
	$db = new mysqli('localhost','root','','hospital');
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		
		// Prepare data for insertion
		$name = $db->escape_string($_POST["name"]);
		$species_id = $db->escape_string($_POST["species"]);
		$clients_id = $db->escape_string($_POST["clients"]);
		$status = $db->escape_string($_POST["status"]);
		
		// Prepare query and execute
		$query = "insert into patients (name, species_id, status, clients_id) values ('$name','$species_id','$status','$clients_id')";
		$result = $db->query($query);
	
	    // Tell the browser to go back to the index page.
	    header("Location: ./"); 
	    exit();
	} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {

		$speciesQuery = "SELECT * FROM species";
		$clientsQuery = "SELECT * FROM clients";

		$speciesResult = $db->query($speciesQuery);
		$clientsResult = $db->query($clientsQuery);

		$species = $speciesResult->fetch_all(MYSQLI_ASSOC);
		$clients = $clientsResult->fetch_all(MYSQLI_ASSOC);
	}


?>