<?php

$sql = "SELECT * FROM activiteiten";
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

$conn->close();