<h2>Wijzigen</h2>

<form method="post" action="change.php?id=<?= $id; ?>" class="forms">
	<row>
		<column cols="6">
		        <input type="text" name="description" value="<?= $description; ?>">
		</column>
	</row>
	<section>
	        <button type="green" name="prompt" value="save">Opslaan</button> <button type="red" name="prompt" value="nee">Annuleren</button>
	</section>
</form>