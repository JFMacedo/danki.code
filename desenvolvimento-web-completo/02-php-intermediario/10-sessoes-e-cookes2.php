<?php
  //Verificar se existe sessão.
  session_start();
  if(isset($_SESSION['name'])) {
    echo $_SESSION['name'];
  }

  //Destruir uma sessão.
  unset($_SESSION['name']);

  //Destruir todas as sessões;
  session_destroy();
?>