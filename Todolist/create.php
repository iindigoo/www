<?php

require("config/config.php");
require("logic/create.logic.php");

if (!empty($_POST)) {
	create($conn, $_POST);
}
header("Location: index.php");