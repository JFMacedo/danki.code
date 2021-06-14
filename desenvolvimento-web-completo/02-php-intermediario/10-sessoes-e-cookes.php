<?php
  session_start();
  //$_SESSION['name'] = 'Jean';

  //setcookie('name', 'Jean', time() + 60, '/');
  setcookie('name', 'Jean', time() - 60, '/');

  echo $_COOKIE['name'];
?>