<table class="table table-bordered">
	<tr class="thead">
		<th>Omschrijving</th>
		<th>Wijzigen</th>
		<th>Verwijderen</th>
	</tr>
<?php
	foreach ($activities as $activity) { ?>
	<tr >
		<td><?= $activity['description']; ?></td>
		<td><a href="change.php?id=<?= $activity['id']; ?>">Wijzigen</a></td>
		<td><a href="delete.php?id=<?= $activity['id']; ?>">Verwijderen</a></td>
	</tr>
	
<?php } ?>
</table>
	<form action="create.php" method="post" class="form-group">
		<input placeholder="Omschrijving" type="text" name="omschrijving" class="form-control">
		<button class="btn btn-primary">Klik</button>
	</form>