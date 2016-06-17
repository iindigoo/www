<html>
<head>
  <title>Formulier</title>
  <link href="form.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <div class="header">
    <h1>Mad lips</h1>
  </div>

  <div class="nav">

    <ul>
     <li><a href="form.php">Er heerst paniek....</a></li>
     <li><a href="onkunde.php">Onkunde</a></li>
    </ul>
  
  </div>

  <div class="content">
    <h2>Er heerst paniek....</h2>
    <form method="post" action="mood.php">
      <p>
        <label>Welk dier zou je nooit als huisdier willen hebben?</label>
        <input type="text" name="vraag1" />
      </p>
      
      <p>
        <label>Wie is de belangrijkste persoon in je leven?</label>
        <input type="text" name="vraag2" />
      </p>
      <p>
        <label>In welk land zou je graag willen wonen?</label>
        <input type="text" name="vraag3" />
      </p>
      <p>
        <label>Wat doe je als je je verveelt?</label>
        <input type="text" name="vraag4" />
      </p>
      <p>
        <label>Met welk speelgoed speelde je als kind het meest?</label>
        <input type="text" name="vraag5" />
      </p>
      <p>
        <label>Bij welke docent spijbel je het liefst?</label>
        <input type="text" name="vraag6" />
      </p>
      <p>
        <label>Als je EUR 100.000,- had, wat zou je dan kopen?</label>
        <input type="text" name="vraag7" />
      </p>
      <p>
        <label>Wat is je favoriete bezigheid?</label>
        <input type="text" name="vraag8" />
      </p>
      
      <p>
        <label>&nbsp;</label>
        <input type="submit" value="Versturen" />
      </p>
    </form>
  </div>
</body>
</html>
