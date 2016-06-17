<?php
	
	$db = new mysqli('localhost','root','','hospital');

	$query = "SELECT patients.id, patients.name, patients.status, species.species, clients.name 
				AS cname FROM patients 
				INNER JOIN species ON patients.species_id = species.id 
				INNER JOIN clients ON patients.clients_id = clients.id";
	$result = $db->query($query);
	
	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>