<?php
	require_once "edit.logic.php";
	include "../common/header.php";
?>client
	<h1>Edit client</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$clients['id']?>">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" value="<?=$clients['name']?>" required>
		</div>
		<div>
			<label for="name">phone:</label>
			<input type="text" id="phone" name="phone" value="<?=$clients['phone']?>" required>
		</div>
		<div>
			<label for="name">E-mail:</label>
			<input type="text" id="email" name="email" value="<?=$clients['email']?>" required>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>