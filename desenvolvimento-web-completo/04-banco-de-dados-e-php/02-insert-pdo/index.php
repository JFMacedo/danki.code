<?php
  date_default_timezone_set('America/Sao_Paulo');

  $pdo = new PDO('mysql:host=localhost;port=90;dbname=modulo-08', 'root', '');

  if(isset($_POST['acao'])) {
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $regTime = date('Y-m-d H:i:s');

    $db = $pdo -> prepare("INSERT INTO `clients` VALUES (null, ?, ?, ?)");

    $db -> execute([
      $name,
      $lastName,
      $regTime
    ]);

    echo 'Cliente cadastrado com sucesso!';
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro no banco</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <form method="POST">
    <input type="text" name="name" id="name" placeholder="Nome" required />
    <input type="text" name="lastName" id="lastName" placeholder="Sobrenome" required />
    <input type="submit" name="acao" value="Enviar" />
  </form>
</body>
</html>