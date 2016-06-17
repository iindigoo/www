<body>
	<div class="container deletepage">
		<h3> Weer je zeker dat je dit item wilt verwijderen?</h3>
		<form method="post">
		<input disabled="true" placeholder="<?= $activity['description'];?>">
		<input type="hidden" name="id" value="<?= $activity['id'];?>">
		<button name="yes" class="btn btn-success">Ja</button>
		<button name="no" class="btn btn-danger">Nee</button>
		</form>
	</div>
</body>
