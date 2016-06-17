<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"){ 
		$patients = NULL;
		if (isset($_GET['id'])){
			// Get Patient for id
			$db = new mysqli('localhost','root','','hospital');
			$id = $db->escape_string($_GET["id"]);

			$speciesQuery = "SELECT * FROM species";
			$clientsQuery = "SELECT * FROM clients";
			$query = "SELECT * from patients where id=$id";

			$speciesResult = $db->query($speciesQuery);
			$clientsResult = $db->query($clientsQuery);
			$result = $db->query($query);

			$species = $speciesResult->fetch_all(MYSQLI_ASSOC);
			$clients = $clientsResult->fetch_all(MYSQLI_ASSOC);
			$patients = $result->fetch_assoc();		

		}
		if ($patients == NULL){
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		}
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$db = new mysqli('localhost','root','','hospital');
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$name = $db->escape_string($_POST["name"]);
		$species_id = $db->escape_string($_POST["species"]);
		$clients_id = $db->escape_string($_POST["clients"]);
		$status = $db->escape_string($_POST["status"]);
		
		// Prepare query and execute
		$query = "update patients set name='$name', species_id='$species_id', clients_id='$clients_id', status='$status' where id=$id";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	}


?>