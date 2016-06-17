<?php

$activitiesQuery = "SELECT * FROM activities";
$activitiesResult = $conn->query($activitiesQuery);
$activities = $activitiesResult->fetch_all(MYSQLI_ASSOC);

$conn->close();