<?php
	
	$db = new mysqli('localhost','root','','calendar');

	$query = "SELECT * FROM birthdays ORDER BY month, day, year ASC";
	$result = $db->query($query);
	
	$datums = $result->fetch_all(MYSQLI_ASSOC);

	$months = array(
		1 => "Januari",
		2 => "Februari",
		3 => "Maart",
		4 => "April",
		5 => "Mei",
		6 => "Juni",
		7 => "Juli",
		8 => "Augustus",
		9 => "September",
		10 => "Oktober",
		11 => "November",
		12 => "December");

	$currentMonth = null;
	$currentDay = null;

?>