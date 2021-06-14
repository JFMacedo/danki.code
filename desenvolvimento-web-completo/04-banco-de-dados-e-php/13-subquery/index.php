<?php
  $pdo = new PDO('mysql:host=localhost; port=90; dbname=modulo-08', 'root', '');
  $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db = $pdo -> prepare("SELECT * FROM people WHERE role = (SELECT id FROM role WHERE role_name = 'Contador')");
  $db -> execute();
  echo '<pre>';
  print_r($db -> fetchAll());
  echo'</pre>';
?>