<h2>Bevestiging van verwijderen</h2>
<p>Weet je zeker dat je het onderstaande wilt verwijderen?</p>

<form method="post" action="delete.php?id=<?= $id; ?>" class="forms">
	<row>
		<column cols="6">
		        <input type="text" value="<?= $omschrijving; ?>" disabled="true">
		</column>
	</row>
	<section>
	        <button type="green" name="prompt" value="ja">Ja</button> <button type="red" name="prompt" value="nee">Nee</button>
	</section>
</form>