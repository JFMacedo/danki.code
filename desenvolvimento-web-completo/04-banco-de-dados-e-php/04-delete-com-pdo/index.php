<?php
  $pdo = new PDO('mysql:host=localhost;port=90;dbname=modulo-08', 'root', '');

  $id = 6;

  $db = $pdo -> prepare("DELETE FROM `clients` WHERE id=?");

  if($db -> execute($id)) {
    echo 'Cliente excluso com sucesso!';
  }
?>