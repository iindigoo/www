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
    <h2>Onkunde</h2>
    <form method="post" action="moodb.php">
      <p>
        <label>Wat zou je graag willen kunnen?</label>
        <input type="text" name="vraag1b" />
      </p>
      
      <p>
        <label>Met welke persoon kun je goed opschieten?</label>
        <input type="text" name="vraag2b" />
      </p>
      <p>
        <label>Wat is je favoriete getal?</label>
        <input type="text" name="vraag3b" />
      </p>
      <p>
        <label>Wat heb je altijd bij je als je op vakantie gaat?</label>
        <input type="text" name="vraag4b" />
      </p>
      <p>
        <label>Wat is je beste persoonlijke eigenschap?</label>
        <input type="text" name="vraag5b" />
      </p>
      <p>
        <label>Wat is je slechtste persoonlijke eigenschap?</label>
        <input type="text" name="vraag6b" />
      </p>
      <p>
        <label>Wat is het ergste dat je kan overkomen?</label>
        <input type="text" name="vraag7b" />
      </p>
      
      <p>
        <label>&nbsp;</label>
        <input type="submit" value="Versturen" />
      </p>
    </form>
  </div>
</body>
</html>
