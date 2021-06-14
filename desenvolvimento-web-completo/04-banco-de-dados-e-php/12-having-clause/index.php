<?php
  $pdo = new PDO('mysql:host=localhost; port=90; dbname=node', 'root', '');
  $select = $pdo -> prepare("SELECT * FROM clientes GROUP BY lastName HAVING points >= 5");
  $select -> execute();
  echo '<pre>';
  print_r($select -> fetchAll());
  echo'</pre>';
?>