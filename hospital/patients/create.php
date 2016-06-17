<?php
	require_once "create.logic.php";
	include "../common/header.php";
?>
	<h1>New patiënt</h1>
	<form method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>
		</div>
		<div>
			<label for="clients">client:</label>
			<select type="text" id="clients" name="clients" required>
<?php 
	foreach($clients as $client):
?>
  				<option value="<?=$client['id']?>"> <?= $client['name']?>
  				</option>
<?php
	endforeach;
?>
			</select>
		</div>
		<div>
			<label for="species">Species:</label>
			<select type="text" id="species" name="species" required>
<?php 
	foreach($species as $specie): 
?>
  				<option value="<?=$specie['id']?>"><?=$specie['species']?>
  				</option>
<?php
	endforeach;
?>
			</select>
		</div>
		<div>
			<label for="status">Status:</label>
			<textarea id="status" name="status"></textarea>
		</div>
		<div>
			<label></label>
			<input type="submit" value="Save">
		</div>
	</form>
<?php
	include "../common/footer.php";
?>