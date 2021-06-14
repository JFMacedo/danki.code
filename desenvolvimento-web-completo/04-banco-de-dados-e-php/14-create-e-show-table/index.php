<?php
  $pdo = new PDO('mysql:host=localhost; dbname=modulo_08', 'root', '');
  $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  /*
  $tables = $pdo -> query("SHOW TABLES");
  $tables = $tables -> fetchAll(PDO::FETCH_ASSOC);

  echo '<pre>';
  print_r($tables);
  echo '</pre>';
  */
  $db = 'CREATE TABLE course (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP
    )';

  $pdo -> exec($db);
?>