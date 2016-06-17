<?php
 
 if(!empty($_POST)) {
  $sql = "INSERT INTO opdracht (tekst)
  VALUES ('$_POST['tekstvlak']')"; 
  echo $sql;
  }


