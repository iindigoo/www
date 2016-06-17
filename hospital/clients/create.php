<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New client</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>
		</div>
		<div>
			<label for="name">Phone:</label>
			<input maxlength="10" type="text" id="phone" name="phone" required>
		</div>
		<div>
			<label for="name">E-mail:</label>
			<input type="text" id="email" name="email" required>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>