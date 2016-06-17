<?php
	require_once "delete.logic.php";
	include "../common/header.php";
?>
	<h1>Delete patiënt</h1>
	<p>Are you sure you want to delete:</p>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patients['id']?>">
			<label for="name">Name:</label>
			<span><?=$patients['name']?></span>
		</div>
		<div>
			<label for="name">Species:</label>
			<span><?=$patients['species_id']?></span>
		</div>
		<div>
			<label for="name">Client:</label>
			<span><?=$patients['clients_id']?></span>
		</div>
		<div>
			<label></label>
			<input type="submit" name="confirmed" value="Yes">
			<input type="submit" name="canceled" value="No">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>