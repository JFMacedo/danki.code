<?php
  $pdo = new PDO('mysql:host=localhost;port=90;dbname=modulo-08', 'root', '');
  $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db = $pdo -> prepare("SELECT * FROM `people` /*GROUP BY role*/ ORDER BY name DESC LIMIT 1, 3");
  $db -> execute();
  $peoplo = $db -> fetchAll();
  foreach($peoplo as $key => $value) {
    echo $value['name'];
    echo '<hr />';
  }
?>