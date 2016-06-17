<!DOCTYPE html>

<html>
<head>
  <title>Mood</title>
  <link href="form.css" rel="stylesheet" type="text/css" />
</head>

<body>

 <?php

		 $v1b = "";
		 $v2b = "";
		 $v3b = "";
		 $v4b = "";
		 $v5b = "";
		 $v6b = "";
		 $v7b = "";



		if(!empty($_POST))
		{

		 $v1b = $_POST['vraag1b']; 
		 $v2b = $_POST['vraag2b'];
		 $v3b = $_POST['vraag3b'];
		 $v4b = $_POST['vraag4b'];
		 $v5b = $_POST['vraag5b'];
		 $v6b = $_POST['vraag6b'];
		 $v7b = $_POST['vraag7b'];

		}
 ?>

  <div class="header">
    <h1>Mad lips</h1>
  </div>

  <div class="nav">

    <ul>
     <li><a href="form.php">Er heerst paniek....</a></li>
     <li><a href="onkunde.php">Onkunde</a></li>
    </ul>
  
  </div>

  <div class="contentmood">
 		
 		<p>Er heerst paniek in het koninkrijk <?php echo $v1b ?>. Koning <?php echo $v2b ?> is ten einde raad en als koning <?php echo $v2b ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $v3b ?>.</p>
		<p>"<?php echo $v3b ?>Het is een ramp! Het is een schande!"</p>
		<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
		<p>"Mijn <?php echo $v1b ?> is verdwenen! Zo maar, zonder waarschuwing.</p>
		<p>En ik had net <?php echo $v5b ?> voor hem gekocht!"</p>
		<p>"Majesteit, uw <?php echo $v4b ?> komt vast vanzelf weer terug?"</p>
		<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd
		<?php echo $v6b ?> leren?"</p>
		<p>"Maar Sire, daar kunt u toch uw <?php echo $v7b ?> voor gebruiken."</p>
		<p>"<?php echo $v3b ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
		<p>" Sire."</p>
		
	</p>
  </div>

</body>
</html>