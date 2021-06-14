<?php
  date_default_timezone_set('America/Sao_paulo');

  $pdo = new PDO('mysql:host=localhost;port=90;dbname=modulo-08', 'root', '');

  $id = 6;
  $regTime = date('Y-m-d H:i:s');

  $db = $pdo -> prepare("UPDATE `clients` SET name='Francisco', lastName='Macedo', regTime='$regTime' WHERE id=$id");

  if($db -> execute()) {
    echo 'Cliente atualizado com sucesso!';
  }
?>