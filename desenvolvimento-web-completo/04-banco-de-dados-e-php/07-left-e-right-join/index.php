<?php
  $pdo = new PDO('mysql:host=localhost;port=90;dbname=modulo-08', 'root', '');
  $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db = $pdo -> prepare("SELECT * FROM `people` LEFT JOIN `role` ON `people`.`role` = `role`.`id`");
  $db -> execute();
  $peoplo = $db -> fetchAll();
  foreach($peoplo as $key => $value) {
    echo $value['name'].'<br />';
    echo $value['role_name'];
    echo '<hr />';
  }
?>