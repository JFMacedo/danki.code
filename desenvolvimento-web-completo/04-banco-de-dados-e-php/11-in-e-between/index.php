<?php
  $pdo = new PDO('mysql:host=localhost; port=90; dbname=node', 'root', '');
  $db = $pdo -> prepare("SELECT * FROM `clientes` WHERE `name` /*IN (1, 5, 10)*/ BETWEEN 'd' AND 'h'");
  $db -> execute();
  $names = $db -> fetchAll();

  foreach($names as $key => $value) {
    echo "$value[name] $value[lastName] <hr />";
  }
?>