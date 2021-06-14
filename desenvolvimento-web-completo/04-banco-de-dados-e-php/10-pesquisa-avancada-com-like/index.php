<?php
  $pdo = new PDO('mysql:host=localhost; port=90; dbname=node', 'root', '');
  $db = $pdo -> prepare("SELECT * FROM `clientes` WHERE `name` LIKE '%e%'");
  $db -> execute();
  $names = $db -> fetchAll();

  foreach($names as $key => $value) {
    echo "$value[name] $value[lastName] <hr />";
  }
?>