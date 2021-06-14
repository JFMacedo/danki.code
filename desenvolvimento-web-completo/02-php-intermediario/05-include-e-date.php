<?php
  date_default_timezone_set('America/Sao_Paulo');

  $date = date('d/m/Y H:i:s', time() + 600);

  echo $date;

  include('05-header.php');
?>

<h2>Meu Conteúdo</h2>

<?php
  include('05-footer.php')
?>