<?php
  define('HOST', 'localhost');
  define('PORT', '90');
  define('DB', 'modulo-08');
  define('USER', 'root');
  define('PASS', '324189657');

  try {
    $pdo = new PDO('mysql:host='.HOST.';port='.PORT.';dbname='.DB, USER, PASS,
    [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf 8"]);
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(Exception $e) {
    echo '<p>Erro ao conectar!</p>';
  }
?>