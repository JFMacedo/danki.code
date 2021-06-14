<?php
  $pdo = new PDO('mysql:host=localhost;port=90;dbname=node', 'root', '');

  $pdo -> exec("LOCK TABLES `clientes` WRITE");

  sleep(10);
?>