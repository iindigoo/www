<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New Specie</h1>
	<form method="post">
		<div>
			<label for="name">Species:</label>
			<input type="text" id="species" name="species" required>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>