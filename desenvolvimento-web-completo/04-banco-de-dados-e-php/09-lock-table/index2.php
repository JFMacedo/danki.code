<?php
  $pdo = new PDO('mysql:host=localhost;port=90;dbname=node', 'root', '');
  $db = $pdo -> prepare("SELECT * FROM `clientes`");
  $db -> execute();
  $clients = $db -> fetchAll();
  foreach($clients as $key => $value) {
    echo $value['name'].' '.$value['lastName'].'<br />';
  }
?>