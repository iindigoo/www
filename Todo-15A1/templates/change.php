<h2>Wijzigen</h2>

<form method="post" action="change.php?id=<?= $id; ?>" class="forms">
	<row>
		<column cols="6">
		        <input type="text" name="omschrijving" value="<?= $omschrijving; ?>">
		</column>
	</row>
	<section>
	        <button type="green" name="prompt" value="opslaan">Opslaan</button> <button type="red" name="prompt" value="nee">Annuleren</button>
	</section>
</form>