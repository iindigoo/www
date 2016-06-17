	    <table class="table-bordered">
		    <tr>
				<th>Omschrijving</th>
				<th colspan="2">Actie</th>
		    </tr>
			<?php
			foreach($rows as $row) { ?>
				<tr>
					<td><?= $row['omschrijving']; ?></td>
					<td><a href="change.php?id=<?= $row['id']; ?>">Wijzigen</a></td>
					<td><a href="delete.php?id=<?= $row['id']; ?>">Verwijderen</a></td>
				</tr>
		    <?php } ?>
		</table>

		<form action="create.php" method="post" class="forms">
		    <row>
		        <column cols="6">
		            <input type="text" name="omschrijving" placeholder="Omschrijving">
		        </column>
		        <column cols="6">
		            <button type="primary">Toevoegen</button>
		        </column>
		    </row>
		</form>