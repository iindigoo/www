<!DOCTYPE html>

<html>
<head>
  <title>Mood</title>
  <link href="form.css" rel="stylesheet" type="text/css" />
</head>

<body>

 <?php

		 $v1 = "";
		 $v2 = "";
		 $v3 = "";
		 $v4 = "";
		 $v5 = "";
		 $v6 = "";
		 $v7 = "";
		 $v8 = "";



		if(!empty($_POST))
		{

		 $v1 = $_POST['vraag1']; 
		 $v2 = $_POST['vraag2'];
		 $v3 = $_POST['vraag3'];
		 $v4 = $_POST['vraag4'];
		 $v5 = $_POST['vraag5'];
		 $v6 = $_POST['vraag6'];
		 $v7 = $_POST['vraag7'];
		 $v8 = $_POST['vraag8'];

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
 	
 		<p>Er heerst paniek in het koninkrijk <?php echo $v1 ?>. Koning <?php echo $v2 ?> is ten einde raad en als koning <?php echo $v2 ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $v3 ?>.</p>
		<p>"<?php echo $v3 ?>Het is een ramp! Het is een schande!"</p>
		<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
		<p>"Mijn <?php echo $v1 ?> is verdwenen! Zo maar, zonder waarschuwing.</p>
		<p>En ik had net <?php echo $v5 ?> voor hem gekocht!"</p>
		<p>"Majesteit, uw <?php echo $v4 ?> komt vast vanzelf weer terug?"</p>
		<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd
		<?php echo $v6 ?> leren?"</p>
		<p>"Maar Sire, daar kunt u toch uw <?php echo $v7 ?> voor gebruiken."</p>
		<p>"<?php echo $v3 ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
		<p>"<?php echo $v8 ?>, Sire."</p>
		
	</p>
  </div>

</body>
</html>