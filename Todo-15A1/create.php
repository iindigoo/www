<?php

require("config/config.php");
require("logic/create_logic.php");

if (!empty($_POST)) {
	create($conn, $_POST);
}
header("Location: index.php");
	